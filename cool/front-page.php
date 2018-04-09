<?php get_header(); ?>

  <section class="showcase animated fadeIn">
    <div class="container">
      <div class="col-md-12">
        <div class="showcase-content animated pulse">
          <h1><?php echo get_theme_mod('showcase_heading'); ?></h1>
          <p class="lead">Custom Wordpress Theme by Ernestas</p>
          <?php if(get_theme_mod('facebook_url', 'facebook.com') != ''): ?>
            <a href="<?php echo get_theme_mod('facebook_url', 'facebook.com'); ?>" class="btn btn-primary" target="_blank">Facebook <i class="fab fa-facebook "></i></a>
          <?php endif; ?>
          <?php if(get_theme_mod('twitter_url', 'twitter.com') != ''): ?>
            <a href="<?php echo get_theme_mod('twitter_url', 'twitter.com'); ?>" class="btn btn-primary" target="_blank">Twitter <i class="fab fa-twitter "></i></a>
          <?php endif; ?>
          <?php if(get_theme_mod('linkedin_url', 'linkedin.com') != ''): ?>
            <a href="<?php echo get_theme_mod('linkedin_url', 'linkedin.com'); ?>" class="btn btn-primary" target="_blank">Linked In <i class="fab fa-linkedin "></i></a>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </section>

  <?php $latests_blog_posts = new WP_Query(array(
    'post_per_page' => 3
  ));

  $i = 0;
  $section = 'section-a';

  if($latests_blog_posts->have_posts()) :
       while($latests_blog_posts->have_posts()) :
        $latests_blog_posts->the_post();
    ?>

    <?php
      $i++;
      if($i % 2 != 0){
        // Odd post
        $section_class = 'section-a';
        $left_class = 'col-lg-5 col-sm-6 animated fadeInLeft';
        $right_class = 'col-lg-6 offset-lg-1 col-sm-6';
        $img_class = 'img-fluid rounded-circle animated fadeInRight';
      } else{
        // Even post
        $section_class = 'section-b';
        $left_class = 'col-lg-6 offset-lg-1 col-sm-6 fadeInRight col-lg-push-5';
        $right_class = 'col-lg-5 col-sm-6 col-lg-pull-6';
        $img_class = 'img-fluid rounded-circle animated fadeInLeft';
      }
     ?>
    <div class="<?php echo $section_class ?>">
      <div class="container">
        <div class="row">
          <div class="<?php echo $left_class ?>">
            <hr class="section-heading-spacer">
            <div class="cleafix"></div>
            <h2 class="section-heading"><?php the_title(); ?></h2>
            <div class="excerpt">
              <p class="lead"> <?php the_content(); ?></p>
            </div>
          </div>
          <div class="<?php echo $right_class ?>">
            <?php the_post_thumbnail('full', array(
              'class' => $img_class
            )); ?>
          </div>
        </div>
      </div>
    </div>
    <?php endwhile; ?>
  <?php endif; ?>



  <?php get_footer(); ?>
