<?php get_header() ?>
<?php
/*
 Template Name: Homepage
*/
?>
<div class="page-title offset-lg-3 col-lg-6 col-xs-12">
    <h1>Lorem ipsum dolor sit amet,
        consectetur adipiscing elit.</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam dapibus non erat in interdum.
        Vestibulum ante ipsum primis in faucibus orci luctus et ultrices.</p>
</div>
<?php
$args = array(
    'post_type' => 'post',
    'post_status' => 'publish',
    'category_name' => 'screenshot',
    'posts_per_page' => 1,
);
$custom_posts = new WP_Query( $args );
 
if ( $custom_posts->have_posts() ) :
 
    while ( $custom_posts->have_posts() ) : $custom_posts->the_post();  ?>
         <div class="row screenshot">
             <div class="left-txt col-lg-4 col-xs-12">
                  <h1> <?php the_title()?> </h1>
                  <p> <?php the_content() ?></p>
                  <button class="btn-1">View all</button>
              </div>
             <div class="screenshot-img col-lg-8 col-xs-12">
                 <?php the_post_thumbnail(); ?>
             </div>
         </div>
<?php 
     endwhile;
endif;
?>
<?php wp_reset_query(); // reset the query ?>

<?php
    $args = array(
        'post_type' => 'post',
        'post_status' => 'publish',
        'category_name' => 'features',
        'posts_per_page' => 1,
    );
 $custom_posts = new WP_Query( $args );
 
 if ( $custom_posts->have_posts() ) : while ( $custom_posts->have_posts() ) : $custom_posts->the_post();  ?>
<div class="row features">
            <div class="features-left left-txt col-lg-4">
                  <h1> <?php the_title()?> </h1>
                  <p> <?php the_content() ?></p>
                  <button class="btn-1">View all</button>
             </div>
         <?php 
     endwhile;
    endif;
 ?>
 <?php wp_reset_query(); // reset the query ?>

    <div class="col-lg-8 features-right">
        <?php
            $args = array(
                'post_type' => 'features',
                'post_status' => 'publish',
                'category_name' => 'homepage',
                'posts_per_page' => 4,
            );
        $custom_posts = new WP_Query( $args );
 
        if ( $custom_posts->have_posts() ) : while ( $custom_posts->have_posts() ) : $i++; $custom_posts->the_post();  ?>
         <div class="features-home col-lg-6 features-home-<?php echo "$i"?>">
                  <?php the_post_thumbnail() ?>
                  <h2> <?php the_title() ?> </h2>
                  <p> <?php the_content() ?></p>
         </div>
        <?php 
              endwhile;
           endif;
         ?>
     </div> 
 </div>
<?php wp_reset_query(); // reset the query ?>
    <div class="row">
        <div class="pricing-left left-txt col-lg-4 col-xs-12">
                <h1><?php echo get_the_title('78') ?></h1>
                <?php echo get_post_field('post_content','78')?>
                <button class="btn-1">View all</button>
         </div>
        <div class="pricing-right col-lg-8 col-xs-12">
            <?php 
            get_template_part('template-parts/buyboxes/leftbox');
            get_template_part('template-parts/buyboxes/rightbox');
            ?>
             
        </div>
     </div>
           <div class="row end">
                 <div class="ending-txt col-lg-8">
                   <h1>Lorem ipsum dolor sit amet consectetur</h1>
                   <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In egestas dolor tempor eleifend molestie.
                   Suspendisse potenti. Maecenas interdum gravida mollis. Integer facilisis, est at auctor vulputate,
                   nibh ligula facilisis sem, vitae luctus augue ex ac sem. Nulla lobortis interdum enim, vel fermentum
                   tellus tincidunt vel. Duis urna dui, elementum pulvinar ante sed, ornare laoreet eros.</p>
                </div>
                <div class="ending-img col-lg-4 col-xs-12">
                    <img src="<?php echo get_template_directory_uri()?>/css/pics/bird.jpg" alt="">
                </div>
           </div>



<?php get_footer() ?>