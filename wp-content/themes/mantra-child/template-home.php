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
					</div><!-- .entry-content -->
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
		<a class="link" href="http://localhost/kolbetimes/857/">
			<img src="http://localhost/kolbetimes/wp-content/uploads/2015/03/Jody-and-LaurieCROP4-2.jpg"/>
		</a>
	</div>
	<div>
		<a class="link" href="http://localhost/kolbetimes/calgary-dream-centre-a-focus-on-compassion/">
			<img src="http://localhost/kolbetimes/wp-content/uploads/2015/03/Dream-Centre-article_no-caption-2.jpg"/>
		</a>
	</div>
	<div>
		<a class="link" href="http://localhost/kolbetimes/corps-bara-youth-dance-company-mercy/">
			<img src="http://localhost/kolbetimes/wp-content/uploads/2015/03/Youth-Company_signsSMALL-2.jpg"/>
		</a>
	</div>
	<div>
		<a class="link" href="http://localhost/kolbetimes/once-you-know-the-spirit-of-mercy-in-rwanda/">
			<img src="http://localhost/kolbetimes/wp-content/uploads/2015/03/Students-modeling-their-outfits-2.jpeg"/>
		</a>
	</div>
		<div>
		<a class="link" href="http://localhost/kolbetimes/857/">
			<img src="http://localhost/kolbetimes/wp-content/uploads/2015/03/Jody-and-LaurieCROP4-2.jpg"/>
		</a>
	</div>
</div> <!-- cycle-slideshow -->
<ul>
	<div id=adv-custom-pager>
		<li><a href="#"><img src="http://localhost/kolbetimes/wp-content/uploads/2015/03/Jody-and-LaurieCROP4-2.jpg"/></a></li>
		<li><a href="#"><img src="http://localhost/kolbetimes/wp-content/uploads/2015/03/Dream-Centre-article_no-caption-2.jpg"/></a></li>
		<li><a href="#"><img src="http://localhost/kolbetimes/wp-content/uploads/2015/03/Youth-Company_signsSMALL-2.jpg"/></a></li>
		<li><a href="#"><img src='http://localhost/kolbetimes/wp-content/uploads/2015/03/Students-modeling-their-outfits-2.jpeg'/></a></li>
		<li><a href="#"><img src="http://localhost/kolbetimes/wp-content/uploads/2015/03/Jody-and-LaurieCROP4-2.jpg"/></a></li>
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
				<h1>Category A</h1>
				<h2>Most Recent Article in the Category</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
				<p><a href="#">More Articles</a></p>
			</div>
			<img src="http://localhost/kolbetimes/wp-content/uploads/2014/11/mc_logo_new.png"/>
		</div>
		<div>
			<div>
				<br />
				<h1>Category B</h1>
				<h2>Most Recent Article in the Category</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
				<p><a href="#">More Articles</a></p>
			</div>
			<img src="http://localhost/kolbetimes/wp-content/uploads/2014/11/mc_logo_new.png"/>
		</div>
	</div>
	<div class="column">
		<div>
			<div>
				<br />
				<h1>Category C</h1>
				<h2>Most Recent Article in the Category</h2>
				<p>Lorem ipsum dolor sit amet.</p>
				<p><a href="#">More Articles</a></p>
			</div>
			<img src="http://localhost/kolbetimes/wp-content/uploads/2014/11/mc_logo_new.png"/>
		</div>
		<div>
			<div>
				<br />
				<h1> Category D</h1>
				<h2>Most Recent Article in the Category</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
				<p><a href="#">More Articles</a></p>
			</div>
			<img src="http://localhost/kolbetimes/wp-content/uploads/2014/11/mc_logo_new.png"/>
		</div>
	</div>
	<div class="column">
		<div>
			<div>
				<br />
				<h1>Category E</h1>
				<h2>Most Recent Article in the Category</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
				<p><a href="#">More Articles</a></p>
			</div>
			<img src="http://localhost/kolbetimes/wp-content/uploads/2014/11/mc_logo_new.png"/>
		</div>
		<div>
			<div>
				<br />
				<h1>Category F</h1>
				<h2>Most Recent Article in the Category</h2>
				<p>Lorem ipsum dolor sit amet, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
				<p><a href="#">More Articles</a></p>
			</div>
			<img src="http://localhost/kolbetimes/wp-content/uploads/2014/11/mc_logo_new.png"/>
		</div>
	</div>
</div> <!-- grid -->

<div id="writers">
	<div class="writers-column">
		<div>
			<h1>Writer #1</h1>
			<img src="http://localhost/kolbetimes/wp-content/uploads/2014/11/Laura-MS-SMALL-e1427778683749.jpg" />
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
			<ul>
				<li><a href="#">Article Number One</a></li>
				<li><a href="#">Article Number Two</a></li>
				<li><a href="#">Article Number Three</a></li>
				<li><a href="#">Article Number Four</a></li>
			</ul>
		</div>
		<div>
			<h1>Writer #2</h1>
			<img src="http://localhost/kolbetimes/wp-content/uploads/2014/11/Laura-MS-SMALL-e1427778683749.jpg" />
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
			<ul>
				<li><a href="#">Most Recent Article Name</a></li>
				<li><a href="#">All Work</a></li>
			</ul>
		</div>
	</div> <!-- writers-column -->
	<div class="writers-column">
		<div>
			<h1>Writer #3</h1>
			<img src="http://localhost/kolbetimes/wp-content/uploads/2014/11/Laura-MS-SMALL-e1427778683749.jpg" />
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
			<ul>
				<li><a href="#">Article Number One</a></li>
				<li><a href="#">Article Number Two</a></li>
				<li><a href="#">Article Number Three</a></li>
				<li><a href="#">Article Number Four</a></li>
			</ul>
		</div>
		<div>
			<h1>Writer #4</h1>
			<img src="http://localhost/kolbetimes/wp-content/uploads/2014/11/Laura-MS-SMALL-e1427778683749.jpg" />
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
			<ul>
				<li><a href="#">Article Number One</a></li>
				<li><a href="#">Article Number Two</a></li>
				<li><a href="#">Article Number Three</a></li>
				<li><a href="#">Article Number Four</a></li>
			</ul>
		</div>
	</div> <!-- writers-column -->
</div> <!-- writers -->
		</section><!-- #container -->

<?php get_footer(); ?>
