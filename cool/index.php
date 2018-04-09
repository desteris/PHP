<?php get_header(); ?>

<section class="row title-bar">
  <div class="container cleafix">
    <div class="col-md-12">
        <h1>Blog</h1>
    </div>
  </div>
</section>

  <?php
  $i = 0;
  $section = 'section-a';
  while(have_posts()) : the_post();

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
          <div class="meta">
              <p>By <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a>
              <?php the_time('F j, Y g:i a'); ?></p>
          </div>
          <div class="excerpt">
            <p class="lead"> <?php the_content(); ?></p>
          </div>
          <a href="<?php the_permalink(); ?>" class="btn btn-primary btn-block">Read More</a>
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




  <?php get_footer(); ?>
