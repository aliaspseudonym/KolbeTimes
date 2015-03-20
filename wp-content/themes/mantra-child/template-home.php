<?php
/**
 * Template Name: Custom Front Page
 *
 * A custom page template without sidebar.
 *
 * The "Template Name:" bit above allows this to be selectable
 * from a dropdown menu on the edit page screen.
 *
 * @package Cryout Creations
 * @subpackage mantra
 * @since mantra 0.5
 */

get_header(); ?>

		<section id="container" class="one-column">
			<div id="content" role="main">
			
			
			<div class="cycle-slideshow" 
    data-cycle-fx=scrollHorz
    data-cycle-timeout=0
    data-cycle-pager="#no-template-pager"
    data-cycle-pager-template=""
    >
    <img src="http://malsup.github.io/images/p1.jpg">
    <img src="http://malsup.github.io/images/p2.jpg">
    <img src="http://malsup.github.io/images/p3.jpg">
    <img src="http://malsup.github.io/images/p4.jpg">
</div>
<div id=no-template-pager class="cycle-pager external">
    <!-- using thumbnail image files would be even better! -->
    <img src="http://malsup.github.io/images/p1.jpg" width=20 height=20>
    <img src="http://malsup.github.io/images/p2.jpg" width=20 height=20> 
    <img src="http://malsup.github.io/images/p3.jpg" width=20 height=20> 
    <img src="http://malsup.github.io/images/p4.jpg" width=20 height=20>
</div>
			
			

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

				<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<h1 class="entry-title"><?php the_title(); ?></h1>
					<div class="entry-content">
						<?php the_content(); ?>
						<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'mantra' ), 'after' => '</div>' ) ); ?>
						<?php edit_post_link( __( 'Edit', 'mantra' ), '<span class="edit-link">', '</span>' ); ?>
					</div><!-- .entry-content -->
				</div><!-- #post-## -->

				<?php comments_template( '', true ); ?>

<?php endwhile; ?>

			</div><!-- #content -->
		</section><!-- #container -->

<?php get_footer(); ?>
