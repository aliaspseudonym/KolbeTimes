<?php /*
Template Name: Custom Category Page
*/ ?>


<?php get_header(); ?>

<section id="container">
	<div id="content" role="main">

	 <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
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
			<div style="clear: both;"></div>
		</div>
		<?php
		$slug = basename(get_permalink());
		$meta_slug = get_post_meta(get_the_ID(), "slug", $single); // slug custom field
		$meta_catid = get_post_meta(get_the_ID(), "catid", $single); // category_id custom field
		$key = get_post_meta(get_the_ID(), "key", $single); // either slug or category_id custom field
		$slug = ($key?$key:($meta_catid?$meta_catid:($meta_slug?$meta_slug:($slug?$slug:0)))); // select one value out of the custom fields 	
		?>
	<?php endwhile; else: endif; ?>
	<hr>
	<br />
	<?php 
	$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
	if (is_numeric($slug)&&($slug>0)): 
		$the_query = new WP_Query( 'cat='.$slug.'&post_status=publish&orderby=date&order=desc&posts_per_page='.get_option('posts_per_page').'&paged=' . $paged ); 
	else: 
		$the_query = new WP_Query( 'category_name='.$slug.'&post_status=publish&orderby=date&order=desc&posts_per_page='.get_option('posts_per_page').'&paged=' . $paged ); 
	endif; 
	/* Start the Loop */ 
	while ( $the_query->have_posts() ) : $the_query->the_post();
		global $more; $more=0; // more gets lost inside page templates
		get_template_part( 'content', get_post_format() ); 
	endwhile;
	if($mantra_pagination=="Enable") mantra_pagination($the_query->max_num_pages); else mantra_content_nav( 'nav-below' );	
	?>
		
	</div><!-- #content -->
	
	<?php get_sidebar(); ?>
	
</section><!-- #container -->

<?php get_footer(); ?>
