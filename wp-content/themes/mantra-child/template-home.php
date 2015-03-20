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

		<section id="container" class="one-column">
			<div id="content" role="main">
		<div>
	<table id="cycler">
		<tr><td>

	<div class="cycle-slideshow" 
    data-cycle-fx=scrollHorz
    data-cycle-timeout=0
    data-cycle-pager="#adv-custom-pager"
    data-cycle-pager-template="<li><a href=#><img src='{{src}}' width=100 height=100></a></li>"
    >
    <img src="http://malsup.github.io/images/p1.jpg">
    <img src="http://malsup.github.io/images/p2.jpg">
    <img src="http://malsup.github.io/images/p3.jpg">
    <img src="http://malsup.github.io/images/p4.jpg">
</div></td>
<!-- empty element for pager links -->
<td><ul>
	<div id=adv-custom-pager class="center external"></div>
</ul></td></table>
</div> <!--cycler-->

			


			</div><!-- #content -->
		</section><!-- #container -->

<?php get_footer(); ?>
