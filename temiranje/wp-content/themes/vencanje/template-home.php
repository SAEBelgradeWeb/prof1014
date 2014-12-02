<?php 
/**
 * Template Name: Home Page
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package vencanje
 */


get_header(); ?>




<!-- SLIDER -->
<div id="outerslider">
   <div class="container">
    <div class="row">
       <div id="slidercontainer" class="twelve columns">

           <section id="slider">
            <div id="slideritems" class="flexslider">
                <ul class="slides">
                    <?php

                    $argumenti = array(
                        'post_type' => 'book',
                        'order' => 'ASC'
                        );

                    $the_query = new WP_Query( $argumenti );


                    if ( $the_query->have_posts() ) {

                        while ( $the_query->have_posts() ) {
                            $the_query->the_post();
                            ?>

                            <li>
                                <?php the_post_thumbnail('full' ); ?>
                                <div class="flex-caption">
                                    <h1><?php the_title(); ?></h1>
                                    <p><?php 
                                   // $slike = get_field('galerijaa');



                                    ?></p>
                                </div>
                            </li>
                            <?php
                        }

                    } else {
                            // no posts found
                        echo 'No posts found for this criteria';
                    }

                    wp_reset_postdata();

                    ?>

                </ul>
                <img src="<?php echo get_template_directory_uri(); ?>/images/slider-shadow.png" alt="" />
            </div>
        </section>

    </div>
</div>
</div>
</div>
<!-- END SLIDER -->


<!-- MAIN CONTENT -->
<div id="outermain">
   <div class="container">
    <div class="row">
       <section id="maincontent" class="twelve columns">

        <section class="content">

            <div class="highlight-content">
             <h1><?php the_content(); // od page-a ?></h1>
         </div>


         <div id="featured" class="row">

            <?php

            $argumenti = array(
                'category_name' => 'home-small',
                'order' => 'ASC'
                );

            $the_query = new WP_Query( $argumenti );


            if ( $the_query->have_posts() ) {

                while ( $the_query->have_posts() ) {
                    $the_query->the_post();
                    ?>
                    <div class="one_third columns">
                        <?php the_post_thumbnail('full'); ?>
                        <h3> <?php the_title(); ?></h3>
                        <p> <?php the_content(); ?></p>
                    </div>
                    <?php
                }
            };
            wp_reset_postdata();
            ?>



        </div>


        <div class="separator"></div>

        <div class="row">

            <?php

            $argumenti = array(
                'category_name' => 'home-about',
                'order' => 'ASC'
                );

            $the_query = new WP_Query( $argumenti );


            if ( $the_query->have_posts() ) {

                while ( $the_query->have_posts() ) {
                    $the_query->the_post();
                    ?>
                    <div class="one_half columns">
                       <div class="frame10 circle">
                           <?php the_post_thumbnail('full'); ?>
                       </div>
                       <div class="indentleft">
                           <h3 class="title"> <?php the_title(); ?></h3>
                           <p> <?php the_content(); ?></p>
                           <a href="<?php the_permalink(); ?>" class="button">Read more <span></span></a>
                       </div>
                   </div>
                   <?php
               }
           };
           wp_reset_postdata();
           ?>



       </div> 


   </section>

</section>
</div>
</div>
</div>
<!-- END MAIN CONTENT -->
<?php get_footer(); ?>