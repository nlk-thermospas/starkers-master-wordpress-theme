<div class="container">
	<header class="header">
		<div class="utility">
			<ul>
				<li class="call"><a href="tel:1-800-876-0158">Call Us <strong>1-800-876-0158</strong></a></li>
				<li class="pricing"><a href="/get-pricing">Get Pricing</a></li>
			</ul>
		</div>
	</header>
</div>
<div class="stripe-container">
	<div class="stripe">
		<div class="logo">
			<a href="/"><img src="/dress/global/logo.png" alt="<?php bloginfo( 'name' ); ?>" /></a>
		</div>

		<?php $uri = $_SERVER['REQUEST_URI'];
			$uriArr = explode('/', $uri);
		?>

	</div>
</div>
<script type="text/javascript">
			jQuery(document).ready(function(){
				jQuery('.zipcode input').attr('type', 'number');
				jQuery('.zipcode input').attr('pattern', '[0-9]*');
				jQuery('.zipcode input').attr('inputmode', 'numeric');
				//console.log('\d{10}');
			});
			
</script>
<div class="container">
