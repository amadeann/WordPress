<!DOCTYPE html>
<!--[if IE 6]>
<html id="ie6" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 7]>
<html id="ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html id="ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<?php elegant_description(); ?>
	<?php elegant_keywords(); ?>
	<?php elegant_canonical(); ?>

	<?php do_action( 'et_head_meta' ); ?>

	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

	<?php $template_directory_uri = get_template_directory_uri(); ?>
	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( $template_directory_uri . '/js/html5.js"' ); ?>" type="text/javascript"></script>
	<![endif]-->

	<script type="text/javascript">
		document.documentElement.className = 'js';
	</script>

	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<div class="bootstrap-iso">
		<div class="tb-container-fluid">
			<div class="tb-row sas-top-header">
				<div class="tb-col-xs-12 tb-col-sm-6 tb-col-md-4 header-logo">
					<div class="tb-clearfix">
						<a class="sas-text-logo">
							<span class="sas-white">
								<span class="sas-before-dot sas-wrap-normal">SPIC AND SPAN</span><span class="sas-after-dot">.BOOK CLEANING</span>
							</span>
						</a>
					</div>
				</div>
				<div class="tb-col-xs-12 tb-col-sm-6 tb-col-md-8 header-contact-details">
					<div class="tb-clearfix">
						<div class="header-contact-details-inner">
							<h4 style="display: inline-block; font-size: 1em; padding-bottom: 0; margin-top: 0; margin-bottom:0; padding-right: 5px;">24/7 customer support: </h4>
							<ul class="tb-list-inline" style="display: inline-block; padding-bottom: 0; margin-bottom:0;">
								<li class="email"><i class="fa fa-envelope" aria-hidden="true" style="padding-right: 5px;"></i>info@spicandspan.de</li>
								<li class="mobile"><i class="fa fa-mobile" aria-hidden="true" style="padding-right: 5px;"></i>+49 174 130 45 02</li>
								<li class="phone"><i class="fa fa-phone" aria-hidden="true" style="padding-right: 5px;"></i>+49 30 2886 7985</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>