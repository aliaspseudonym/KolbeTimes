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
<section id= "other-content">
<div id="sidebar">
<p>This is the sidebar</p>

</div> <!-- sidebar -->

<div id="grid">
	<div class="square">

	</div>
</div> <!-- grid -->

			


			</div><!-- #content -->
		</section><!-- #container -->

<?php get_footer(); ?>
