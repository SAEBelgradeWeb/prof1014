<?php
/**
 * The template for displaying all single posts.
 *
 * @package vencanje
 */

get_header(); ?>
		<?php while ( have_posts() ) : the_post(); ?>
		<?php 
		$datum = get_the_date();
		$datum = strtotime($datum);
		$id_autor = get_the_author_meta('ID');
		$author_desc = get_the_author_meta('description' );
		?>
<!-- MAIN CONTENT -->
        <div id="outermain">
        	<div class="container">
                <div class="row">
                
                    <section id="maincontent" class="nine columns positionleft">

                            <section class="content">

								<article class="post">
                                    <div class="date-wrapper"> 
                                        <div class="line-date"></div>
                                        <div class="date-value"><?php echo date('d', $datum) ?></div>
                                        <div class="month-value"><?php echo date('F', $datum) ?></div>
                                    </div>
       
                                    <div class="entry-content">
                                       <?php the_content(); ?>
                                    </div>
                                   
                                    <div class="clear"></div>
                                </article>
                                
                                <h3>About Author</h3>
                                <div class="author">
                                    <div class="avatar circle"><?php echo get_avatar($id_autor ); ?></div>
                                    <cite class="fn"><?php the_author(  ); ?></cite>
									<?php echo $author_desc; ?>
                                </div>
                                
								<?php
									// If comments are open or we have at least one comment, load up the comment template
									if ( comments_open() || get_comments_number() ) :
										comments_template();
									endif;
								?>

                            </section>
                         
                    </section>
                    
                    <aside class="three columns">
                    	<div class="sidebar">
                        <?php get_sidebar( ); ?>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
        <!-- END MAIN CONTENT -->

		

		<?php endwhile; // end of the loop. ?>
<?php get_footer(); ?>
			
