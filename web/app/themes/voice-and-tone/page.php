<?php

get_header(); ?>

<section class="page-content text-center">
	<div class="container">
		<div class="row">
			<div id="content" class="main-content-inner col-sm-12">

				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'content', 'page' ); ?>

				<?php endwhile; // end of the loop. ?>

			</div>
		</div>
	</div>


<?php

/*
* Loop through a repeater field
*/

if(get_field('slider')): ?>

    <?php while(the_repeater_field('slider-image')): ?>
        <img src="<?php the_sub_field('slider-image'); ?>" alt="" />
    <?php endwhile; ?>

 <?php endif; ?>


</section>

<?php get_footer(); ?>
