<?php
/**
 * @package trk
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<h1 class="entry-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h1>

        
        <div class="entry-meta">
            
            <?php if ( 'post' == get_post_type() ) : ?>
            
                <?php trk_posted_on(); ?>
            
            <?php endif; ?>
            
            <?php
                /* translators: used between list items, there is a space after the comma */
                $categories_list = get_the_category_list( __( ' / ', 'trk' ) );
                if ( $categories_list && trk_categorized_blog() ) :
            ?>
            <span class="cat-links">
                <?php printf( __( '%1$s', 'trk' ), $categories_list ); ?>
            </span>
            <?php endif; // End if categories ?>
            
            <?php if ( ! post_password_required() && ( comments_open() || '0' != get_comments_number() ) ) : ?>
                <span class="comments-link"><?php comments_popup_link( __( 'Leave a comment', 'trk' ), __( '1 Comment', 'trk' ), __( '% Comments', 'trk' ) ); ?></span>
            <?php endif; ?>
        
        </div><!-- .entry-meta -->
            
        <a href="<?php the_permalink(); ?>" rel="bookmark" class="link-img"><?php echo get_the_post_thumbnail(); ?></a>
        
	</header><!-- .entry-header -->

	<?php if ( is_search() ) : // Only display Excerpts for Search ?>
	<div class="entry-summary">
		<?php the_excerpt(); ?>
	</div><!-- .entry-summary -->
	<?php else : ?>
	<div class="entry-content">
		<?php the_content( __( 'Read more <span class="meta-nav">»</span>', 'trk' ) ); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'trk' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
	<?php endif; ?>

	<footer class="entry-meta">
		<?php if ( 'post' == get_post_type() ) : // Hide category and tag text for pages on Search ?>
			<?php
				/* translators: used between list items, there is a space after the comma */
				$tags_list = get_the_tag_list( '', __( ', ', 'trk' ) );
				if ( $tags_list ) :
			?>
			<span class="tags-links">
				<?php //printf( __( 'Tagged %1$s', 'trk' ), $tags_list ); ?>
			</span>
			<?php endif; // End if $tags_list ?>
		<?php endif; // End if 'post' == get_post_type() ?>

		<?php edit_post_link( __( 'Edit', 'trk' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-meta -->
</article><!-- #post-## -->
