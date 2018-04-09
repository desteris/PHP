<?php get_header(); ?>
  <?php while(have_posts()): the_post(); ?>
    <section class="row title-bar">
      <div class="container">
        <div class="col-md-12">
          <?php if(is_category()) {
            single_cat_title();
          } ?>
          <h1><?php the_title(); ?></h1>
        </div>
      </div>
    </section>

    <section class="page container">
     <div class="row">
       <div class="col-md-8">
         <div class="post-thumbnail">
           <?php the_post_thumbnail(); ?>
         </div>
         <div class="meta">
         Posted on <?php the_time(); ?> by <?php the_author(); ?>
         </div>
         <?php the_content(); ?>
       </div>
       <div class="col-md-4">
         <div class="card">
           <h3 class="card-header">Sidebar Heading</h3>
           <div class="card-body">
             <p class="card-text">Mauris sed odio arcu. Vestibulum nibh urna. Nulla facilisi. Nullam convallis volutpat dui. Sed posuere mi velit, vitae auctor ex consequat eget. Donec ut arcu ut neque scelerisque ligula ac mollis tincidunt, neque nulla.</p>
           </div>
         </div>
       </div>
     </div>
   </section>
  <?php endwhile; ?>
<?php get_footer(); ?>
