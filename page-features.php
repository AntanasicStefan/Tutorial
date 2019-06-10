<?php get_header()?>

<div class="page-title offset-lg-3 col-lg-6 col-xs-12">
    <h1>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam dapibus non erat in interdum.
        Vestibulum ante ipsum primis in faucibus orci luctus et ultrices.</p>
</div>

<?php
$args = array(
    'post_type' => 'screenshots',
    'post_status' => 'publish',
    'posts_per_page' => 3,
);
$custom_posts = new WP_Query( $args );
 
if ( $custom_posts->have_posts() ) :
 
    while ( $custom_posts->have_posts() ) : $i++; $custom_posts->the_post();  ?>
        <div class="screenshot "></div>
        <div class="row screenshot screenshots">
             <div class="left-txt screenshot-txt-feature screenshot-txt-<?php echo $i?> col-lg-4">
                  <?php  if($i==1) : echo '<img src="' .   get_template_directory_uri() . '/css/pics/greek.png" alt="">';
                         elseif($i==2) : echo '<img src="' .   get_template_directory_uri() . '/css/pics/star.png" alt="">';
                         elseif($i==3) : echo '<img src="' .   get_template_directory_uri() . '/css/pics/gallery.png" alt="">';
                  endif;
                  ?>
                  <h2><?php the_title()?></h2> 
                  <p><?php the_content() ?></p>
                  <button class="btn-1">View all</button>
              </div>
             <div class="screenshot-img screenshot-img-<?php echo $i?> col-lg-8">
                 <?php the_post_thumbnail(); ?>
             </div>
         </div>


<?php 
     endwhile;
endif;
?>
<?php wp_reset_query(); // reset the query ?>

<div class="page-title offset-lg-3 col-lg-6 col-xs-12">
    <h1>Lorem ipsum dolor sit amet</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam dapibus non erat in interdum.
    Vestibulum ante ipsum primis in faucibus orci luctus et ultrices.</p>
</div>


<?php
$args = array(
    'post_type' => 'features',
    'post_status' => 'publish',
    'category_name' => 'Feature-page',
    'posts_per_page' => 9,
);
$custom_posts = new WP_Query( $args ); ?>
<div class="row featured-wrap">
    <?php if ( $custom_posts->have_posts() ) :
    
        while ( $custom_posts->have_posts() ) : $i++; $custom_posts->the_post();  ?>
            <div class="col-lg-4 featured-features">
            <?php the_post_thumbnail(); ?>
            <h2><?php the_title() ?></h2>
            <p><?php the_content() ?></p>
            </div>


    <?php 
        endwhile;
    endif;
    ?>
</div>
<div class="row featured-pricing">
        <div class="pricing-left left-txt col-lg-4">
                <h1><?php echo get_the_title('78') ?></h1>
                <?php echo get_post_field('post_content','78')?>
                <button class="btn-1">View all</button>
         </div>
        <div class="pricing-right col-lg-8">
        <?php 
            get_template_part('template-parts/buyboxes/leftbox');
            get_template_part('template-parts/buyboxes/rightbox');
        ?>
        
        </div>
     </div>


<?php get_footer() ?>