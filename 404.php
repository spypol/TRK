<?php
/**
 * This is the page template for 404 Page not found response.
 */
get_header();
//get all the page data needed and set it to an object that can be used in other files
		$pex_page=new stdClass();
		$pex_page->subtitle='';
		$pex_page->slider='none';
		$pex_page->layout=get_opt('_blog_layout');
		$pex_page->sidebar=get_opt('_blog_sidebar');
		
		//include the before content template
		locate_template( array( 'includes/html-before-content.php'), true, true ); ?>

		<h2 class="post-title" style="color:#f23f42;">
			<?php //echo pex_text('_404_text'); ?>
			Yeep! Your page cannot be found. As consolation, here is a recipe for your amusement.
		</h2>
		
		
		
		
		<?php
			global $post;
			$tmp_post = $post;
			$args = array( 
				'numberposts' => 1, 
				'orderby'=> rand
			);
			$myposts = get_posts( $args );
			foreach( $myposts as $post ) : setup_postdata($post); ?>
					<?php
						$image_id = get_post_thumbnail_id();
						$image_url = wp_get_attachment_image_src($image_id,array(900,600), true);
						
						if(has_post_thumbnail()){?>
							<div class="blog-post-img">
							<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" style="
								background:url('<?php echo $image_url[0]; ?>') no-repeat center center; 
								padding:20px;
								margin-top:40px;
								vertical-align:bottom;
								color:#fff7e2;
								font-size:5em;
								line-height:1em;
								text-decoration:none;
								text-shadow: 0.01em 0.01em 0.1em #BBB;
								font-family: FragmentCore, sans-serif;
								display:block; 
								width:590px; 
								height:400px; 
								border:none;
								box-shadow: 2px 2px 6px #AAA;">
							<?php the_title(); ?>
							</a>
							</div>
						<?php }	?>
			<?php endforeach;?>
		
		
		
<?php 
		
//include the after content template
locate_template( array( 'includes/html-after-content.php'), true, true );
get_footer();

?>

