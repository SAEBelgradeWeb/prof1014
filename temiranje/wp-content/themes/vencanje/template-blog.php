<?php 

/* Template Name: Blog */


get_header(); ?>



        <!-- MAIN CONTENT -->
        <div id="outermain">
        	<div class="container">
                <div class="row">
                
                    <section id="maincontent" class="nine columns positionleft">

                            <section class="content">
							<?php 
							$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
							$args = array (
								'post_type' => 'post',
								'category_name' => 'blog',
								'posts_per_page' => 2,
								'paged' => $paged
							);

							// The Query
							$query = new WP_Query( $args );

							// The Loop
							if ( $query->have_posts() ) {
								while ( $query->have_posts() ) {
									$query->the_post();
									$datum = "";
								$datum = get_the_date();
								$datum = strtotime($datum);

					?>
					<article class="post">
                                    <div class="date-wrapper"> 
                                        <div class="line-date"></div>
                                        <div class="date-value"><?php echo date('d', $datum) ?></div>
                                        <div class="month-value"><?php echo date('F', $datum) ?></div>
                                    </div>
                                    <div class="postimg">
                                    	<?php 
                                    	$attr = array(
                                    		'class' => 'frame'
                                    	);

                                    	 ?>
                                        <?php the_post_thumbnail("blog_size", $attr); ?>
                                    </div>
       
                                    <div class="entry-content">
                                        <h2 class="posttitle"><a href="<?php the_permalink(); ?>"><?php the_title() ?></a></h2>
                                        <div class="entry-utility">
                                            Posted by <a href="<?php the_author_link(); ?>"><?php the_author(); ?></a>
                                        </div>
                                       <?php the_excerpt(); ?>
										<a href="<?php the_permalink(); ?>" class="button">Read more <span></span></a>
                                    </div>
                                   
                                    <div class="clear"></div>
                                </article>


					<?php 
								}
							} else {
								// no posts found
							}


							// Restore original Post Data
							wp_reset_postdata();

?>
<button id="more">Load more posts</button>
<div class="wp-pagenavi">
<?php

$big = 999999999; // need an unlikely integer
echo paginate_links( array(
	'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
	'format' => '?paged=%#%',
	'current' => max( 1, get_query_var('paged') ),
	'total' => $query->max_num_pages
) );

							 ?>
								

								<!-- 
                                	<div class="pages">Page 1 of 3</div><a class="page" href="#">1</a><span class="current"><span>2</span></span><a class="page" href="#">3</a>
                            	</div> -->
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
        <!-- END MAIN CONTENT -->
        


<?php get_footer(); ?>
