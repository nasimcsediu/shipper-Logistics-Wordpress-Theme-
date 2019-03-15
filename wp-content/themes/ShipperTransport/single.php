<?php get_header(); ?>



        
          <section class="news">
    <div class="container">
      <div class="row">
        
        <!-- end col-12 -->
        <div class="col-md-9">
          


    <?php while (have_posts()): the_post() ?>
          
        <article <?php post_class('blog-post'); ?> id= "post-<?php  the_id(); ?>" >
            <figure class="post-image"> <span class="post-date"><?php the_time('d/M'); ?></span> <?php the_post_thumbnail(); ?></figure>

            <h3 class="post-title"><?php the_title(); ?></h3>
            <p class="post-text"> <?php the_content() ?></p>
            
        </article>  
     <?php endwhile; ?>


  
         
        </div>
        <!-- end col-9 -->
           <?php get_sidebar(); ?>
        <!-- end col-3 --> 
      </div>
      <!-- end row --> 
    </div>
    <!-- end container --> 
  </section>


<?php get_footer();?>
