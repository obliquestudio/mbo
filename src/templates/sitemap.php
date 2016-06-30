<?php
/*
Template Name: Sitemap template
*/
?>

<?php get_header(); ?>

			<div id="content" class="grid_12">

				<div id="inner-content" class="clearfix">

				    <div id="main" class="clearfix" role="main">

					    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

					    <article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">

					    	<header class="page-header grid_3 alpha">
					    		<ul class="sub-menu">
									<li>Sitemap</li>
								</ul>
                            </header> <!-- end article header -->

						    <section class="page-content grid_9 omega">
							   	<h1 id="pages">Pages</h1>

						   		<ul>
						   		<?php

						   		$exclude_array = get_the_ID();

							   		wp_list_pages(
							   			array(
							   				'exclude' => $exclude_array,
							   				'title_li' => '',
							   				)
							   			);
						   			?>
						   		</ul>

						    </section> <!-- end article section -->

					    </article> <!-- end article -->

					    <?php endwhile; endif; ?>

				    </div> <!-- end #main -->

				</div> <!-- end #inner-content -->

			</div> <!-- end #content -->

<?php get_footer(); ?>