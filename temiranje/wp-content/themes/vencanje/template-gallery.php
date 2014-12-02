<?php 
/**
 * Template Name: Gallery Page
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package vencanje
 */


get_header(); ?>




        <!-- MAIN CONTENT -->
        <div id="outermain">
        	<div class="container">
                <div class="row">
                
                    <section id="maincontent" class="nine columns positionleft">

                            <section class="content">
                                
									<?php

                    $argumenti = array(
                        'post_type' => 'Galerije',
                        'order' => 'ASC'
                        );

                    $the_query = new WP_Query( $argumenti );


                    if ( $the_query->have_posts() ) {

                        while ( $the_query->have_posts() ) {
                            $the_query->the_post();
                            ?>
								<article class="post">
                                    <div class="date-wrapper"> 
                                        <div class="line-date"></div>
                                        <div class="date-value">15</div>
                                        <div class="month-value">August</div>
                                    </div>
                                    
                                    <div id="gallery" class="row">


                             
                                	
									<?php 
										$niz_slika = get_field('slike');
									for($i=0;$i<count($niz_slika);$i++) {
										?>
										<div class="one_fifth columns">
									<a class="image frame" href="<?php echo $niz_slika[$i]["url"]; ?>" data-rel="prettyPhoto[mixed]">
										<span class="rollover"></span>
                                    <span class="zoom"></span>
                                    <img src="<?php echo $niz_slika[$i]["url"]; ?>" alt="">
									</a>
									  </div>
									<?php
									} ?>
	      
                         
                            


                                        <div class="clear"></div>
                                        <div class="entry-content">
                                            <h2 class="posttitle"><a href="single.html"><?php the_title(); ?></a></h2>
                                           <p><?php the_excerpt(); ?></p>
                                        </div>
                                    </div>
                                    
                                    <div class="clear"></div>
                                </article>
                                <?php
                        }
                    } 
                    wp_reset_postdata();
                    // zadnji post treba da ima klasu last?> 
								
                                
						
                                
								<div class="wp-pagenavi">
                                	<div class="pages">Page 1 of 3</div><a class="page" href="#">1</a><span class="current"><span>2</span></span><a class="page" href="#">3</a>
                            	</div>
                            </section>
                         
                    </section>
                    
                    <aside class="three columns">
                    	<?php get_sidebar(); ?>
                    </aside>
                </div>
            </div>
        </div>
        <!-- END MAIN CONTENT -->




<!-- END MAIN CONTENT -->
<?php get_footer(); ?>