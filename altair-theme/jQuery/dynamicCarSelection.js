/* Following script is basedon the example here:
http://stackoverflow.com/questions/20483470/javascript-dynamic-drop-down-menu-values */

    var items = [
    {
        name:'Fiat', 
        value: 'Fiat', 
        subitems: [
            {name: '126p', value: '126p'}, 
            {name: '126p lotniczy', value: '126p lotniczy'},
            {name:'Seicento', value:'Seicento'},
            {name:'Cinuecento  ', value:'Cinuecento'},
            {name:'Uno', value:'Uno'},
            {name:'Tipo I', value:'Tipo I'},
            {name:'Punto I', value:'Punto I'},
            {name:'Punto II', value:'Punto II'},
            {name:'Punto III', value:'Punto III'},
            {name:'Siena', value:'Siena'},
            {name:'Palio I', value:'Palio I'},
            {name:'Brava I', value:'Brava I'},
            {name:'Brava II', value:'Brava II'},
            {name:'Albea', value:'Albea'},
            {name:'Doblo I', value:'Doblo I'},
            {name:'Doblo II', value:'Doblo II'},
            {name:'Ulisse', value:'Ulisse'},
            {name:'Marea', value:'Marea'},
            {name:'Grande Punto', value:'Grande Punto'},
            {name:'Evo', value:'Evo'},
            {name:'Sedici', value:'Sedici'},
            {name:'Linea', value:'Linea'},
            {name:'Ducato', value:'Ducato'},
            {name:'Bravo III', value:'Bravo III'},
            {name:'500', value:'500'},
            {name:'Fiorino', value:'Fiorino'},
            {name:'Fiorino Qubo', value:'Fiorino Qubo'},
            {name:'Scudo', value:'Scudo'},
            {name:'Croma II', value:'Croma II'},
            {name:'Stilo', value:'Stilo'},
            {name:'Panda II', value:'Panda II'},
            {name:'Panda III', value:'Panda III'},
            {name:'500 L', value:'500 L'},
            {name:'Doblo II cargo', value:'Doblo II cargo'}
        ]
    },
    {
        name: 'Mercedes',
        value: 'Mercedes',
        subitems: [
            {name:'124 - sedan', value:'124 - sedan'},
            {name:'190', value:'190'},
            {name:'Sprinter 1', value:'Sprinter 2'},
            {name:'A-klasse - combi', value:'A-klasse - combi'},
            {name:'C-klasse - combi', value:'C-klasse - combi'},
            {name:'C-klasse - sedan', value:'C-klasse - sedan'},
            {name:'E-klasse', value:'E-klasse'},
            {name:'124 - combi', value:'124 - combi'},
            {name:'Vito', value:'Vito'}
        ]
    },
    {
        name: 'Peugeot',
        value: 'Peugeot',
        subitems: [
            {name: '206', value:'206'},
            {name:'306', value:'306'},
            {name:'406 - combi', value:'406 - combi'},
            {name:'406 - sedan', value:'406 - sedan'},
            {name:'Partner II', value:'Partner II'},
            {name:'307', value:'307'},
            {name:'Boxer', value:'Boxer'},
            {name:'807', value:'807'},
            {name:'207', value:'207'},
            {name:'308', value:'308'},
            {name:'107', value:'107'},
            {name:'407 - sedan', value:'407 - sedan'},
            {name:'Bipper', value:'Bipper'},
            {name:'Expert', value:'Expert'},
            {name:'Partner III', value:'Partner III'},
            {name:'301', value:'301'}
        ]
    },
    {
        name: 'Polonez',
        value: 'Polonez',
        subitems: [
            {name: 'Polonez stary typ', value:'Polonez stary typ'},
            {name:'Caro', value:'Caro'},
            {name:'Caro MR', value:'Caro MR'},
            {name:'Atu', value:'Atu'},
            {name:'Truck', value:'Truck'}
        ]
    },
    {
        name: 'Ford',
        value: 'Ford',
        subitems: [
            {name:'Focus I', value:'Focus I'},
            {name:'Transit', value:'Transit'},
            {name:'Escort', value:'Escort'},
            {name:'Galaxy I', value:'Galaxy I'},
            {name:'Focus II', value:'Focus II'},
            {name:'Fusion I', value:'Fusion I'},
            {name:'Mondeo', value:'Mondeo'},
            {name:'Mondeo II', value:'Mondeo II'},
            {name:'C Max (Focus)', value:'C Max (Focus)'},
            {name:'Transit', value:'Transit'},
            {name:'Galaxy III', value:'Galaxy III'},
            {name:'Galaxy II', value:'Galaxy II'}
        ]
    },
    {
        name: 'Skoda',
        value: 'Skoda',
        subitems: [
            {name:'105/120', value:'105/120'},
            {name:'Favorit', value:'Favorit'},
            {name:'Felicia', value:'Felicia'},
            {name:'Fabia', value:'Fabia'},
            {name:'Octavia', value:'Octavia'},
            {name:'Octavia II', value:'Octavia II'},
            {name:'Octavia III', value:'Octavia III'},
            {name:'Roomster', value:'Roomster'},
            {name:'Fabia II', value:'Fabia II'},
            {name:'Yeti', value:'Yeti'},
            {name:'Rapid', value:'Rapid'},
            {name:'Citigo', value:'Citigo'},
            {name:'Octavia II TOUR', value:'Octavia II TOUR'}
        ]
    },
    {
        name: 'Volkswagen',
        value: 'Volkswagen',
        subitems: [
            {name:'Golf IV', value:'Golf IV'},
            {name:'Bora', value:'Bora'},
            {name:'Passat B5 - sedan', value:'Passat B5 - sedan'},
            {name:'Bus T4', value:'Bus T4'},
            {name:'Golf V', value:'Golf V'},
            {name:'Polo III', value:'Polo III'},
            {name:'Bus T5', value:'Bus T5'},
            {name:'Sharan I', value:'Sharan I'},
            {name:'Passat B4 - combi', value:'Passat B4 - combi'},
            {name:'Passat B6 - sedan', value:'Passat B6 - sedan'},
            {name:'Caddy II', value:'Caddy II'},
            {name:'Bus LT', value:'Bus LT'},
            {name:'Touran I', value:'Touran I'},
            {name:'Polo IV', value:'Polo IV'},
            {name:'Bus T6', value:'Bus T6'},
            {name:'Sharan III', value:'Sharan III'},
            {name:'Caddy I', value:'Caddy I'},
            {name:'Golf VI', value:'Golf VI'}
        ]
    },
    {
        name: 'Opel',
        value: 'Opel',
        subitems: [
            {name:'Vectra A', value:'Vectra A'},
            {name:'Astra Classic', value:'Astra Classic'},
            {name:'Corsa C', value:'Corsa C'},
            {name:'Agila', value:'Agila'},
            {name:'Astra II', value:'Astra II'},
            {name:'Omega A', value:'Omega A'},
            {name:'Vectra B', value:'Vectra B'},
            {name:'Meriva I', value:'Meriva I'},
            {name:'Corsa B', value:'Corsa B'},
            {name:'Sintra', value:'Sintra'},
            {name:'Vectra C', value:'Vectra C'},
            {name:'Astra III', value:'Astra III'},
            {name:'Combo C', value:'Combo C'},
            {name:'Frontiera', value:'Frontiera'},
            {name:'Zafira A', value:'Zafira A'},
            {name:'Corsa D', value:'Corsa D'},
            {name:'Vivaro', value:'Vivaro'},
            {name:'Movano', value:'Movano'},
            {name:'Vivaro', value:'Vivaro'},
            {name:'Combo D', value:'Combo D'}
        ]
    },
    {
        name: 'Citroen',
        value: 'Citroen',
        subitems: [
            {name:'Saxo', value:'Saxo'},
            {name:'C-15', value:'C-15'},
            {name:'Xsara II', value:'Xsara II'},
            {name:'Berlingo', value:'Berlingo'},
            {name:'C-3 I', value:'C-3 I'},
            {name:'Xsara Picasso', value:'Xsara Picasso'},
            {name:'C-8', value:'C-8'},
            {name:'Jumper', value:'Jumper'},
            {name:'C-4', value:'C-4'},
            {name:'C-5', value:'C-5'},
            {name:'C-1', value:'C-1'},
            {name:'Berlingo III', value:'Berlingo III'},
            {name:'Jumpi', value:'Jumpi'},
            {name:'C-3 Picasso', value:'C-3 Picasso'},
            {name:'Nemo', value:'Nemo'},
            {name:'C-3 II', value:'C-3 II'},
            {name:'C-4 II', value:'C-4 II'},
            {name:'C-4 Picasso', value:'C-4 Picasso'},
            {name:'C-Elysee', value:'C-Elysee'}
        ]
    },
    {
        name: 'Renault',
        value: 'Renault',
        subitems: [
            {name:'Kangoo I ', value:'Kangoo I'},
            {name:'Thalia', value:'Thalia'},
            {name:'Laguna II', value:'Laguna II'},
            {name:'Laguna I - sedan', value:'Laguna I - sedan'},
            {name:'Megane I', value:'Megane I'},
            {name:'Clio II', value:'Clio II'},
            {name:'Scenic I', value:'Scenic I'},
            {name:'Scenic II', value:'Scenic II'},
            {name:'Megane II', value:'Megane II'},
            {name:'Traffic', value:'Traffic'},
            {name:'Clio I', value:'Clio I'},
            {name:'Master', value:'Master'},
            {name:'Clio IV', value:'Clio IV'},
            {name:'Captur', value:'Captur'},
            {name:'Koleos', value:'Koleos'}
        ]
    },
    {
        name: 'Kia',
        value: 'Kia',
        subitems: [
            {name:'Rio haetchback', value:'Rio haetchback'},
            {name:'K 2500 I', value:'K 2500 I'},
            {name:'Picanto', value:'Picanto'},
            {name:'Cerato', value:'Cerato'},
            {name:'Clarus', value:'Clarus'},
            {name:'Cee`d I', value:'Cee`d I'},
            {name:'Cee`d II', value:'Cee`d II'},
            {name:'Carnival', value:'Carnival'},
            {name:'Sportage', value:'Sportage'},
            {name:'Sorento', value:'Sorento'},
            {name:'Optima', value:'Optima'},
            {name:'Rio - hatchback', value:'Rio - hatchback'},
            {name:'Rio - sedan', value:'Rio - sedan'},
            {name:'Sportage III', value:'Sportage III'}
        ]
    },
    {
        name: 'Seat',
        value: 'Seat',
        subitems: [
            {name:'Toledo', value:'Toledo'},
            {name:'Alhambra I', value:'Alhambra I'},
            {name:'Cordoba', value:'Cordoba'},
            {name:'Leon II', value:'Leon II'},
            {name:'Alhambra II', value:'Alhambra II'},
            {name:'Ibiza', value:'Ibiza'},
            {name:'Alhambra III', value:'Alhambra III'},
            {name:'Leon III', value:'Leon III'}
        ]
    },
    {
        name: 'Nissan',
        value: 'Nissan',
        subitems: [
            {name:'Micra', value:'Micra'},
            {name:'Almera N 16', value:'Almera N 16'},
            {name:'Navara', value:'Navara'},
            {name:'Primera P11', value:'Primera P11'},
            {name:'X-Trail', value:'X-Trail'},
            {name:'Note', value:'Note'},
            {name:'Primera P12', value:'Primera P12'},
            {name:'Tida', value:'Tida'},
            {name:'Almera 3D, N16', value:'Almera 3D, N16'},
            {name:'Terrano II', value:'Terrano II'},
            {name:'Primastar  – bus', value:'Primastar  – bus'},
            {name:'Pick Up', value:'Pick Up'},
            {name:'Pick Up NP 300', value:'Pick Up NP 300'},
            {name:'Qashqai', value:'Qashqai'}
        ]
    },
    {
        name: 'Suzuki',
        value: 'Suzuki',
        subitems: [
            {name:'Ignis II', value:'Ignis II'},
            {name:'Wagon R+', value:'Wagon R+'},
            {name:'Liana', value:'Liana'},
            {name:'Jimny', value:'Jimny'},
            {name:'Grand Vitara XL7', value:'Grand Vitara XL7'},
            {name:'Grand Vitara – 3D', value:'Grand Vitara  – 3D'},
            {name:'Grand Vitara – 5D', value:'Grand Vitara  – 5D'},
            {name:'Jimny II', value:'Jimny II'},
            {name:'Swift', value:'Swift'},
            {name:'Grand Vitara II', value:'Grand Vitara II'},
            {name:'SX 4 - hatchback', value:'SX 4 - hatchback'},
            {name:'Swift IV', value:'Swift IV'},
            {name:'Jimny III ', value:'Jimny III '},
            {name:'SX 4 S-Cross', value:'SX 4 S-Cross'},
            {name:'Baleno', value:'Baleno'},
            {name:'Celerio', value:'Celerio'},
            {name:'Vitara', value:'Vitara'}
        ]
    },
    {
        name: 'Daewoo',
        value: 'Daewoo',
        subitems: [
            {name:'Tico', value:'Tico'},
            {name:'Matiz', value:'Matiz'},
            {name:'Lanos', value:'Lanos'},
            {name:'Nexia', value:'Nexia'},
            {name:'Espero', value:'Espero'},
            {name:'Nubira II', value:'Nubira II'},
            {name:'Lublin', value:'Lublin'}
        ]
    },
    {
        name: 'Toyota',
        value: 'Toyota',
        subitems: [
            {name:'Yaris I', value:'Yaris I'},
            {name:'Corolla E12 - hatchback', value:'Corolla E12 - hatchback'},
            {name:'Corolla E12 - combi', value:'Corolla E12 - combi'},
            {name:'Yaris II', value:'Yaris II'},
            {name:'Avensis - combi', value:'Avensis - combi'},
            {name:'Avensis - sedan', value:'Avensis - sedan'},
            {name:'Aygo', value:'Aygo'},
            {name:'Yaris III', value:'Yaris III'},
            {name:'Corolla E15 - sedan', value:'Corolla E15 - sedan'},
            {name:'RAV4', value:'RAV4'},
            {name:'Auris I', value:'Auris I'},
            {name:'Corolla E15', value:'Corolla E15'},
            {name:'Corolla E16', value:'Corolla E16'},
            {name:'Auris II', value:'Auris II'}
        ]
    },
    {
        name: 'Rover',
        value: 'Rover',
        subitems: [
            {name:'620 is', value:'620 is'}
        ]
    },
    {
        name: 'Honda',
        value: 'Honda',
        subitems: [
            {name:'Accord', value:'Accord'}
        ]
    },
    {
        name: 'BMW',
        value: 'BMW',
        subitems: [
            {name:'Series 3 E36', value:'Series 3 E36'},
            {name:'Series 3 E46', value:'Series 3 E46'}
        ]
    },
    {
        name: 'Dacia',
        value: 'Dacia',
        subitems: [
            {name: 'Logan', value: 'Logan'},
            {name: 'Sandero', value: 'Sandero'},
            {name: 'Logan - combi', value: 'Logan - combi'}
        ]
    },
    {
        name: 'Volvo',
        value: 'Volvo',
        subitems: [
            {name: 'S40 - sedan', value: 'S40 - sedan'}
        ]
    },
    {
        name: 'Ssangyong',
        value: 'Ssangyong',
        subitems: [
            {name: 'Rexton', value: 'Rexton'}
        ]
    },
    {
        name: 'Audi',
        value: 'Audi',
        subitems: [
            {name: 'Audi 80 B3', value: 'Audi 80 B3'},
            {name: 'Audi B4 – sedan', value: 'Audi B4 – sedan'},
            {name: 'Audi A4 – sedan', value: 'Audi A4 – sedan'},
            {name: 'Audi A4 - combi', value: 'Audi A4 - combi'},
            {name: 'Audi A3 - sportback', value: 'Audi A3 - sportback'},
            {name: 'Audi A3', value: 'BrasAudi A3ilia'}
        ]
    },
    {
        name: 'Hyundai',
        value: 'Hyundai',
        subitems: [
            {name: 'i 20', value: 'i 20'},
            {name: 'Tucson', value: 'Tucson'}
        ]
    },
    {
        name: 'Mazda',
        value: 'Volkswagen',
        subitems: [
            {name: '3', value: '3'}
        ]
    },
    {
        name: 'Daihatsu',
        value: 'Daihatsu',
        subitems: [
            {name: 'Move', value: 'Move'}
        ]
    },
    {
        name: 'Iveco',
        value: 'Iveco',
        subitems: [
            {name: '35 C 15', value: '35 C 15'}
        ]
    }
];

/* 'car-brands-1' is an id of a drop-down menu with car brands 
'car-models-1' is an id of a drop-down menu with models of a given brand */


jQuery(function(){
    var temp = {};

    jQuery.each(items, function(){
        jQuery("<option />")
        .attr("value", this.value)
        .html(this.name)
        .appendTo("#car-brands-1");
        temp[this.value] = this.subitems;
    });

    jQuery("#car-brands-1").change(function(){
        var value = jQuery(this).val();
        var menu = jQuery("#car-models-1");

        menu.empty();
        jQuery.each(temp[value], function(){
            jQuery("<option />")
            .attr("value", this.value)
            .html(this.name)
            .appendTo(menu);
        });
    }).change();


});