<?php get_header(); ?>
  <?php while(have_posts()): the_post(); ?>
    <section class=" container title-bar">
      <div class="row ">
        <div class="col-md-6">
          <h1><?php the_title(); ?></h1>
        </div>
        <div class="col-md-6">
          <div class="sub-nav">
            <ul>
              <li><a href="#">Link</a></li>
              <li><a href="#">Link</a></li>
              <li><a href="#">Link</a></li>
            </ul>
          </div>
        </div>
    </div>
  </section>

    <section class="page container">
     <div class="row">
       <div class="col-md-8">
         <?php the_content(); ?>

       </div>
       <div class="col-md-4">
         <?php if ( is_active_sidebar( 'sidebar' ) ) : ?>

        		<?php dynamic_sidebar( 'sidebar' ); ?>

        <?php endif; ?>
       </div>
     </div>
   </section>
  <?php endwhile; ?>
<?php get_footer(); ?>
