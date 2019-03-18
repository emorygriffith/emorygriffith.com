<?php
/*
 Template Name: About Page Template
 */
?>

<?php get_header(); ?>

		<a class="home-link" href="/"><h1 class="name-small"><?php bloginfo('name'); ?></h1></a>

		<div class="container">
			<h2 class="page-single-title"><?php the_title(); ?></h2>
			<p class="page-single-content">
				<?php 
					$post = get_post($id); 
					$content = apply_filters('the_content', $post->post_content); 
					echo $content;  
				?>
			</p>
		</div>
	
	

		

<?php get_footer(); ?>
