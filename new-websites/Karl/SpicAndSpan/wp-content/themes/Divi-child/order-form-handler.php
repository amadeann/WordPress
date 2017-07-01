<?php
require __DIR__ . '/vendor/autoload.php';
use Mailgun\Mailgun;


// var_dump(Pricing::get('regel','1'));
// exit;
// echo json_response('hahah HAHAHA LOL', 422);
// exit;

// checking whether the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $formData = [];
    $formErrors = [];

    /*
    ** Validate the form
    */

    /*
    ** Package validation
    */

    if(isset($_POST['package'])) {
        $package=htmlspecialchars($_POST['package']);
        $formData['packageKey']=$package;
        switch($package) {
            case 'regel':
                $formData['package']="Regelmäßige Reinigung";
                break;
            case 'prima':
                $formData['package']="Prima Reinigung";
                break;
            case 'umzuege':
                $formData['package']="Umzüge Reinigung";
                break;
            case 'party':
                $formData['package']="Party Reinigung";
                break;
            case 'allergie':
                $formData['package']="Allergie Reinigung";
                break;
            case 'buero':
                $formData['package']="Büro Reinigung";
                break;
            default:
                $formErrors['package']="Non-existing package selected";
        }
    } else {
        $formErrors['package']="Please select the package";
    }

    /*
    ** Cleaners validation
    */

    if(isset($_POST['cleaners'])) {
        $cleaners=htmlspecialchars($_POST['cleaners']);
        if(is_numeric($cleaners)) {
            $formData['cleaners']=$cleaners;
        } else {
            $formErrors['cleaners']="Incorrect number of cleaners selected";
        }
    } else {
        $formErrors['cleaners']="Specify the number of cleaners";
    } 

    /*
    ** Set pricing
    */

    if(isset($formData['package'])&&isset($formData['cleaners'])) {
        $formData['hourlyPricePerCleaner'] = Pricing::get($formData['packageKey'],$formData['cleaners']);
        $formData['hourlyPricePerAllCleaners'] = $formData['hourlyPricePerCleaner'] * $formData['cleaners'];
    }

    /*
    ** Property size validation
    */

    if(isset($_POST['property_size'])) {
        $propertySize=htmlspecialchars($_POST['property_size']);
        $formData['property_size']=$propertySize;
    } else {
        $formErrors['property_size']="Property size is required";
    } 


    /*
    ** Equipment validation
    */

    if(isset($_POST['equipment'])) {
        $formData['equipment']=[];
        foreach($_POST['equipment'] as $item) {
            $formData['equipment'][]=htmlspecialchars($item);
        }
    } else {
        $formErrors['equipment']=[];
    } 

    /*
    ** Extras validation
    */

    if(isset($_POST['extras'])) {
        $formData['extras']=[];
        foreach($_POST['extras'] as $item) {
            $equipment=htmlspecialchars($item);
            switch($equipment) {
                case 'fridge':
                    $formData['extras'][]='Fridge Cleaning';
                    break;
                case 'oven':
                    $formData['extras'][]='Oven Cleaning';
                    break;
                case 'window':
                    $formData['extras'][]='Window Cleaning';
                    break;
                case 'microwave':
                    $formData['extras'][]='Microwave Cleaning';
                    break;
                case 'carpet':
                    $formData['extras'][]='Carpet Cleaning';
                    break;
                case 'laundry':
                    $formData['extras'][]='Laundry Service';
                    break;
                default:
                    $formData['extras'][]='Other';
            }
        }
    } else {
        $formErrors['extras']=[];
    }

    /*
    ** Date & Time validation
    */

    if(isset($_POST['date'])) {
        $date=htmlspecialchars($_POST['date']);
        // to do: validate the date input format through reegx
        $formData['date']=$date;
    } else {
        $formErrors['date']="Date is required";
    }

    if(isset($_POST['time'])) {
        $time=htmlspecialchars($_POST['time']);
        // to do: validate the time input format through reegx
        $formData['time']=$time;
    } else {
        $formErrors['time']="Time is required";
    }

    /*
    **Comments validation
    */

    if(isset($_POST['comments'])) {
        $formData['comments']=htmlspecialchars($_POST['comments']);
    } else {
        $formData['comments']="";
    }

    /*
    ** Personal info validation
    */

    if(isset($_POST['salutation'])) {
        $formData['salutation']=htmlspecialchars($_POST['salutation']);
    } else {
        $formErrors['salutation']="salutation is required";
    }

    if(isset($_POST['first_name'])) {
        $formData['first_name']=htmlspecialchars($_POST['first_name']);
    } else {
        $formErrors['first_name']="First name is required";
    }

    if(isset($_POST['middle_name'])) {
        $formData['middle_name']=htmlspecialchars($_POST['middle_name']);
    } else {
        $formData['middle_name']="";
    }

    if(isset($_POST['last_name'])) {
        $formData['last_name']=htmlspecialchars($_POST['last_name']);
    } else {
        $formErrors['last_name']="Last name is required";
    }

    if(isset($_POST['company'])) {
        $formData['company']=htmlspecialchars($_POST['company']);
    } else {
        $formData['company']="";
    }

    if(isset($_POST['email'])) {
        // to do - validate the email through regex
        $formData['email']=htmlspecialchars($_POST['email']);
    } else {
        $formErrors['email']="Email address is required";
    }

    if(isset($_POST['phone'])) {
        $formData['phone']=htmlspecialchars($_POST['phone']);
    } else {
        $formData['phone']="";
    }

    /*
    ** Property address validation
    */

    if(isset($_POST['address_1'])) {
        $formData['address_1']=htmlspecialchars($_POST['address_1']);
    } else {
        $formErrors['address_1']="This address field is required";
    }

    if(isset($_POST['address_2'])) {
        $formData['address_2']=htmlspecialchars($_POST['address_2']);
    } else {
        $formData['address_2']="";
    }

    if(isset($_POST['city'])) {
        $formData['city']=htmlspecialchars($_POST['city']);
    } else {
        $formErrors['city']="City is required";
    }

    if(isset($_POST['zip_code'])) {
        $formData['zip_code']=htmlspecialchars($_POST['zip_code']);
    } else {
        $formData['zip_code']="";
    }

    if(isset($_POST['country_iso'])) {
        $formData['country_iso']=htmlspecialchars($_POST['country_iso']);
    } else {
        $formErrors['country_iso']="Country is required";
    }

    /*
    ** Check whether there are any erros in the form
    ** if there are, return 422
    ** if not, send the email and return the json with a status 200
    */

    if($formErrors!=[]) {
        echo json_response(array('data' => $formData, 'errors' => $formErrors), 422);
        exit;
    } 

    /*
    ** Load the email template
    ** The template assumes that there is an instance of the 'Mail' class
    */ 
    $mail = new NewOrderMail($formData);

    ob_start();
    include "./email-templates/sas-new-order.php";
    $emailContent = ob_get_clean();

    // include './email-templates/new-order.php';

    // Instantiate the client.
    $mgClient = new Mailgun('');
    $domain = "mg.spicandspan.de";

    // Make the call to the client.
    $result = $mgClient->sendMessage($domain, array(
        'from'    => 'SPIC AND SPAN.TEAM <info@spicandspan.de>',
        'to'      => 'aa@ak-ventures.eu',
        // 'cc'      => 'baz@example.com',
        // 'bcc'     => 'bar@example.com',
        'subject' => 'Thank you for your order',
        'text'    => 'Testing some Mailgun awesomness!',
        'html'    => $emailContent,
    ), array(
        // 'attachment' => array('/path/to/file.txt', '/path/to/file.txt')
    ));

    echo json_response(array('data' => $mail->data, 'errors' => $formErrors), 200);
    exit;

} else {
    echo json_response('Invalid request. Please visit https://www.spicandspan.de', 400);
    exit;
}

class NewOrderMail {

    public $data=[];

    public function __construct($arr) {

        $this->data=$arr;

        // $this->data['package'] = $arr['package'];
        // $this->data['cleaners'] = $arr['cleaners'];

        // $this->data['property_size'] = $arr['property_size'];
        // $this->data['equipment'] = $arr['equipment'];

        // $this->data['extras'] = $arr['extras'];

        // $this->data['date'] = $arr['date'];
        // $this->data['time'] = $arr['time'];

        // $this->data['comments'] = $arr['comments'];
        // $this->data['salutation'] = $arr['salutation'];
        // $this->data['first_name'] = $arr['first_name'];
        // $this->data['middle_name'] = $arr['middle_name'];
        // $this->data['last_name'] = $arr['last_name'];
        $this->data['customer_name'] = $this->data['salutation'] . ' ' . $this->data['first_name'] . ($this->data['middle_name']!="" ? ' ' . $this->data['middle_name'] : '') . ' ' . $this->data['last_name'];
        
        // $this->data['company'] = $arr['company'];
        // $this->data['email'] = $arr['email'];
        // $this->data['phone'] = $arr['phone'];

        // $this->data['address_1'] = $arr['address_1'];
        // $this->data['address_2'] = $arr['address_2'];
        // $this->data['city'] = $arr['city'];
        // $this->data['zip_code'] = $arr['zip_code'];
        // $this->data['country_iso'] = $arr['country_iso'];
    }
}

// class Package {

//     public $name;
//     public $key;
//     public $cleaners;
//     public $pricePerCleaner;
//     public $pricePerAllCleaners;

//     public function __construct($package, $cleaners) {
//         $this->key = $key;
//         $this->cleaners = $cleaners;
//         switch($package) {
//             case "regel":
//                 $this->name = "Regelmäßige Reinigung";
//                 $this->pircePerCleaner = Pricing::get($package,$cleaners);
//                 $this->pircePerAllCleaners = Pricing::get($package,$cleaners) * $cleaners;
//                 break;
//             case "prima":
//                 $this->name = "Party Reinigung";
//                 $this->pircePerCleaner = Pricing::get($package,$cleaners);
//                 $this->pircePerAllCleaners = Pricing::get($package,$cleaners) * $cleaners;
//                 break;
//             case "umzuege":
//                 $this->name = "Umzüge Reinigung";
//                 $this->pircePerCleaner = Pricing::get($package,$cleaners);
//                 $this->pircePerAllCleaners = Pricing::get($package,$cleaners) * $cleaners;
//                 break;
//             case "party":
//                 $this->name = "Party Reinigung";
//                 $this->pircePerCleaner = Pricing::get($package,$cleaners);
//                 $this->pircePerAllCleaners = Pricing::get($package,$cleaners) * $cleaners;
//                 break;
//             case "allergie":
//                 $this->name = "Allergie Reinigung";
//                 $this->pircePerCleaner = Pricing::get($package,$cleaners);
//                 $this->pircePerAllCleaners = Pricing::get($package,$cleaners) * $cleaners;
//                 break;
//             case "buero":
//                 $this->name = "Büro Reinigung";
//                 $this->pircePerCleaner = Pricing::get($package,$cleaners);
//                 $this->pircePerAllCleaners = Pricing::get($package,$cleaners) * $cleaners;
//                 break;
//         }
//     }
// }

class Pricing {

    private static function prices() {
        /*
        ** @return price per cleaner
        */

        return array(
            'regel' => array('1' => 24, '2' => 20),
            'prima' => array('1' => 29, '2' => 25),
            'umzuege' => array('1' => 34, '2' => 30),
            'party' => array('1' => 39, '2' => 34),
            'allergie' => array('1' => 39, '2' => 34),
            'buero' => array('1' => 'quotation pending', '2' => 'quotation pending')
        );
    }

    public static function get($package, $cleaners) {
        if(self::prices()[$package]===null) {
            return 'not available';
        } else {
            if(self::prices()[$package][$cleaners]===null) {
                return 'not available';
            } else {
                return self::prices()[$package][$cleaners];
            }
        }
    } 
}
