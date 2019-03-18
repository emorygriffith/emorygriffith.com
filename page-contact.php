<?php
/*
 Template Name: Contact Page Template
 */
?>

<?php get_header(); ?>

<div class="container">
		<?php
			$page = get_page_by_title( 'contact' );
			$content = apply_filters('the_content', $page->post_content); 
			echo $content;
		?>
	</div>

<?php get_footer(); ?>
