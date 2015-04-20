<?php
/**
 * The template for displaying Search results pages.
 *
 * @package Cryout Creations
 * @subpackage Mantra
 * @since Mantra 1.0
 */

get_header(); ?>

		<section id="container">
			<div id="content" role="main">
	<?php cryout_before_content_hook(); ?>
	
			<?php if ( have_posts() ) : ?>

				
				<?php mantra_content_nav( 'nav-above' ); ?>
				<span class="page-title"><?php printf( __( 'Search Results for: %s', 'mantra' ), '<span>' . get_search_query() . '</span>' ); ?></span>
	<div class="contentsearch"><?php get_search_form(); ?></div>
				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>
			<span class="mobile-only"><a href="<?php the_permalink(); ?>"><h1 class="entry-title"></a><?php the_title(); ?></h1></span>
			<div class="entry-content">
				<div class="feat-image">
					<?php the_post_thumbnail('medium'); ?>
				</div>
				<div class="category-excerpt">
					<a href="<?php the_permalink(); ?>"><h1 class="entry-title"><?php the_title(); ?></h1></a>
					<span>By 
						<?php 
							if (get_the_author_posts() == 1) {
								the_author(); ?>. <?php the_tags(); ?></span>
							<?php } else { 
								the_author_posts_link(); ?>. <?php the_tags(); ?></span>
						<?php } ?>
					<?php the_excerpt(); ?>

					<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'mantra' ), 'after' => '</div>' ) ); ?>
					<?php edit_post_link( __( 'Edit', 'mantra' ), '<span class="edit-link">', '</span>' ); ?>
				</div>
			</div> <!-- entry-content -->
										<?php endwhile; ?>

				<?php if($mantra_pagination=="Enable") mantra_pagination(); else mantra_content_nav( 'nav-below' ); ?>

			<?php else : ?>

				<article id="post-0" class="post no-results not-found">
	<span class="page-title"><?php printf( __( 'No search results for: %s', 'mantra' ), '<span>' . get_search_query() . '</span>' ); ?></span>
					<header class="entry-header">
						<h1 class="entry-title"><?php _e( 'Nothing Found', 'mantra' ); ?></h1>
					</header><!-- .entry-header -->
					<br /><div class="contentsearch"><?php get_search_form(); ?></div>
					</article><!-- #post-0 -->
				<?php endif; ?>


			<?php cryout_after_content_hook(); ?>
			</div><!-- #content -->
		<?php get_sidebar(); ?>
		</section><!-- #primary -->

<?php get_footer(); ?>
