<?php get_header(); ?>

<div class="row archive-blog-page-container">
		<!-- <div class="col-lg-3 col-md-3 col-sm-3 archive-blog-sidebar">
		</div> -->

		<div class="col-lg-9 col-md-9 col-sm-9 archive-blog-posts">
				<h1>Blog</h1>
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

					<article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article">

					<header class="entry-header article-header">
							<p class="byline entry-meta vcard">
									<span class="posted-date"><?php echo get_the_date('F j, Y');?></span>

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

							<h3 class="h2 entry-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
					</header>

					<section class="entry-content cf">

					<div style="padding-top: 10px; padding-bottom: 10px;"><?php the_post_thumbnail( 'bones-thumb-300' ); ?></div>

					<?php the_excerpt(); ?>

					</section>

					<footer class="article-footer">

					</footer>

					</article>

					<?php endwhile; ?>

					<?php bones_page_navi(); ?>

					<?php else : ?>

					<article id="post-not-found" class="hentry cf">
						<header class="article-header">
							<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
						</header>
						<section class="entry-content">
							<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
						</section>
						<footer class="article-footer">
								<p><?php _e( 'This is the error message in the archive.php template.', 'bonestheme' ); ?></p>
						</footer>
					</article>

					<?php endif; ?>
		</div>

</div>


<?php get_footer(); ?>
