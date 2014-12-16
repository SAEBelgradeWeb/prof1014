<?php 
add_action('wp_ajax_nopriv_do_ajax', 'ajax_funkcije');
add_action('wp_ajax_do_ajax', 'ajax_funkcije');

function ajax_funkcije(){
 
   // the first part is a SWTICHBOARD that fires specific functions
   // according to the value of Query Var 'fn'
 
     switch($_REQUEST['fn']){
          case 'load_more_posts':
               $output = load_more_posts($_REQUEST['str']);
          break;

 
          default:
              $output = 'No function specified, check your jQuery.ajax() call';
          break;
 
     }
 
   // at this point, $output contains some sort of valuable data!
   // Now, convert $output to JSON and echo it to the browser
   // That way, we can recapture it with jQuery and run our success function
 
        $output=json_encode($output);
     //var_dump($output);
         if(is_array($output)){
        print_r($output);
         }
         else{
        echo $output;
         }
         die;
 
}

function load_more_posts($strana){
 ob_start();
              $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
              $args = array (
                'post_type' => 'post',
                'category_name' => 'blog',
                'posts_per_page' => 2,
                'paged' => $strana
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
                echo "no more popsts";
              }


              // Restore original Post Data
              wp_reset_postdata();
$out = ob_get_clean();
  return $out;
}

