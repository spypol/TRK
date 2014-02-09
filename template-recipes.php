<?php
/*
 Template Name: Recipes
 */
get_header();?>

<?php

if(have_posts()){
	while(have_posts()){
		the_post();
		
		//get all the page data needed and set it to an object that can be used in other files
		$pex_page=new stdClass();
		$pex_page->subtitle=get_post_meta($post->ID, 'subtitle_value', true);
		$pex_page->intro=get_post_meta($post->ID, 'intro_value', true);
		$pex_page->cat_id=get_post_meta($post->ID,'postCategory_value',true);
		$pex_page->post_number=get_post_meta($post->ID,'postNumber_value',true);
		$pex_page->slider=get_post_meta($post->ID, "slider_value", $single = true);
		$pex_page->slider_prefix=get_post_meta($post->ID, 'slider_name_value', true);
		if($pex_page->slider_prefix=='default'){
			$pex_page->slider_prefix='';
		}
		$pex_page->order=get_post_meta($post->ID, 'order_value', true);
		$pex_page->layout='full';
		$pex_page->carousel=get_post_meta($post->ID, 'carousel_value', true);
		$pex_page->carousel_title=get_post_meta($post->ID, 'carouselTitle_value', true);
		$pex_page->sidebar_title=get_post_meta($post->ID, 'sidebarTitle_value', true);
		
		//include the before content template
		locate_template( array( 'includes/html-before-content.php'), true, true );
	}
}
?>



<a href="/category/appetizers-hors-doeuvres/"><img class=" size-full wp-image-3646" style="float: left; margin: 10px 30px 10px 0;" title="Appetizers - Hors d'oeuvres" src="wp-content/uploads/recipes/appetizer_over.jpg" alt="Appetizers - Hors d'oeuvres" width="300" height="300" /></a><a href="/category/breakfast/"><img class=" size-full wp-image-3647" style="float: left; margin: 10px 30px 10px 0;" title="Breakfast" src="wp-content/uploads/recipes/breakfast_over.jpg" alt="Breakfast" width="300" height="300" /></a><a href="/category/cookies-cakes-pastries/"><img class=" size-full wp-image-3648" style="float: left; margin: 10px 0 10px 0;" title="Cookies - Cakes - Pastries" src="wp-content/uploads/recipes/cake_over.jpg" alt="Cookies - Cakes - Pastries" width="300" height="300" /></a><a href="/category/sauces-dips-condiments/"><img class=" size-full wp-image-3650" style="float: left; margin: 10px 30px 10px 0;" title="Sauces - Dips - Condiments" src="wp-content/uploads/recipes/condiments_over.jpg" alt="Sauces - Dips - Condiments" width="300" height="300" /></a><a href="/category/chicken/"><img class=" size-full wp-image-3649" style="float: left; margin: 10px 30px 10px 0;" title="Chicken" src="wp-content/uploads/recipes/chicken_over.jpg" alt="Chicken" width="300" height="300" /></a><a href="/category/drinks/"><img class=" size-full wp-image-3651" style="float: left; margin: 10px 0 10px 0;" title="Drinks" src="wp-content/uploads/recipes/drink_over.jpg" alt="Drinks" width="300" height="300" /></a><a href="/category/ice-cream/"><img class=" size-full wp-image-3653" style="float: left; margin: 10px 30px 10px 0;" title="Ice Cream" src="wp-content/uploads/recipes/icecream_over.jpg" alt="Ice Cream" width="300" height="300" /></a><a href="/category/from-the-sea/"><img class=" size-full wp-image-3652" style="float: left; margin: 10px 30px 10px 0;" title="From the Sea" src="wp-content/uploads/recipes/fromthesea_over.jpg" alt="From the Sea" width="300" height="300" /></a><a href="/category/miscellaneous/"><img class=" size-full wp-image-3654" style="float: left; margin: 10px 0 10px 0;" title="Miscellaneous" src="wp-content/uploads/recipes/miscellaneous_over.jpg" alt="Miscellaneous" width="300" height="300" /></a><a href="/category/pies-tarts/"><img class=" size-full wp-image-3656" style="float: left; margin: 10px 30px 10px 0;" title="Pies - Tarts" src="wp-content/uploads/recipes/pie_over.jpg" alt="Pies - Tarts" width="300" height="300" /></a><a href="/category/noodles-pasta/"><img class=" size-full wp-image-3655" style="float: left; margin: 10px 30px 10px 0;" title="Noodles - Pasta" src="wp-content/uploads/recipes/pasta_over.jpg" alt="Noodles - Pasta" width="300" height="300" /></a><a href="/category/pork/"><img class=" size-full wp-image-3658" style="float: left; margin: 10px 0 10px 0;" title="Pork" src="wp-content/uploads/recipes/pork_over.jpg" alt="Pork" width="300" height="300" /></a><a href="/category/pizza-pancake/"><img class=" size-full wp-image-3657" style="float: left; margin: 10px 30px 10px 0;" title="Pizzas - Pancakes" src="wp-content/uploads/recipes/pizza_over.jpg" alt="Pizzas - Pancakes" width="300" height="300" /></a><a href="/category/rice-couscous/"><img class=" size-full wp-image-3660" style="float: left; margin: 10px 30px 10px 0;" title="Rice - Couscous" src="wp-content/uploads/recipes/rice_over.jpg" alt="Rice - Couscous" width="300" height="300" /></a><a href="/category/red-meat/"><img class=" size-full wp-image-3659" style="float: left; margin: 10px 0 10px 0;" title="Red Meat" src="wp-content/uploads/recipes/redmeat_over.jpg" alt="Red Meat" width="300" height="300" /></a><a href="/category/sandwich-tartine/"><img class=" size-full wp-image-3662" style="float: left; margin: 10px 30px 10px 0;" title="Sandwiches - Tartines" src="wp-content/uploads/recipes/sandwich_over.jpg" alt="Sandwiches - Tartines" width="300" height="300" /></a><a href="/category/salads/"><img class=" size-full wp-image-3661" style="float: left; margin: 10px 30px 10px 0;" title="Salads" src="wp-content/uploads/recipes/salad_over.jpg" alt="Salads" width="300" height="300" /></a><a href="/category/soup/"><img style="float: left; margin: 10px 0 10px 0;" title="Soup" src="wp-content/uploads/recipes/soup_over.jpg" alt="Soup" width="300" height="300" /></a>

<script type="text/javascript">
jQuery(document).ready(function($){
	$('#portfolio-preview-container').portfolioPreviewer({
		itemnum:<?php echo $pex_page->post_number; ?>,
		order:"<?php echo $pex_page->order; ?>",
		prev:"<?php echo pex_text('_previous_text'); ?>",
		next:"<?php echo pex_text('_next_text'); ?>",
		more:"<?php echo $pex_page->sidebar_title; ?>"
		});
});
</script>	

    </div>

<?php

//include the after content template
locate_template( array( 'includes/html-after-content.php'), true, true );

get_footer();
?>
