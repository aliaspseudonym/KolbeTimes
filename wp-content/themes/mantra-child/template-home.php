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
			<div id="content" roles="main">
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
		<a class="link" href="<?php echo home_url('/'); ?>i-am-immigrant/">
			<img src="<?php echo home_url('/'); ?>wp-content/uploads/2015/04/I-Am-Immigrant-SLIDER.jpg"/>
		</a>
	</div>
	<div>
		<a class="link" href="<?php echo home_url('/'); ?>the-language-of-grief/">
			<img src="<?php echo home_url('/'); ?>wp-content/uploads/2015/04/Language-of-Grief-SLIDER.jpg"/>
		</a>
	</div>
	<div>
		<a class="link" href="<?php echo home_url('/'); ?>journey-through-dementia-my-mothers-words/">
			<img src="<?php echo home_url('/'); ?>wp-content/uploads/2015/04/Journey-Through-Dementia-SLIDER.jpg"/>
		</a>
	</div>
	<div>
		<a class="link" href="<?php echo home_url('/'); ?>why-words-matter/">
			<img src="<?php echo home_url('/'); ?>wp-content/uploads/2015/04/Why-Words-Matter-SLIDER.jpg"/>
		</a>
	</div>
		<div>
		<a class="link" href="<?php echo home_url('/'); ?>words-of-healing-words-of-hope/">
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
	<h1>Tell us about one of your favourite books, and why it made an impact. We’d love to share your picks with our readers!</h1>
	<a href="<?php echo home_url('/'); ?>submissions/"><p>Click here to submit!</p></a>
</div> <!-- #quote -->

			
			
			
			<section id= "other-content">

<div id="grid" class="short-columns">
	<div class="column">
		<div>
			<div>
				<br />
				<h1>Book Reviews</h1>
				<a href="<?php echo home_url('/'); ?>books-that-changed-my-life/"><h2>Books that Changed My Life</h2></a>
				<p>Dr. Gordon Smith discusses the books that had a significant impact on his faith formation, and led to a change of heart.</p>
				<p><a href="<?php echo home_url('/'); ?>category/written-word/book-reviews/">All Book Reviews</a></p>
			</div>
			<a href="<?php echo home_url('/'); ?>books-that-changed-my-life/"><img src="<?php echo home_url('/'); ?>wp-content/uploads/2015/04/books.jpg"/></a>
		</div>
		<div>
			<div>
				<br />
				<h1>Featured Artist</h1>
				<a href="<?php echo home_url('/'); ?>featured-artist-rob-hudec/"><h2>Rob Hudec</h2></a>
				<p>Meet Rob Hudec, who has gathered together his musical friends in a joyful new gospel album.</p>
				<p><a href="<?php echo home_url('/'); ?>category/featured-artist/">All Featured Artists</a></p>
			</div>
			<a href="<?php echo home_url('/'); ?>featured-artist-rob-hudec/"><img src="<?php echo home_url('/'); ?>wp-content/uploads/2015/05/featuredartistthumb.jpg"></a>
		</div>
	</div>
	<div class="column">
		<div>
			<div>
				<br />
				<h1>Poetry</h1>
				<a href="<?php echo home_url('/'); ?>valentine-for-ernest-mann/"><h2>Valentine for Ernest Mann</h2></a>
				<p>A poem by poet, songwriter and novelist Naomi Shihab Nye, who brings a fresh, playful perspective to everyday life.</p>
				<p><a href="<?php echo home_url('/'); ?>category/written-word/poetry/">All Poetry</a></p>
			</div>
			<a href="<?php echo home_url('/'); ?>valentine-for-ernest-mann/"><img src="<?php echo home_url('/'); ?>wp-content/uploads/2015/05/poetry-thumb.jpg"/></a>
		</div>
		<div>
			<div>
				<br />
				<h1>Film Reviews</h1>
				<a href="<?php home_url('/'); ?>film-review-letters-to-father-jacob"><h2>Letters to Father Jacob</h2></a>
				<p>Bill Locke reviews a film from Finland that teams up two unlikely protagonists in a moving story of redemption and hope.</p>
				<p><a href="<?php echo home_url('/'); ?>category/film/film-reviews/">All Film Reviews</a></p>
			</div>
			<a href="<?php home_url('/'); ?>film-review-letters-to-father-jacob"><img src="<?php echo home_url('/'); ?>wp-content/uploads/2015/05/FilmReviewsThumb.jpg"/></a>
		</div>
	</div>
	<div class="column">
		<div>
			<div>
				<br />
				<h1>Editorials</h1>
				<a href="<?php echo home_url('/'); ?>musings-from-the-editors-desk"><h2>Musings from the Editor's Desk</h2></a>
				<h2>Musings from the Editor's Desk</h2>
				<p>Which words stick in our minds, and why? This issue of Kolbe Times explores the power of words.</p>
				<p><a href="#">All Editorials</a></p>
			</div>
			<img src="<?php echo home_url('/'); ?>wp-content/uploads/2015/04/words.jpg"/>
		</div>
		<div>
			<div>
				<br />
				<h1>Guest Columnists</h1>
				<a href="<?php echo home_url('/'); ?>dialogue-true-openness-steadfast-convictions/"><h2>Dialogue</h2></a>
				<p>Deacon Adrian Martens reflects on the nature of true dialogue, which opens new doors while honouring parameters.</p>
				<p><a href="<?php echo home_url('/'); ?>category/guest-columnists/">All Guest Columnists</a></p>
			</div>
			<img src="<?php echo home_url('/'); ?>wp-content/uploads/2015/05/GuestColumnistThumb.jpg"/>
		</div>
	</div>
</div> <!-- grid -->

<div id="writers">
	<div class="writers-column-1">
		<div>
			<a href="<?php echo home_url('/'); ?>gathered-wisdom/"><h1>Gathered Wisdom</h1>
			<img src="<?php echo home_url('/'); ?>wp-content/uploads/2015/04/gathered-wisdom-thumb.jpg" /></a>
			<p>A self-confessed quotations freak shares some of the insightful quotes that have fed her soul.</p>
		</div>
		<div>
			<a href="<?php echo home_url('/'); ?>theatre-review-miracle-worker/"><h1>Miracle Worker</h1>
			<img src="<?php echo home_url('/'); ?>wp-content/uploads/2015/04/MiracleWorkerThumb.jpg" /></a>
			<p>Meghan Konditi reviews Rosebud’s production of how Helen Keller was freed from her dark, silent world as a deaf and mute young girl.</p>
		</div>
	</div> <!-- writers-column -->
	<div class="writers-column-2">
		<div>
			<a href="<?php echo home_url('/'); ?>a-beautiful-synergy/"><h1>A Beautiful Synergy</h1>
			<img src="<?php echo home_url('/'); ?>wp-content/uploads/2015/04/synergy-thumb.jpg" /></a>
			<p>Renate and Keith Worthington are a talented couple who combine language and art…with fun, flair and grace.</p>
		</div>
	</div> <!-- writers-column -->
</div> <!-- writers -->
		</section><!-- #container -->

<?php get_footer(); ?>
