<h2 id="pages">Pages</h2>
<ul>
<?php
// Add pages you'd like to exclude in the exclude here
wp_list_pages(
  array(
    'exclude' => '',
    'title_li' => '',
  )
);
?>
</ul>

<h2 id="posts">Recipes</h2>
<ul>
<?php
// Add categories you'd like to exclude in the exclude here
$categories = get_categories();
foreach ($categories as $category) {
	$category_link = get_category_link($category->term_id);
	$cat_count = $category->category_count;

	echo '<div class="ss_cat_header"><a href="'.$category_link.'">'.ucwords($category->cat_name).'</a> ';
	query_posts('posts_per_page=-1&post_status=publish&cat='.$category->term_id); // show the sorted posts ?>
	<?php
		global $wp_query;	
		echo '('.$wp_query->post_count.')</div>'; ?>
	<?php
	if (have_posts()) :
		echo '<div class="post_item_list"><ul class="post_item_list">';
		while (have_posts()) :
			the_post(); ?>
			<li class="post_item">
				<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a>
			</li>
		<?php  endwhile;
		echo '</ul></div>';
	endif;
	wp_reset_query();
}

?>
</ul>