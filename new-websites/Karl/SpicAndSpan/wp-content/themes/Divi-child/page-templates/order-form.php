<?php
/*
Template Name: SAS Order Form
*/


// Custom header has to be loaded relative to the folder with the style.css
// check the locate_template() source below to find out why
// https://core.trac.wordpress.org/browser/tags/4.8/src/wp-includes/template.php#L0
get_header('order-form'); ?>

<div class="bootstrap-iso order-form sas-order" id="order-form">
    
    <!-- Include the breadcrumbs-->

    <?php include dirname(__FILE__) . '/partials/order-form-breadcrumbs.php'; ?>

    <!-- /Include the breadcrumbs-->

    <div class="order-form-wrapper tb-container">
        <div class="tb-row">
            <div class="tb-col-sm-8">
                <div class="tb-panel tb-panel-default">
                    <div class="tb-panel-body">
                        <h2 class="title">Book your cleaning</h2>
                        <div class="features">
                            <h4 class="subtitle">
                                <span class="sas-black">
                                    <span class="sas-before-dot sas-wrap-normal">SPIC AND SPAN</span>
                                    <span class="sas-after-dot">.GOLDEN RULES</span>
                                </span>
                            </h4>
                            <ul class="tb-row feature-list">
                                <li class="tb-col-tn-12 tb-col-xs-4 feature">
                                    <div class="icon">
                                        <i class="fa fa-check fa-lg"></i>
                                    </div>
                                    <div class="description">From the top to the bottom.</div>
                                </li>
                                <li class="tb-col-tn-12 tb-col-xs-4 feature">
                                    <div class="icon">
                                        <i class="fa fa-check fa-lg"></i>
                                    </div>
                                    <div class="description">Clean and Dirty Zones.</div>

                                </li>
                                <li class="tb-col-tn-12 tb-col-xs-4 feature">
                                    <div class="icon">
                                        <i class="fa fa-check fa-lg"></i>
                                    </div>
                                    <div class="description">Get rid of redundant stuff and clutter.</div>
                                </li>
                            </ul>
                        </div>
                        <div class="order-form">
                            <form class="" method="POST" action="http://serwer16331.lh.pl/karl/spicandspan/wp-content/themes/Divi-child/order-form-handler.php">
                                <div class="tb-row">
                                    <div class="tb-col-tn-12 tb-col-sm-12 tb-col-md-9">
                                        <!-- Cleaning Packages -->
                                        <fieldset class="order-form-packages sas-yellow">
                                            <legend>
                                                <span class="fa-stack">
                                                    <i class="fa fa-circle fa-stack-2x package-fieldset-completed tb-hidden"></i>
                                                    <i class="fa fa-circle-thin fa-stack-2x"></i>
                                                </span>
                                                <span>Cleaning Package:</span>
                                            </legend>
                                            <div class="tb-row">
                                                <div class="tb-col-tn-6 tb-col-xs-4 tb-col-sm-4">
                                                    <div class="tb-form-group">
                                                        <label for="package-regel" class="package-radio-label">
                                                            <div class="package-inner-wrapper">
                                                                <h4>
                                                                    <span class="sas-black">
                                                                        <span class="sas-before-dot sas-wrap-normal">REGELMÄßIGE REINIGUNG</span><span class="sas-after-dot">.</span>
                                                                    </span>
                                                                </h4>
                                                                <p class="order-form-package-callout">For regular customers only</p>
                                                            </div>
                                                        </label>
                                                        <input type="radio" name="package" id="package-regel" class="package-radio" value="regel" v-model="selectedPackage">
                                                    </div>
                                                </div>
                                                <div class="tb-col-tn-6 tb-col-xs-4 tb-col-sm-4">
                                                    <div class="tb-form-group">
                                                        <label for="package-prima" class="package-radio-label">
                                                            <div class="package-inner-wrapper">
                                                                <h4>
                                                                    <span class="sas-black">
                                                                        <span class="sas-before-dot sas-wrap-normal">PRIMA REINIGUNG</span><span class="sas-after-dot">.</span>
                                                                    </span>
                                                                </h4>
                                                                <p class="order-form-package-callout">Lorem ipsum dolor sit amet</p>
                                                            </div>
                                                        </label>
                                                        <input type="radio" name="package" id="package-prima" class="package-radio" value="prima" v-model="selectedPackage">
                                                    </div>
                                                </div>
                                                <div class="tb-col-tn-6 tb-col-xs-4 tb-col-sm-4">
                                                    <div class="tb-form-group">
                                                        <label for="package-umzuege" class="package-radio-label">
                                                            <div class="package-inner-wrapper">
                                                                <h4>
                                                                    <span class="sas-black">
                                                                        <span class="sas-before-dot sas-wrap-normal">UMZÜGE REINIGUNG</span><span class="sas-after-dot">.</span>
                                                                    </span>
                                                                </h4>
                                                                <p class="order-form-package-callout">Lorem ipsum dolor sit amet</p>
                                                            </div>
                                                        </label>
                                                        <input type="radio" name="package" id="package-umzuege" class="package-radio" value="umzuege" v-model="selectedPackage">
                                                    </div>
                                                </div>
                                                <div class="tb-col-tn-6 tb-col-xs-4 tb-col-sm-4">
                                                    <div class="tb-form-group">
                                                        <label for="package-party" class="package-radio-label">
                                                            <div class="package-inner-wrapper">
                                                                <h4>
                                                                    <span class="sas-black">
                                                                        <span class="sas-before-dot sas-wrap-normal">PARTY REINIGUNG</span><span class="sas-after-dot">.</span>
                                                                    </span>
                                                                </h4>
                                                                <p class="order-form-package-callout">Lorem ipsum dolor sit amet</p>
                                                            </div>
                                                        </label>
                                                        <input type="radio" name="package" id="package-party" class="package-radio" value="party" v-model="selectedPackage">
                                                    </div>
                                                </div>
                                                <div class="tb-col-tn-6 tb-col-xs-4 tb-col-sm-4">
                                                    <div class="tb-form-group">
                                                        <label for="package-allergie" class="package-radio-label">
                                                            <div class="package-inner-wrapper">
                                                                <h4>
                                                                    <span class="sas-black">
                                                                        <span class="sas-before-dot sas-wrap-normal">ALLERGIE REINIGUNG</span><span class="sas-after-dot">.</span>
                                                                    </span>
                                                                </h4>
                                                                <p class="order-form-package-callout">Lorem ipsum dolor sit amet</p>
                                                            </div>
                                                        </label>
                                                        <input type="radio" name="package" id="package-allergie" class="package-radio" value="allergie" v-model="selectedPackage">
                                                    </div>
                                                </div>
                                                <div class="tb-col-tn-6 tb-col-xs-4 tb-col-sm-4">
                                                    <div class="tb-form-group">
                                                        <label for="package-buero" class="package-radio-label">
                                                            <div class="package-inner-wrapper">
                                                                <h4>
                                                                    <span class="sas-black">
                                                                        <span class="sas-before-dot sas-wrap-normal">BÜRO REINIGUNG</span><span class="sas-after-dot">.</span>
                                                                    </span>
                                                                </h4>
                                                                <p class="order-form-package-callout">Lorem ipsum dolor sit amet</p>
                                                            </div>
                                                        </label>
                                                        <input type="radio" name="package" id="package-buero" class="package-radio" value="buero" v-model="selectedPackage">
                                                    </div>
                                                </div>
                                            </div>
                                        </fieldset>
                                    </div>
                                    <!-- End Cleaning Packages -->
                                    <!-- Cleaners -->
                                    <div class="tb-col-tn-12 tb-col-sm-3">
                                        <fieldset class="order-form-cleaners sas-aqua">
                                            <legend>
                                                <span class="fa-stack">
                                                    <i class="fa fa-circle fa-stack-2x cleaners-fieldset-completed tb-hidden"></i>
                                                    <i class="fa fa-circle-thin fa-stack-2x"></i>
                                                </span>
                                                <span>Cleaners:</span>
                                            </legend>
                                            <div class="tb-row">
                                                <div class="tb-col-tn-6 tb-col-xs-6 tb-col-sm-12">
                                                    <div class="tb-form-group">
                                                        <label for="cleaners-1" class="cleaners-radio-label">
                                                            <div class="cleaners-inner-wrapper">
                                                                <h4><img src="http://serwer16331.lh.pl/karl/spicandspan/wp-content/uploads/sas-assets/icons/cleaner-person.svg"
                                                                        class="order-form-icon"></h4>
                                                                <p class="order-form-cleaners-callout"><strong>1</strong> cleaning professional</p>
                                                            </div>
                                                        </label>
                                                        <input type="radio" name="cleaners" id="cleaners-1" class="cleaners-radio" value="1" v-model="selectedCleaners">
                                                    </div>
                                                </div>
                                                <div class="tb-col-tn-6 tb-col-xs-6 tb-col-sm-12">
                                                    <div class="tb-form-group">
                                                        <label for="cleaners-2" class="cleaners-radio-label">
                                                            <div class="cleaners-inner-wrapper">
                                                                <h4><img src="http://serwer16331.lh.pl/karl/spicandspan/wp-content/uploads/sas-assets/icons/cleaner-person.svg"
                                                                        class="order-form-icon"><img src="http://serwer16331.lh.pl/karl/spicandspan/wp-content/uploads/sas-assets/icons/cleaner-person.svg"
                                                                        class="order-form-icon"></h4>
                                                                <p class="order-form-cleaners-callout"><strong>2</strong> cleaning professionals</p>
                                                            </div>
                                                        </label>
                                                        <input type="radio" name="cleaners" id="cleaners-2" class="cleaners-radio" value="2" v-model="selectedCleaners">
                                                    </div>
                                                </div>
                                            </div>
                                        </fieldset>
                                    </div>
                                    <!-- End Cleaners -->
                                </div>
                                <div class="tb-row">
                                    <div class="tb-col-tn-12 tb-col-sm-12">
                                        <!-- Property Size -->
                                        <fieldset class="order-form-property-size sas-pink">
                                            <legend>
                                                <span>Property size (slider):</span>
                                            </legend>
                                            <div class="tb-row">
                                                <div class="tb-col-tn-12 tb-col-xs-12 tb-col-sm-12">
                                                    <div class="property-size-wrapper">
                                                        <span id="property-size-value" style="font-size: 24px;"><input type="text" id="property-size-target" value="50" name="property_size">
                                                            <span>&nbsp;sqm</span>
                                                        </span>
                                                    </div>
                                                    <div id="property-size-slider" class="tb-form-group"></div>
                                                </div>
                                            </div>
                                        </fieldset>
                                        <!-- End Property Size -->
                                    </div>
                                </div>
                                <!--</div>-->
                                <div class="tb-row">
                                    <div class="tb-col-tn-12 tb-col-sm-12 tb-col-md-3">
                                        <!-- Equipment -->
                                        <fieldset class="order-form-equipment sas-aqua">
                                            <legend>Do you have? </legend>
                                            <div class="tb-row">
                                                <div class="tb-col-tn-6 tb-col-xs-4 tb-col-sm-4 tb-col-md-12">
                                                    <div class="tb-form-group">
                                                        <label for="equipment-checkbox-1">
                                                            <div class="equipment-inner-wrapper">
                                                                <h4><img src="http://serwer16331.lh.pl/karl/spicandspan/wp-content/uploads/sas-assets/icons/detergent.svg"
                                                                        class="order-form-icon"></h4>
                                                                <p class="order-form-equipment-callout">Cleaning agents</p>
                                                            </div>
                                                        </label>
                                                        <input type="checkbox" name="equipment[]" id="equipment-checkbox-1" class="equipment-checkbox" value="detergents"
                                                            v-model="selectedEquipment"></div>
                                                </div>
                                                <div class="tb-col-tn-6 tb-col-xs-4 tb-col-sm-4 tb-col-md-12">
                                                    <div class="tb-form-group">
                                                        <label for="equipment-checkbox-2">
                                                            <div class="equipment-inner-wrapper">

                                                                <h4><img src="http://serwer16331.lh.pl/karl/spicandspan/wp-content/uploads/sas-assets/icons/mop-and-bucket.svg"
                                                                        class="order-form-icon"></h4>
                                                                <p class="order-form-equipment-callout">Mop</p>
                                                            </div>
                                                        </label>
                                                        <input type="checkbox" name="equipment[]" id="equipment-checkbox-2" class="equipment-checkbox" value="mop" v-model="selectedEquipment"></div>
                                                </div>
                                                <div class="tb-col-tn-6 tb-col-xs-4 tb-col-sm-4 tb-col-md-12">
                                                    <div class="tb-form-group">
                                                        <label for="equipment-checkbox-3">
                                                            <div class="equipment-inner-wrapper">
                                                                <h4><img src="http://serwer16331.lh.pl/karl/spicandspan/wp-content/uploads/sas-assets/icons/vacuum-cleaner.svg"
                                                                        class="order-form-icon"></h4>
                                                                <p class="order-form-equipment-callout">Vacuum Cleaner</p>
                                                            </div>
                                                        </label>
                                                        <input type="checkbox" name="equipment[]" id="equipment-checkbox-3" class="equipment-checkbox" value="vacuum" v-model="selectedEquipment"></div>
                                                </div>
                                            </div>
                                        </fieldset>
                                        <!-- End Equipment -->
                                    </div>
                                    <div class="tb-col-tn-12 tb-col-sm-12 tb-col-md-9">
                                        <!-- Extras -->
                                        <fieldset class="order-form-extras sas-yellow">
                                            <legend>Special requests:</legend>
                                            <div class="tb-row">
                                                <div class="tb-col-tn-6 tb-col-xs-4 tb-col-sm-4">
                                                    <div class="tb-form-group">
                                                        <label for="extras-fridge">
                                                            <div class="extras-inner-wrapper">
                                                                <h4><img src="http://serwer16331.lh.pl/karl/spicandspan/wp-content/uploads/sas-assets/icons/fridge.svg"
                                                                        class="order-form-icon"></h4>
                                                                <p class="order-form-extras-callout">Fridge Cleaning</p>
                                                            </div>
                                                        </label>
                                                        <input type="checkbox" name="extras[]" class="extras-checkbox" id="extras-fridge" value="fridge" v-model="selectedExtras">
                                                    </div>
                                                </div>
                                                <div class="tb-col-tn-6 tb-col-xs-4 tb-col-sm-4">
                                                    <div class="tb-form-group">
                                                        <label for="extras-oven">
                                                            <div class="extras-inner-wrapper">
                                                                <h4><img src="http://serwer16331.lh.pl/karl/spicandspan/wp-content/uploads/sas-assets/icons/oven.svg"
                                                                        class="order-form-icon"></h4>
                                                                <p class="order-form-extras-callout">Oven Cleaning</p>
                                                            </div>
                                                        </label>
                                                        <input type="checkbox" name="extras[]" class="extras-checkbox" id="extras-oven" value="oven" v-model="selectedExtras">
                                                    </div>
                                                </div>
                                                <div class="tb-col-tn-6 tb-col-xs-4 tb-col-sm-4">
                                                    <div class="tb-form-group">
                                                        <label for="extras-window">
                                                            <div class="extras-inner-wrapper">
                                                                <h4><img src="http://serwer16331.lh.pl/karl/spicandspan/wp-content/uploads/sas-assets/icons/window.svg"
                                                                        class="order-form-icon"></h4>
                                                                <p class="order-form-extras-callout">Window Cleaning</p>
                                                            </div>
                                                        </label>
                                                        <input type="checkbox" name="extras[]" class="extras-checkbox" id="extras-window" value="window" v-model="selectedExtras">
                                                    </div>
                                                </div>
                                                <div class="tb-col-tn-6 tb-col-xs-4 tb-col-sm-4">
                                                    <div class="tb-form-group">
                                                        <label for="extras-microwave">
                                                            <div class="extras-inner-wrapper">
                                                                <h4><img src="http://serwer16331.lh.pl/karl/spicandspan/wp-content/uploads/sas-assets/icons/microwave-oven.svg"
                                                                        class="order-form-icon"></h4>
                                                                <p class="order-form-extras-callout">Microwave Cleaning</p>
                                                            </div>
                                                        </label>
                                                        <input type="checkbox" name="extras[]" class="extras-checkbox" id="extras-microwave" value="microwave" v-model="selectedExtras">
                                                    </div>
                                                </div>
                                                <div class="tb-col-tn-6 tb-col-xs-4 tb-col-sm-4">
                                                    <div class="tb-form-group">
                                                        <label for="extras-carpet">
                                                            <div class="extras-inner-wrapper">
                                                                <h4><img src="http://serwer16331.lh.pl/karl/spicandspan/wp-content/uploads/sas-assets/icons/carpet.svg"
                                                                        class="order-form-icon"></h4>
                                                                <p class="order-form-extras-callout">Carpet Cleaning</p>
                                                            </div>
                                                        </label>
                                                        <input type="checkbox" name="extras[]" class="extras-checkbox" id="extras-carpet" value="carpet" v-model="selectedExtras">
                                                    </div>
                                                </div>
                                                <div class="tb-col-tn-6 tb-col-xs-4 tb-col-sm-4">
                                                    <div class="tb-form-group">
                                                        <label for="extras-laundry">
                                                            <div class="extras-inner-wrapper">
                                                                <h4><img src="http://serwer16331.lh.pl/karl/spicandspan/wp-content/uploads/sas-assets/icons/laundry-two-shirts.svg"
                                                                        class="order-form-icon"></h4>
                                                                <p class="order-form-extras-callout">Laundry Cleaning</p>
                                                            </div>
                                                        </label>
                                                        <input type="checkbox" name="extras[]" class="extras-checkbox" id="extras-laundry" value="laundry" v-model="selectedExtras">
                                                    </div>
                                                </div>
                                            </div>
                                        </fieldset>
                                        <!-- End Extras -->
                                    </div>
                                </div>
                                <fieldset>
                                    <legend>Date &amp; Time</legend>
                                    <div class="tb-row">
                                        <!-- Date -->
                                        <div class="tb-col-tn-12 tb-col-xs-6 tb-col-sm-6">
                                            <div class="tb-form-group">
                                                <div class="tb-input-group">
                                                    <span class="tb-input-group-addon"><i class="fa fa-calendar"></i></span>
                                                    <input type="text" class="tb-form-control" id="date" name="date" v-model="selectedDate">
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Date -->
                                        <!-- Time -->
                                        <div class="tb-col-tn-12 tb-col-xs-6 tb-col-sm-6">
                                            <div class="tb-form-group">
                                                <div class="tb-input-group">
                                                    <span class="tb-input-group-addon"><i class="fa fa-clock-o"></i></span>
                                                    <input type="text" class="tb-form-control" id="time" name="time" v-model="selectedTime">
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Time -->
                                    </div>
                                </fieldset>
                                <!-- Comments -->
                                <fieldset>
                                    <legend>Comments to our team</legend>
                                    <div class="tb-row">
                                        <div class="tb-col-tn-12 tb-col-xs-12 tb-col-sm-12">
                                            <textarea class="tb-form-control tb-textarea" rows="3" name="comments"></textarea>
                                        </div>
                                    </div>
                                </fieldset>
                                <!-- End Comments -->
                                <fieldset>
                                    <legend>Personal Information</legend>
                                    <div class="tb-row">
                                        <!-- Salutation -->
                                        <div class="tb-col-tn-12 tb-col-xs-6 tb-col-sm-4">
                                            <div class="tb-form-group">
                                                <select class="tb-form-control" id="salutation" name="salutation">
                                                    <option value="" disabled selected>Salutation</option>
                                                    <option value="Mr.">Mr.</option>
                                                    <option value="Mrs.">Mrs.</option>
                                                    <option value="Ms.">Ms.</option>
                                                </select>
                                            </div>
                                        </div>
                                        <!-- End Salutation -->
                                        <!-- First Name -->
                                        <div class="tb-col-tn-12 tb-col-xs-6 tb-col-sm-4">
                                            <div class="tb-form-group">
                                                <input type="text" class="tb-form-control" id="first_name"  name="first_name"placeholder="First Name">
                                            </div>
                                        </div>
                                        <!-- End First Name -->
                                        <!-- Last Name -->
                                        <div class="tb-col-tn-12 tb-col-xs-6 tb-col-sm-4">
                                            <div class="tb-form-group">
                                                <input type="text" class="tb-form-control" id="last_name" name="last_name" placeholder="Last Name">
                                            </div>
                                        </div>
                                        <!-- End Last Name -->
                                        <!-- Company Name -->
                                        <div class="tb-col-tn-12 tb-col-xs-6 tb-col-sm-4">
                                            <div class="tb-form-group">
                                                <input type="text" class="tb-form-control" id="company" name="company" placeholder="Company (optional)">
                                            </div>
                                        </div>
                                        <!-- End Company Name -->
                                        <!-- Email -->
                                        <div class="tb-col-tn-12 tb-col-xs-6 tb-col-sm-4">
                                            <div class="tb-form-group">
                                                <input type="text" class="tb-form-control" id="email" name="email" placeholder="Email">
                                            </div>
                                        </div>
                                        <!-- End Email -->
                                        <!-- Phone Number -->
                                        <div class="tb-col-tn-12 tb-col-xs-6 tb-col-sm-4">
                                            <div class="tb-form-group">
                                                <input type="text" class="tb-form-control" id="phone" name="phone" placeholder="Phone Number">
                                            </div>
                                        </div>
                                        <!-- End Phone Number -->
                                    </div>
                                </fieldset>
                                <fieldset>
                                    <legend>Property Address</legend>
                                    <div class="tb-row">
                                        <!-- Address 1 -->
                                        <div class="tb-col-tn-12 tb-col-xs-12 tb-col-sm-12">
                                            <div class="tb-form-group">
                                                <input type="text" class="tb-form-control" id="address_1" name="address_1" placeholder="Street">
                                            </div>
                                        </div>
                                        <!-- End Address 1 -->
                                        <!-- Address 2 -->
                                        <div class="tb-col-tn-12 tb-col-xs-12 tb-col-sm-12">
                                            <div class="tb-form-group">
                                                <input type="text" class="tb-form-control" id="address_2" name="address_2" placeholder="Address Line 2 (Optional)">
                                            </div>
                                        </div>
                                        <!-- End Address 2 -->
                                        <!-- Address 3 -->
                                        <div class="tb-hidden tb-col-tn-12 tb-col-xs-12 tb-col-sm-12">
                                            <div class="tb-form-group">
                                                <input type="text" class="tb-form-control" id="address_3" name="address_3" placeholder="Address Line 3">
                                            </div>
                                        </div>
                                        <!-- End Address 3 -->
                                        <!-- City -->
                                        <div class="tb-col-tn-12 tb-col-xs-6 tb-col-sm-4">
                                            <div class="tb-form-group">
                                                <input type="text" class="tb-form-control" id="city" name="city" placeholder="City">
                                            </div>
                                        </div>
                                        <!-- End City -->
                                        <!-- Zip Code -->
                                        <div class="tb-col-tn-12 tb-col-xs-6 tb-col-sm-4">
                                            <div class="tb-form-group">
                                                <input type="text" class="tb-form-control" id="zip_code" name="zip_code" placeholder="Zip Code">
                                            </div>
                                        </div>
                                        <!-- End Zip Code -->
                                        <!-- Country -->
                                        <div class="tb-col-tn-12 tb-col-xs-6 tb-col-sm-4">
                                            <div class="tb-form-group">
                                                <select class="tb-form-control" id="country_iso" name="country_iso">
                                                    <option value="DE">Germany</option>
                                                </select>
                                            </div>
                                        </div>
                                        <!-- Country -->
                                    </div>
                                </fieldset>
                                <button type="submit" class="tb-btn btn-sas-yellow tb-hidden-xs">Book Cleaning</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tb-col-sm-4" id="order-summary-column">
                <div v-bind:class="{'sticky-order-summary': stickyOrderSummary.active}" v-bind:style="{ width: stickyOrderSummary.width + 'px' }">
                    <div class="tb-panel tb-panel-default order-summary">
                        <div class="tb-panel-body">
                            <h3>Hourly Price:
                                <span id="hourly-price" v-text="hourlyPrice.price"></span>
                                <span v-text="hourlyPrice.unit"></span>
                                <!--<span id="hourly-price"></span>-->
                            </h3>
                            <h4>Package:
                                <span v-text="selectedPackageInfo.name"></span>
                                <!--<span>{{ selectedPackageInfo.name }}</span>-->
                            </h4>
                            <h4 v-if="(selectedDate!='')||(selectedTime!=''!='')">
                                <span v-if="selectedDate!=''!=''">{{ selectedDate }} </span>
                                <span v-if="selectedTime!=''!=''">@ {{ selectedTime }}</span>
                            </h4>
                            <div class="tb-row">
                                <div class="tb-col-xs-12">
                                    <h4>We will bring with us:</h4>
                                    <ul>
                                        <li v-for="item in equipmentToBring">{{ item.name }} ({{item.price}})</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="tb-row" v-if="hasExtras">
                                <div class="tb-col-xs-12" >
                                    <h4>In addition, we will:</h4>
                                    <ul>
                                        <li v-for="extra in selectedExtrasInfo" v-text="extra.description"></li>
                                    </ul>
                                </div>
                            </div>
                            <button class="tb-btn btn-sas-yellow">Book Cleaning</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/10.0.0/nouislider.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/10.0.0/nouislider.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/wnumb/1.1.0/wNumb.js"></script>
<link rel="stylesheet" href="https://unpkg.com/flatpickr/dist/flatpickr.min.css">
<script src="https://unpkg.com/flatpickr"></script>
<style>
    /* @media (min-width: 768px) and (max-width: 980px) {  This is not a breakpoint from bootstrap, but Divi!!
        .sticky-order-summary {
            position: fixed;
            top: 210px; may need to be adjusted later if sth in the Divi theme changes 
        }
    } */

    @media (min-width: 768px) {
        /* This is not a breakpoint from bootstrap, but Divi!! */
        .sticky-order-summary {
            position: fixed;
            top: 35px;
            /* may need to be adjusted later if sth in the Divi theme changes */
        }
    }
</style>
<script>

    jQuery(document).ready(function ($) {

        $.widget( "ui.aaCheckboxradio", $.ui.checkboxradio, {
            _create: function() {
                $(this).on('click', function (e) {
                    this.checked = !this.checked;
                    e.preventDefault();
                });
                return this._super();
            }
        });


        $(function () {
            $(".package-radio").checkboxradio({ icon: false });
            $(".cleaners-radio").checkboxradio({ icon: false });
            $(".property-size-radio").checkboxradio({ icon: false });
            $(".equipment-checkbox").checkboxradio({ icon: false });
            $(".extras-checkbox").aaCheckboxradio({ icon: false });
        });

        var packageFieldsetIndicator = $('.package-fieldset-completed');
        var cleanersFieldsetIndicator = $('.cleaners-fieldset-completed');
        var propertySizeFieldsetIndicator = $('.property-size-fieldset-completed');

        // notice that the listener is put on the input field and not on the label!
        // this allows to highlight the 'completed' circle also when a package is selected by keyboard
        $('.package-radio').on('click', function (event) {
            packageFieldsetIndicator.addClass('tb-show').removeClass('tb-hidden');
        });

        $('.cleaners-radio').on('click', function (event) {
            cleanersFieldsetIndicator.addClass('tb-show').removeClass('tb-hidden');
        });

        /*
        ** Property Size Slider
        */

        var propertySizeSlider = document.getElementById('property-size-slider');

        noUiSlider.create(propertySizeSlider, {
            start: 50,
            range: { min: 0, max: 220 },
            format: wNumb({
                decimals: 0,
                edit: function (value) {
                    if (value < 10) { 
                        return '10';
                    } else if (value >= 200) {
                        return '200+';
                    } else {
                        return value;
                    }
                }
            })
        });

        propertySizeSlider.noUiSlider.on('change', function (values, handle) {
            if ((values[handle] >= 200) || (values[handle] == '200+')) {
                propertySizeSlider.noUiSlider.set(200);
            } else if ((values[handle] < 10) || (values[handle] == '10')) {
                propertySizeSlider.noUiSlider.set(10);
            }
        });

        // var inputFormat = document.getElementById('input-format');
        var propertySizeTarget = document.getElementById('property-size-target');

        propertySizeSlider.noUiSlider.on('update', function (values, handle) {
            // inputFormat.value = values[handle];
            propertySizeTarget.value = values[handle];
            orderForm.selectedPropertySize = values[handle];
        });

        $(propertySizeTarget).change(function () {
            propertySizeSlider.noUiSlider.set($(this).val());
            orderForm.selectedPropertySize = $(this).val();
        });

        $(function () {
            $("#date").flatpickr({
                dateFormat: "Y-m-d",
                altInput: true,
                altFormat: "Y-m-d"
            });

            $("#time").flatpickr({
                enableTime: true,
                noCalendar: true,

                enableSeconds: false, // disabled by default

                time_24hr: false, // AM/PM time picker is used by default

                // default format
                dateFormat: "H:i",

                minuteIncrement: 15,

                defaultHour: 15 // change it to time 'now'

            });
        });
    });
</script>
<script>
    var pricing = {
        regel: [24, 20],
        prima: [29, 25],
        umzuege: [34, 30],
        party: [39, 35],
        allergie: [39, 35],
        buero: ['pricing on request', 'pricing on request']
    }
    var orderForm = new Vue({
        el: '#order-form',
        data: {
            stickyOrderSummary: {
                width: 1,
                active: false
            },
            selectedPackage: '',
            selectedCleaners: '',
            selectedPropertySize: '',
            selectedEquipment: [],
            selectedExtras: [],
            selectedDate:'',
            selectedTime:'',
             
        },
        computed: {
            hourlyPrice: function () {
                var packagePrice = ['select package', 'select package'];
                switch (this.selectedPackage) {
                    case 'regel':
                        packagePrice = pricing.regel;
                        break;
                    case 'prima':
                        packagePrice = pricing.prima;
                        break;
                    case 'umzuege':
                        packagePrice = pricing.umzuege;
                        break;
                    case 'party':
                        packagePrice = pricing.allergie;
                        break;
                    case 'allergie':
                        packagePrice = pricing.party;
                        break;
                    case 'buero':
                        packagePrice = pricing.buero;
                        return {price: packagePrice[0],unit: ''};
                    default:
                        return  {price: '', unit: 'select package'};
                }
                if((this.selectedCleaners=='')&&(this.selectedPackage!='buero')) {
                   return {price: '', unit: 'select number of cleaners'}; 
                }
                switch (this.selectedCleaners) {
                    case '1':
                        packagePrice = packagePrice[0];
                        break;
                    case '2':
                        packagePrice = packagePrice[1];
                        break;
                    default:
                        return {price: '', unit: 'select number of cleaners'};
                }
                return {price: '€' + packagePrice, unit: '/cleaner'};
            },
            selectedPackageInfo: function() {
                var selectedPackageInfo = {};
                switch (this.selectedPackage) {
                    case 'regel':
                        selectedPackageInfo.name = 'Regelmäßige Reinigung';
                        break;
                    case 'prima':
                        selectedPackageInfo.name = 'Prima Reinigung';
                        break;
                    case 'umzuege':
                        selectedPackageInfo.name = 'Umzüge Reinigung';
                        break;
                    case 'party':
                        selectedPackageInfo.name = 'Party Reinigung';
                        break;
                    case 'allergie':
                        selectedPackageInfo.name = 'Allergie Reinigung';
                        break;
                    case 'buero':
                        selectedPackageInfo.name = 'Büro Reinigung';
                        break;
                    default:
                        selectedPackageInfo.name = 'please select';
                }
                return selectedPackageInfo;
            },
            equipmentToBring: function() {
                var equipmentToBring = [];
                if (this.selectedEquipment.indexOf("detergents")==-1) {
                    equipmentToBring.push({name: 'Cleaning Agents', price: 'included'})
                }
                if (this.selectedEquipment.indexOf("mop")==-1) {
                    equipmentToBring.push({name: 'Mop',price: '+ €10 charge'})
                }
                if (this.selectedEquipment.indexOf("vacuum")==-1) {
                    equipmentToBring.push({name: 'Vacuum Cleaner',price: '+ €10 charge'})
                }
                return equipmentToBring;
            },
            hasExtras: function() {
                if(this.selectedExtras.length > 0) {
                    return true;
                } else return false;
            },
            selectedExtrasInfo: function() {
                var selectedExtrasInfo = [];
                if (this.selectedExtras.indexOf("fridge")!=-1) {
                    selectedExtrasInfo.push({name: 'Fridge Cleaning', description: 'clean your fridge'})
                }
                if (this.selectedExtras.indexOf("oven")!=-1) {
                    selectedExtrasInfo.push({name: 'Oven Cleaning', description: 'clean your oven'})
                }
                if (this.selectedExtras.indexOf("window")!=-1) {
                    selectedExtrasInfo.push({name: 'Window Cleaning', description: 'clean your windows'})
                }
                if (this.selectedExtras.indexOf("microwave")!=-1) {
                    selectedExtrasInfo.push({name: 'Microwave Cleaning', description: 'clean your microwave'})
                }
                if (this.selectedExtras.indexOf("carpet")!=-1) {
                    selectedExtrasInfo.push({name: 'Carpet Cleaning', description: 'clean your carpet'})
                }
                if (this.selectedExtras.indexOf("laundry")!=-1) {
                    selectedExtrasInfo.push({name: 'Laundry Service', description: 'do your laundry'})
                }
                return selectedExtrasInfo;
            }
        },
        methods: {
            handleScroll() {
                this.stickyOrderSummary.active = window.scrollY >= 100;
                this.stickyOrderSummary.width = document.getElementById('order-summary-column').offsetWidth -
                    30;
            },
            handleResize() {
                this.stickyOrderSummary.width = document.getElementById('order-summary-column').offsetWidth -
                    30; // remember about padding
            }
        },
        created() {
            // dirty solution for setting the initial width of the order summary column
            // will break on mobile, I have to think of sth better
            // comment to the first answer here may help:
            // https://stackoverflow.com/questions/35257707/conditional-style-rendering-with-vue-js
            this.stickyOrderSummary.width = document.getElementById('order-summary-column').offsetWidth - 30;
            // solution on scroll event listener from here:
            // https://github.com/vuejs/Discussion/issues/324
            window.addEventListener('scroll', this.handleScroll);
            window.addEventListener('resize', this.handleResize)
        }
    });
</script>

<?php get_footer('order-form'); ?>