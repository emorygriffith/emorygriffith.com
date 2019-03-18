<?php
/*
 Template Name: Home Page Template
 */
?>

<?php get_header(); ?>

	
	<!-- <a class="home-link" href="/"><h1 class="name-big"><?php bloginfo('name'); ?></h1></a> -->
	
	<div class="bio">
		<?php
			$page = get_page_by_title( 'home' );
			$content = apply_filters('the_content', $page->post_content); 
			echo $content;
		?>
	</div>


	<div class="recent-posts">
		<h2 style="font-size: 18px; padding-bottom: 10px; font-weight: 300;">Recent posts</h2>
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
			<p class="posted-date light">
				<?php echo get_the_date();?>
				<?php
					$show_categories = true;
					$categories = wp_get_post_categories( $post->ID );
					// We don't want to show the categories if there is a single category and it is "uncategorized"
					if ( count( $categories ) == 1 && in_array( 1, $categories ) ) :
					$show_categories = false;
					endif;
					if ( has_category( null, $post->ID ) && $show_categories ) :
					echo '<span class="dot"> &middot; </span>' . strip_tags( get_the_category_list(', '));
					endif;
					?>
	
			</p>
		</div>
		
		<?php
		}
		}
		?>
	</div>
	

<?php get_footer(); ?>
