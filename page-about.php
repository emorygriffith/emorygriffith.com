<?php
/*
 Template Name: About Page Template
 */
?>

<?php get_header(); ?>

		<div class="">
			<h2 class="page-single-title"><?php the_title(); ?></h2>
			
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
					the_content();
					endwhile; else: ?>
					<p>Sorry, no posts matched your criteria.</p>
				<?php endif; ?>
		
		</div>
	
	

		

<?php get_footer(); ?>
