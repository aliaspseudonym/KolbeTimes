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
			<img src="http://localhost/kolbetimes/wp-content/uploads/2015/03/Jody-and-LaurieCROP4-2.jpg">
		</a>
	</div>
	<div>
		<a class="link" href="http://localhost/kolbetimes/calgary-dream-centre-a-focus-on-compassion/">
			<img src="http://localhost/kolbetimes/wp-content/uploads/2015/03/Dream-Centre-article_no-caption-2.jpg">
		</a>
	</div>
	<div>
		<a class="link" href="http://localhost/kolbetimes/corps-bara-youth-dance-company-mercy/">
			<img src="http://localhost/kolbetimes/wp-content/uploads/2015/03/Youth-Company_signsSMALL-2.jpg">
		</a>
	</div>
	<div>
		<a class="link" href="http://localhost/kolbetimes/once-you-know-the-spirit-of-mercy-in-rwanda/">
			<img src="http://localhost/kolbetimes/wp-content/uploads/2015/03/Students-modeling-their-outfits-2.jpeg">
		</a>
	</div>
		<div>
		<a class="link" href="http://localhost/kolbetimes/857/">
			<img src="http://localhost/kolbetimes/wp-content/uploads/2015/03/Jody-and-LaurieCROP4-2.jpg">
		</a>
	</div>
</div> <!-- cycle-slideshow -->
<ul>
	<div id=adv-custom-pager>
		<li><a href="#"><img src="http://localhost/kolbetimes/wp-content/uploads/2015/03/Jody-and-LaurieCROP4-2.jpg"></a></li>
		<li><a href="#"><img src="http://localhost/kolbetimes/wp-content/uploads/2015/03/Dream-Centre-article_no-caption-2.jpg"></a></li>
		<li><a href="#"><img src="http://localhost/kolbetimes/wp-content/uploads/2015/03/Youth-Company_signsSMALL-2.jpg"></a></li>
		<li><a href="#"><img src='http://localhost/kolbetimes/wp-content/uploads/2015/03/Students-modeling-their-outfits-2.jpeg'></a></li>
		<li><a href="#"><img src="http://localhost/kolbetimes/wp-content/uploads/2015/03/Jody-and-LaurieCROP4-2.jpg"></a></li>
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
<div id="sidebar">
<?php get_sidebar(); ?>
</div> <!-- #sidebar -->

<div id="grid">
	<div class="column">
		<div>
			<div>
				<h1>Category A</h1>
				<p>A one or two sentence description of the category.</p>
			</div>
			<img src="http://localhost/kolbetimes/wp-content/uploads/2014/11/mc_logo_new.png">
		</div>
		<div>
			<div>
				<h1>Category B</h1>
				<p>A one or two sentence description of the category.</p>
			</div>
			<img src="http://localhost/kolbetimes/wp-content/uploads/2014/11/mc_logo_new.png">
		</div>
	</div>
	<div class="column">
		<div>
			<div>
				<h1>Category C</h1>
				<p>A one or two sentence description of the category.</p>
			</div>
			<img src="http://localhost/kolbetimes/wp-content/uploads/2014/11/mc_logo_new.png">
		</div>
		<div>
			<div>
				<h1> Category D</h1>
				<p>A one or two sentence description of the category.</p>
			</div>
			<img src="http://localhost/kolbetimes/wp-content/uploads/2014/11/mc_logo_new.png">
		</div>
	</div>
	<div class="column">
		<div>
			<div>
				<h1>Category E</h1>
				<p>A one or two sentence description of the category.</p>
			</div>
			<img src="http://localhost/kolbetimes/wp-content/uploads/2014/11/mc_logo_new.png">
		</div>
		<div>
			<div>
				<h1>Category F</h1>
				<p>A one or two sentence description of the category.</p>
			</div>
			<img src="http://localhost/kolbetimes/wp-content/uploads/2014/11/mc_logo_new.png">
		</div>
	</div>
</div> <!-- grid -->

		</section><!-- #container -->

<?php get_footer(); ?>
