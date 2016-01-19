<?php
/**
 *  Template Name: DYO
 */
?>

<?php Starkers_Utilities::get_template_parts( array( 'html-header', 'header' ) ); ?>
	<link rel="stylesheet" href="/dress/css/dyo.css" />
	<div class="heading">
		<h1>Design Your Own Hot Tub</h1>
	</div>

	<div class="primary">

		<article class="iframearticle">

			<iframe src="http://thermospas-dyo.herokuapp.com/"></iframe>

		</article>


		<?php Starkers_Utilities::get_template_parts( array( 'footer' ) ); ?>

	</div>

<div style="clear: both;">&nbsp;</div>

</div>

<?php Starkers_Utilities::get_template_parts( array( 'html-footer' ) ); ?>