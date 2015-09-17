<?php
/**
 * Template Name: Online Store Landing
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * Please see /external/starkers-utilities.php for info on Starkers_Utilities::get_template_parts()
 *
 * @package 	WordPress
 * @subpackage 	Starkers
 * @since 		Starkers 4.0
 */
?>
<?php Starkers_Utilities::get_template_parts( array( 'html-header', 'header' ) ); ?>
<link rel="stylesheet" href="/dress/css/home.css" />

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

	<?php global $post; ?>

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
	<script type="text/javascript">
		jQuery(window).load(function(){
			if(jQuery(window).width() > 1024) {
				setTimeout(function(){
					var primaryheight = jQuery('#maincontentprimary').height();
					var secheight = jQuery('#maincontentsecondary').height();
					
					if(primaryheight > secheight)
					{
						jQuery('#maincontentsecondary').height(primaryheight);	
					}
					
				}, 3000);
			}
		});
	</script>
	<style>
		.recommended-hot-tubs
		{
			margin-top: 20px;
			border-bottom: 1px solid rgb(238, 238, 238);
		}
		
		.recommended-hot-tubs ul li
		{
			min-height: 330px;
			margin-bottom: 20px;
		}
		.recommended-hot-tubs ul li h3
		{
			color: #00539a;
			font-size: 21px;
			line-height: 25px;
		}
		
		.recommended-hot-tubs ul li p
		{
			color: #5a5a5a;
			font: 400 12px/16px "Open Sans",sans-serif;
		}
		
		article h3
		{
			color: #00539a;
			font-size: 21px;
			line-height: 25px;
		}
		
		article
		{
			padding-top: 50px;
		}
		
		footer, .footer
		{
			padding-top: 50px;
		}
	</style>
	<div class="primary" id="maincontentprimary">
		
		<div class="billboard" style="background: url(<?php the_field('billboard_image'); ?>) no-repeat left top">
				<div class="billboard-content-container">
					<div class="billboard-content">
						<h2><?php the_field('billboard_heading'); ?></h2>
						<a href="<?php the_field('billboard_button_link'); ?>"><?php the_field('billboard_button_text'); ?></a>
						<p><?php the_field('billboard_text'); ?></p>
					</div>
				</div>
		</div>
		<?php if( have_rows('online_products') ): ?>

			<div class="recommended-hot-tubs">
				<ul>
					<?php while( have_rows('online_products') ): the_row(); 
	
						// vars
						$title = get_sub_field('product_title');
						$image = get_sub_field('product_image');
						$content = get_sub_field('product_description');
						$link = get_sub_field('product_link');
	
					?>
						<li>
							<div class="image"><a href="<?php echo $link; ?>"><img src="<?php echo $image; ?>"></a></div>
							<h3><a href="<?php echo $link; ?>"><?php echo $title; ?></a></h3>
							<?php echo $content; ?>
						</li>
					<?php endwhile; ?>
				</ul>
			</div>
		<?php endif; ?>		
		<article>
			<?=apply_filters('the_content', $post->post_content) ?>
		</article>
		

		<?php //Starkers_Utilities::get_template_parts( array( 'free-inspection' ) ); ?>

		<?php Starkers_Utilities::get_template_parts( array( 'footer' ) ); ?>
	</div>

<?php endwhile; ?>

<div class="secondary" id="maincontentsecondary">
	<?php Starkers_Utilities::get_template_parts( array( 'secondary' ) ); ?>
</div>

<div style="clear: both;">&nbsp;</div>

</div>

<?php Starkers_Utilities::get_template_parts( array( 'html-footer' ) ); ?>
