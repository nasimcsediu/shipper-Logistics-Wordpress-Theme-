<?php get_header(); ?>

<section class="sub-header">

<h5 class="page-title"><?php the_title(); ?></h5>
    <ul class="breadcrumb">
      <li><a href="<?php echo home_url();  ?>">Home</a></li>
      <li><span class="active"><?php the_title(); ?></span></li>
    </ul>


  </section>
  <div class="container">
<?php while(have_posts()): the_post() ?>
    <?php  the_content();?>
<?php endwhile; ?>
</div>




<?php get_footer();?>
