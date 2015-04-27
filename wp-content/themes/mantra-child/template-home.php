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
<span class="noshow">
			<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

				<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<h1 class="entry-title" id="noshow"><?php the_title(); ?></h1>
					<div class="entry-content">
						<?php the_content(); ?>
						<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'mantra' ), 'after' => '</div>' ) ); ?>
						<?php edit_post_link( __( 'Edit', 'mantra' ), '<span class="edit-link">', '</span>' ); ?>
	
					</div><!-- entry-content -->
				</div><!-- #post-## -->

				<?php comments_template( '', true ); ?>
<?php endwhile; ?>
</span>
			
<section id="the-slideshow">
	<div id="cycler">
	<div class="cycle-slideshow" 
    data-cycle-fx=scrollHorz
	data-cycle-slides=">div"
    data-cycle-timeout=3000
    data-cycle-pager="#adv-custom-pager"
    data-cycle-pager-template=""
	data-cycle-pause-on-hover="true"
    >
	<div>
		<a class="link" href="<?php echo home_url('/'); ?>857/">
			<img src="<?php echo home_url('/'); ?>wp-content/uploads/2015/04/I-Am-Immigrant-SLIDER.jpg"/>
		</a>
	</div>
	<div>
		<a class="link" href="<?php echo home_url('/'); ?>calgary-dream-centre-a-focus-on-compassion/">
			<img src="<?php echo home_url('/'); ?>wp-content/uploads/2015/04/Language-of-Grief-SLIDER.jpg"/>
		</a>
	</div>
	<div>
		<a class="link" href="<?php echo home_url('/'); ?>corps-bara-youth-dance-company-mercy/">
			<img src="<?php echo home_url('/'); ?>wp-content/uploads/2015/04/Journey-Through-Dementia-SLIDER.jpg"/>
		</a>
	</div>
	<div>
		<a class="link" href="<?php echo home_url('/'); ?>once-you-know-the-spirit-of-mercy-in-rwanda/">
			<img src="<?php echo home_url('/'); ?>wp-content/uploads/2015/04/Why-Words-Matter-SLIDER.jpg"/>
		</a>
	</div>
		<div>
		<a class="link" href="<?php echo home_url('/'); ?>857/">
			<img src="<?php echo home_url('/'); ?>/wp-content/uploads/2015/04/Words-of-Healing-SLIDER.jpg"/>
		</a>
	</div>
</div> <!-- cycle-slideshow -->
<ul>
	<div id=adv-custom-pager>
		<li><a href="#"><img src="<?php echo home_url('/'); ?>wp-content/uploads/2015/04/I-Am-Immigrant-SLIDER-THUMB.jpg"/></a></li>
		<li><a href="#"><img src="<?php echo home_url('/'); ?>wp-content/uploads/2015/04/Language-of-Grief-SLIDER-THUMB.jpg"/></a></li>
		<li><a href="#"><img src="<?php echo home_url('/'); ?>wp-content/uploads/2015/04/Journey-Through-Dementia-SLIDER-THUMB.jpg"/></a></li>
		<li><a href="#"><img src='<?php echo home_url('/'); ?>wp-content/uploads/2015/04/Why-Words-Matter-SLIDER-THUMB.jpg'/></a></li>
		<li><a href="#"><img src="<?php echo home_url('/'); ?>wp-content/uploads/2015/04/Words-of-Healing-SLIDER-THUMB.jpg"/></a></li>
	</div> <!-- adv-custom-pager -->
</ul>
</div> <!--cycler-->
</section> <!--the-slideshow-->


			</div><!-- #content -->
			

<div id="quote">
	<h1>"We live by revelation, as Christians, as artists ... which means we must be careful never to get set into rigid molds."</h1>
	<p>-Madeleine L'Engle</p>
</div> <!-- #quote -->

			
			
			
			<section id= "other-content">

<div id="grid" class="short-columns">
	<div class="column">
		<div>
			<div>
				<br />
				<h1>Book Reviews</h1>
				<h2>Books that Changed My Life</h2>
				<p>Dr. Gordon Smith discusses a series of books which had a formative impact on his life.</p>
				<p><a href="<?php echo home_url('/'); ?>category/written-word/book-reviews/">All Book Reviews</a></p>
			</div>
			<img src="<?php echo home_url('/'); ?>wp-content/uploads/2015/04/books.jpg"/>
		</div>
		<div>
			<div>
				<br />
				<h1>Featured Artist</h1>
				<h2>Rob Hudec</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
				<p><a href="<?php echo home_url('/'); ?>category/featured-artist/">All Featured Artists</a></p>
			</div>
			<img src="<?php echo home_url('/'); ?>wp-content/uploads/2015/04/The-Narrow-Road-cover_3.jpg"/>
		</div>
	</div>
	<div class="column">
		<div>
			<div>
				<br />
				<h1>Poetry</h1>
				<h2>Valentine for Ernest Mann</h2>
				<p>You can’t order a poem like you order a taco. / Walk up to the counter, say, “I’ll take two”
				</p>
				<p><a href="<?php echo home_url('/'); ?>category/written-word/poetry/">All Poetry</a></p>
			</div>
			<img src="<?php echo home_url('/'); ?>wp-content/uploads/2014/11/mc_logo_new.png"/>
		</div>
		<div>
			<div>
				<br />
				<h1>Film Reviews</h1>
				<h2>Letters to Father Jacob</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
				<p><a href="<?php echo home_url('/'); ?>category/film/film-reviews/">All Film Reviews</a></p>
			</div>
			<img src="<?php echo home_url('/'); ?>wp-content/uploads/2015/04/Letters-to-Father-Jacob-COVER-CROP.jpg"/>
		</div>
	</div>
	<div class="column">
		<div>
			<div>
				<br />
				<h1>Editorials</h1>
				<h2>Musings from the Editor's Desk</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
				<p><a href="#">All Editorials</a></p>
			</div>
			<img src="<?php echo home_url('/'); ?>wp-content/uploads/2015/04/words.jpg"/>
		</div>
		<div>
			<div>
				<br />
				<h1>Theatre</h1>
				<h2>Miracle Worker</h2>
				<p>Lorem ipsum dolor sit amet, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
				<p><a href="<?php echo home_url('/'); ?>category/performance-arts/theatre/">All Theatre Articles</a></p>
			</div>
			<img src="<?php echo home_url('/'); ?>wp-content/uploads/2015/04/Miracle-Worker-image.jpg"/>
		</div>
	</div>
</div> <!-- grid -->

<div id="writers">
	<div class="writers-column-1">
		<div>
			<h1>Gathered Wisdom</h1>
			<img src="<?php echo home_url('/'); ?>wp-content/uploads/2015/04/gathered-wisdom-thumb.jpg" />
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
		</div>
		<div>
			<h1>Dialogue</h1>
			<img src="<?php echo home_url('/'); ?>wp-content/uploads/2015/04/Dialogue-thumb.jpg" />
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
		</div>
	</div> <!-- writers-column -->
	<div class="writers-column-2">
		<div>
			<h1>A Beautiful Synergy</h1>
			<img src="<?php echo home_url('/'); ?>wp-content/uploads/2015/04/synergy-thumb.jpg" />
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
		</div>
	</div> <!-- writers-column -->
</div> <!-- writers -->
		</section><!-- #container -->

<?php get_footer(); ?>
