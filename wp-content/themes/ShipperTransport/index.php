<?php get_header(); ?>
  <section class="sub-header">


    <h5 class="page-title"><?php bloginfo('title'); ?></h5>

<h5 class="page-title"><?php the_title(); ?></h5>
    <ul class="breadcrumb">
      <li><a href="<?php echo home_url();  ?>">Home</a></li>
      <li><span class="active"><?php the_title(); ?></span></li>
    </ul>


  </section>
  
  <section class="news">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <h4 class="section-title"><span>01</span>RECENT NEWS</h4>
        </div>
        <!-- end col-12 -->
        <div class="col-md-9">
          


    <?php while (have_posts()): the_post() ?>
          
        <article <?php post_class('blog-post'); ?> id= "post-<?php  the_id(); ?>" >
            <figure class="post-image"> <span class="post-date"><?php the_time('d/M'); ?></span> <?php the_post_thumbnail(); ?></figure>

            <h3 class="post-title"><?php the_title(); ?></h3>
            <p class="post-text"> <?php readmore(35); ?></p>
            <a href="<?php the_permalink(); ?>" class="post-link" >Read All </a>
             
        </article>  
     <?php endwhile; ?>


  <?php the_posts_pagination(array(

         'screen_reader_text' => ' ',
         'prev_text'          => '<i class="ion-arrow-left-b"> </i>',
         'next_text'          => '<i class="ion-arrow-right-b"> </i>'

  )); ?>
         
        </div>
        <!-- end col-9 -->
           <?php get_sidebar(); ?>
        <!-- end col-3 --> 
      </div>
      <!-- end row --> 
    </div>
    <!-- end container --> 
  </section>
  <!-- end news -->
  
  <!-- end application -->
 <?php get_footer(); ?>