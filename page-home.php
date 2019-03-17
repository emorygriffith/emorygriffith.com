<?php
/*
 Template Name: Home Page Template
 */
?>

<?php get_header(); ?>

	<div class="bio">
		<?php
			$page = get_page_by_title( 'home' );
			$content = apply_filters('the_content', $page->post_content); 
			echo $content;
		?>
	</div>


	<div class="recent-posts">
		<h2 style="font-size: 18px;">Recent posts</h2>
		<!-- Loop through all posts and list them here -->
		<?php
			$args = array(
			'post_type' => 'post'
		);

		$post_query = new WP_Query($args);

		if($post_query->have_posts() ) {
		while($post_query->have_posts() ) {
		$post_query->the_post();
		?>

		<div class="post-list">
			<h3 class="post-title-list"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
			<p class="posted-date"><?php echo get_the_date(); ?></p>
		</div>
		
		<?php
		}
		}
		?>
	</div>
	

<?php get_footer(); ?>
