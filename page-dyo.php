<?php
/**
 *  Template Name: DYO
 */
?>

<?php Starkers_Utilities::get_template_parts( array( 'html-header', 'header' ) ); ?>

	<div class="heading">
		<h1>Design Your Own Hot Tub</h1>
	</div>

	<div class="primary">

		<article class="iframearticle">
			<?php 
			
				if(isset($_GET['iref'])&& $_GET['iref'] !='')
				{
					echo '<iframe src="https://shining-heat-2332.firebaseapp.com/?iref='.trim($_GET['iref']).'"></iframe>';
				}
				else
				{
					echo '<iframe src="https://shining-heat-2332.firebaseapp.com"></iframe>';
				}	
			?>

		</article>


		<?php Starkers_Utilities::get_template_parts( array( 'footer' ) ); ?>

	</div>

<div style="clear: both;">&nbsp;</div>

</div>

<?php Starkers_Utilities::get_template_parts( array( 'html-footer' ) ); ?>