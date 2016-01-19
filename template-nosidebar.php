<?php
/*
 *  Template Name: Fullwidth - Nosidebar
 * 
 */
?>
<?php Starkers_Utilities::get_template_parts( array( 'html-header', 'header' ) ); ?>
<link rel="stylesheet" href="/dress/css/get-pricing-new.css" />
<style>
	.primary {
	    width: 100%;
	}
	
	.secondary
	{
		display: none !important;	
	}
	
	article {
	    width: 100%;
	    margin: 0px;
	    padding: 40px 65px 0px;
	}
</style>
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

	<div class="heading">
		<h1>
			<?php
			$main = get_post_meta($post->ID, 'main_heading', true);
			if($main != "") {
				echo $main;
			} else {
				the_title();
			}
			?>
		</h1>
	</div>
	

<?php global $post; ?>

		<div class="primary">
			<article>
				<?php the_content(); ?>
			</article>
		</div>

<?php endwhile; ?>
<?php Starkers_Utilities::get_template_parts( array( 'footer' ) ); ?>

<div style="clear: both;">&nbsp;</div>

</div>

<?php Starkers_Utilities::get_template_parts( array( 'html-footer' ) ); ?>
