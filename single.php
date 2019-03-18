<?php get_header(); ?>

		<a class="home-link" href="/"><h1 class="name-small"><?php bloginfo('name'); ?></h1></a>


		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<article class="blog-entry-single" id="post-<?php the_ID(); ?>" role="article">
			<h2 class="post-title-single"><?php the_title(); ?></h2>
			<span class="posted-date"><?php echo get_the_date('F j, Y');?></span>
			<span class="posted-date">
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
			</span>
			<section class="blog-entry-body" itemprop="articleBody">
				<?php the_content(); ?>
			</section>
		</article>

		<?php endwhile; ?>

		<?php else : ?>

			<div>
				Look's like the article you clicked is missing :/
			</div>

		<?php endif; ?>
		</div>


<?php get_footer(); ?>
