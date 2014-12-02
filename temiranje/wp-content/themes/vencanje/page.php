<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package vencanje
 */

get_header(); ?>


			<?php while ( have_posts() ) : the_post(); ?>
	<div id="outermain">
        	<div class="container">
                <div class="row">
                
                    <section id="maincontent" class="nine columns positionleft">

                          <section class="content">
								<?php the_content(); ?>
                            </section>

                    </section>
                    
                    <aside class="three columns">
                    	<div class="sidebar">
                    		<?php get_sidebar(); ?>
                       
                        </div>
                    </aside>
                </div>
            </div>
        </div>
				
			<?php endwhile; // end of the loop. ?>



<?php get_footer(); ?>
