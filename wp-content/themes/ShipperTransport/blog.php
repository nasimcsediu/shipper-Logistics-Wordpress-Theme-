<?php get_header(); ?>


 <?php 
         $newpost = new Wp_Query(array(
             'post_type'  => 'post',
             'posts_per_page' =>3 
         ));
          while($newpost->have_posts()):$newpost->the_post(); ?>
        <div class="col-md-4 col-sm-6 spacing">
         
          <div class="news-box">
            <figure><?php the_post_thumbnail(); ?><span class="date"><?php the_time('d/M'); ?></span></figure>
            <div class="news-caption">
              <h4><?php  the_title(); ?></h4>
              <p><?php readmore(35); ?></p>
              <a href="<?php the_permalink(); ?>">READ MORE</a> </div>
            <!-- end news-caption --> 
          </div>

      
          <!-- end news-box --> 
        </div>

  <?php endwhile; ?>


<?php get_footer();?>
