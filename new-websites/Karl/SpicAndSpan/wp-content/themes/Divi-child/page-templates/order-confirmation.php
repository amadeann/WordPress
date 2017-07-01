<?php

var_dump($_SESSION);

/*
Template Name: SAS Order Confirmation
*/


// Custom header has to be loaded relative to the folder with the style.css
// check the locate_template() source below to find out why
// https://core.trac.wordpress.org/browser/tags/4.8/src/wp-includes/template.php#L0
get_header('order-form'); ?>

<div class="bootstrap-iso sas-order order-confirmation order-confirmation-hero-image">

    <!-- Include the breadcrumbs-->

    <?php include dirname(__FILE__) . '/partials/order-form-breadcrumbs.php'; ?>

    <!-- /Include the breadcrumbs-->
    
    <div class="tb-container">
        <div class="tb-row">
            <div class="tb-col-xs-12">
                <h1>
                    <span class="sas-black">
                        <span class="sas-before-dot sas-wrap-normal">THANK YOU</span><span class="sas-after-dot">.</span>
                    </span>
                </h1>
                <div class="tb-panel tb-panel-info sas-panel">
                    <div class="tb-panel-heading">What happens now?</div>
                    <div class="tb-panel-body">
                        You will get an email with the summary of the order as well as a payment request via PayPal covering the first hour of cleaning.
                        The payment can be settled using any major credit or debit card. No PayPal account is required (although you may choose to pay directly from your PayPal account as well.
                        If you cancel the order no later than 12 hours before the scheduled cleaning date, the deposit will be fully reimbursed.
                    </div>
                </div>
                <div class="tb-panel tb-panel-default sas-panel">
                    <div class="tb-panel-heading">Order Summary</div>
                    <table class="tb-table">
                        <tr class=""><td>Cras justo odio</td><td>Cras justo odio</td></tr>
                        <tr class=""><td>Dapibus ac facilisis in</td><td>Cras justo odio</td></tr>
                        <tr class=""><td colspan="2">Special Requests</td></tr>
                        <tr class=""><td>Porta ac consectetur ac</td><td>Porta ac consectetur ac</td></tr>
                        <tr class=""><td>Vestibulum at eros</td><td>Porta ac consectetur ac</td></tr>
                    </table>
                </div>
                <h2>
                    Do you want to see more of <span class="sas-black"><span class="sas-before-dot sas-wrap-normal">SPIC AND SPAN</span><span class="sas-after-dot">.</span></span>?
                </h2>
                <div class="tb-row">
                    <div class="tb-col-md-4">
                        <div class="tb-panel tb-panel-default sas-panel">
                            <div class="tb-panel-heading">Check out out blog!</div>
                            <div class="tb-panel-body">
                                Enim dolor sint sit consequat reprehenderit adipisicing ea sit mollit. Ipsum eu reprehenderit ut deserunt occaecat tempor adipisicing non est reprehenderit nostrud quis. Incididunt dolor cupidatat ullamco excepteur mollit non magna consectetur eu consequat amet consectetur voluptate ullamco. Esse nulla mollit esse incididunt est et eiusmod occaecat cupidatat duis ea veniam occaecat. Duis sunt ullamco enim excepteur aliquip ad fugiat. Adipisicing consequat cillum amet elit quis esse voluptate enim ut fugiat magna. Enim consectetur quis nulla dolore dolore do esse ea.
                            </div>
                        </div>
                    </div>
                    <div class="tb-col-md-4">
                        <div class="tb-panel tb-panel-default sas-panel">
                            <div class="tb-panel-heading">See our YouTube Channel</div>
                            <div class="tb-panel-body">
                                Ex laborum sint qui magna cupidatat occaecat. Id cupidatat ullamco sunt proident aute minim et occaecat. Aute anim aliquip sint et et irure dolor culpa voluptate sit reprehenderit Lorem. Consequat consectetur consequat dolore nostrud cillum excepteur culpa ipsum pariatur est ex quis dolor.
                            </div>
                        </div>
                    </div>
                    <div class="tb-col-md-4">
                        <div class="tb-panel tb-panel-default sas-panel">
                            <div class="tb-panel-heading">Talk to us on Social Media</div>
                            <div class="tb-panel-body">
                                Cupidatat sint proident non quis adipisicing in proident ipsum adipisicing mollit aute ex duis. Consectetur consectetur duis ut fugiat. Velit sit reprehenderit exercitation amet ullamco est amet aute consequat anim anim. Nulla reprehenderit cillum eiusmod enim mollit ad est aliqua pariatur ut mollit anim tempor irure. Eiusmod est est mollit ullamco sit eu aliquip occaecat anim non velit in.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

</div>

<?php get_footer('order-form'); ?>