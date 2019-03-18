<?php
/*
 Template Name: About Page Template
 */
?>

<?php get_header(); ?>

<div class="container">
		
	<h1>About Page</h1>
	<h3>Subtitle</h3>
	<p>
		<?php
			$page = get_page_by_title( 'consulting' );
			$content = apply_filters('the_content', $page->post_content); 
			echo $content;
		?>
		</h1>
</p>


<?php get_footer(); ?>
