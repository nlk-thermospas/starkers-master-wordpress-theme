<?php
/**
 *  Template Name: DYO App
 */
?>

<?php Starkers_Utilities::get_template_parts( array( 'html-header', 'header' ) ); ?>

	<div class="heading">
		<h1>Design Your Own Hot Tub</h1>
	</div>

	<div class="primary iframe-dyo">
		<!-- Updated for staging / THERMO-148 -->
		<article class="iframearticle thermo-148-stag">
			<?php if ( function_exists('thermo_server') && thermo_server() != 'live' ) { ?>
				<iframe src="https://thermospas-dyo-staging.firebaseapp.com/<?php echo (isset($_GET['iref']) && $_GET['iref'] !='' ? '?iref='.trim($_GET['iref']) : '' ); ?>"></iframe>
			<?php } else { ?>
				<iframe src="https://shining-heat-2332.firebaseapp.com/<?php echo (isset($_GET['iref']) && $_GET['iref'] !='' ? '?iref='.trim($_GET['iref']) : '' ); ?>"></iframe>
			<?php } ?>
		</article>

		<?php Starkers_Utilities::get_template_parts( array( 'footer' ) ); ?>

	</div>
<div style="clear: both;">&nbsp;</div>

</div>

<?php Starkers_Utilities::get_template_parts( array( 'html-footer' ) ); ?>