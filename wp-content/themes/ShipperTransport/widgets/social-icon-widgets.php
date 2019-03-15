<?php 

add_action('widgets_init','social_icon');
function social_icon(){
   register_widget('social_icon_widgets');

}
   class social_icon_widgets extends Wp_widget{

       public function __construct(){
        parent::__construct('social_icon','social Icon Widgets',array(
           'description' => 'Social icon add',

        ));
       }

       public function widget($arg,$dta){
        ob_start();
          ?>
    <?php echo $arg['before_widget']; ?>
            <?php echo $arg['before_title']; ?><?php echo $arg['after_title'] ?>
            <p>You can use the icons above to access more information about our credentials, providing solutions in a host of specific industries. However, these are far from the only industries that SHIPPER has proudly served.</p>
            <ul class="social-media">
              <li><a href="#"><i class="ion-social-facebook"></i></a></li>
              <li><a href="#"><i class="ion-social-twitter"></i></a></li>
              <li><a href="#"><i class="ion-social-googleplus"></i></a></li>
              <li><a href="#"><i class="ion-social-youtube"></i></a></li>
              <li><a href="#"><i class="ion-social-vimeo"></i></a></li>
            </ul
    <?php echo $arg['before_widget']; ?>
          <?php 
          echo ob_get_clean();

       }

       public function form($dta){



       }

   }
?>