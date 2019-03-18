<?php get_header(); ?>


		<div>

		<a class="home-link" href="/"><h1 class="name-small"><?php bloginfo('name'); ?></h1></a>


		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<article id="post-<?php the_ID(); ?>" role="article">

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


			<section class="entry-content cf" itemprop="articleBody">
				<?php the_content(); ?>
			</section> <?php // end article section ?>

		</article> <?php // end article ?>

		<?php endwhile; ?>

		<?php else : ?>

			<article id="post-not-found" class="hentry cf">
					<header class="article-header">
						<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
					</header>
					<section class="entry-content">
						<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
					</section>
					<footer class="article-footer">
							<p><?php _e( 'This is the error message in the single.php template.', 'bonestheme' ); ?></p>
					</footer>
			</article>

		<?php endif; ?>
		</div>


</div>


<?php get_footer(); ?>
