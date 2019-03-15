<?php 
 /**
 * Shipper Transport functions and definitions
 *shipper transport theme using 
 */
  if(file_exists(dirname(__FILE__) . "/metabox/init.php") ){
    require_once(dirname(__FILE__) . "/metabox/init.php") ;
   }


    if(file_exists(dirname(__FILE__) . "/metabox/custom.php") ){
    require_once(dirname(__FILE__) . "/metabox/custom.php") ;
   }


   if(file_exists(dirname(__FILE__) . "/shipper-navwalker.php") ){
    require_once(dirname(__FILE__) . "/shipper-navwalker.php") ;
   }

   if(file_exists(dirname(__FILE__) . "/lic/ReduxCore/framework.php") ){
    require_once(dirname(__FILE__) . "/lic/ReduxCore/framework.php") ;
   } 

   if(file_exists(dirname(__FILE__) . "/lic/sample/config.php") ){
    require_once(dirname(__FILE__) . "/lic/sample/config.php") ;
   }

    if(file_exists(dirname(__FILE__) . "/visual.php") ){
    require_once(dirname(__FILE__) . "/visual.php") ;
   }


   





 if(!function_exists('shipper_setup_functions')){
     function shipper_setup_functions(){
          load_theme_textdomain( 'shipper', get_template_directory() . '/languages' );


          //add rss feed default comment and post 
          add_theme_support('automatics-feed-links');

          // Title tag
          add_theme_support('title-tag');


          //timezone set 
           date_default_timezone_set('Asia/Dhaka');
           function set_current_time(){
               $date  = date('d M');
               return $date;
           }
     /*
	 * Enable support for Post Thumbnails on posts and pages.
*/
	      add_theme_support('post-thumbnails');


	  // menu register
	      register_nav_menu('main-menu',__('Main Manu','shipper'));
        register_nav_menu('footer-menu1',__('Footer Menu First','shipper'));
        register_nav_menu('footer-menu2',__('Footer Menu Second','shipper'));
        register_nav_menu('footer-menu3',__('Footer Menu Third','shipper'));
     /*default menu */
      function default_menu(){

      	echo '<ul class="nav navbar-nav main-menu">';
        echo '<li><a href="'.home_url().'" class="transition">HOME</a></li>';
        echo '</ul>';
      }
	 /*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	     add_theme_support( 'html5', array(
		 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
	       ) );


	 /*
	 * Enable support for Post Formats
	 */
	      add_theme_support( 'post-formats', array(
		  'aside', 'image', 'video', 'quote', 'link', 'gallery', 'status', 'audio', 'chat'
	) );

     }
     
     add_action('after_setup_theme','shipper_setup_functions');

     register_post_type('shipper-clients',array(
        'labels'        => array(
        'name'          => 'Shipper Client',
        'add_new_item'  => __('Add new Shipper Client'),
        'featured_image'=> __('Add new Shipper Client Image'),
        ),
        'public'        => true,
        'supports'      => array('thumbnail','title'),
 

     ));

     register_post_type('shippers-team',array(
       'labels'         => array(
       'name'           => 'shipper Team',
       'add_new_item'   => __('Add new Shipper Team Member'),
       'featured_image' => __('Add new Shipper Member Image'),

       ),  
       'public'         => true, 
       'supports'      => array('thumbnail','title','editor'),       

     ));

       register_post_type('shippers-gallery',array(
       'labels'         => array(
       'name'           => 'shipper Gallery',
       'add_new_item'   => __('Add new Shipper Gallery'),
       'featured_image' => __('Add new Shipper Gallery Image'),

       ),  
       'public'         => true, 
       'supports'       => array('thumbnail','title',), 
       ));  
       register_post_type('shipper-testimonial',array(
        'labels'         => array(
        'name'           => 'Shipper Testimonial',
        'add_new_item'   => __('Add new Shipper Testimonial'),
        'featured_image' => __('Add new Shipper Testimonial Image'),
        ), 
        'public'         => true,
        'supports'       => array('thumbnail','title','editor'),       

       ));      

     
 }




/* enqueue Style */
  function shipper_style(){
    wp_enqueue_style('main', get_template_directory_uri().'/css/main.css');
    wp_enqueue_style('stylesheet', get_stylesheet_uri());
  }
   add_action('wp_enqueue_scripts','shipper_style');


/* enqueue Script */
  function shipper_script(){
    wp_enqueue_script('bootstrap', get_template_directory_uri().'/js/bootstrap.min.js', array('jquery'));
    wp_enqueue_script('boo-select', get_template_directory_uri().'/js/bootstrap-select.js', array('jquery'));
    wp_enqueue_script('boo-date', get_template_directory_uri().'/js/bootstrap-datepicker.js', array('jquery'));
    wp_enqueue_script('counterup', get_template_directory_uri().'/js/jquery.counterup.min.js', array('jquery'));
    wp_enqueue_script('steller', get_template_directory_uri().'/js/jquery.stellar.js', array('jquery'));
    wp_enqueue_script('validate', get_template_directory_uri().'/js/jquery.validate.min.js', array('jquery'));
    wp_enqueue_script('jquery-form', get_template_directory_uri().'/js/jquery.form.js', array('jquery'));
    wp_enqueue_script('contact-form', get_template_directory_uri().'/js/contact-form.js', array('jquery'));
    wp_enqueue_script('fancebox', get_template_directory_uri().'/js/jquery.fancybox.js', array('jquery'));
    wp_enqueue_script('waypoint', get_template_directory_uri().'/js/waypoints.min.js', array('jquery'));
    wp_enqueue_script('slick', get_template_directory_uri().'/js/slick.js', array('jquery'));
    wp_enqueue_script('masonry', get_template_directory_uri().'/js/masonry.min.js', array('jquery'));
    wp_enqueue_script('script', get_template_directory_uri().'/js/scripts.js', array('jquery'));

    wp_enqueue_script('html5shiv','https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js',array() );
    wp_script_add_data('html5shiv','conditional','lt IE 9');


    wp_enqueue_script('respond','https://oss.maxcdn.com/respond/1.4.2/respond.min.js', array() );
    wp_script_add_data('respond','conditional','lt IE 9');
    
    
  }
   add_action('wp_enqueue_scripts','shipper_script');


  /* readmore function */ 
   function readmore($count){
      $content = get_the_content();
      $arrays   = explode(" ", $content);
      $lessarray = array_slice($arrays, 0, $count);
      echo implode(" ", $lessarray);
   }

/* right sidebar  registration  */
  add_action('widgets_init','sidebar_registration');
  function sidebar_registration(){
      
    register_sidebar(array(

   'name'          => __('Right sidebar Top','shipper'),
   'id'            =>    'right-sidebar-top',
   'description'   => __('Please add Right sidebar Top', 'shipper'),
   'before_widget' => '<div class="widget">',
   'after_widget'  => '</div>',
   'before_title'  => '<h4>',
   'after_title'   => '</h4>'

    ));

    register_sidebar(array(

   'name'          => __('First Footer Widgets','shipper'),
   'id'            =>    'first-footer',
   'description'   => __('Please add First Footer', 'shipper'),
   'before_widget' => '<div class="col-md-4 col-sm-6">',
   'after_widget'  => '</div>',
   'before_title'  => '<h4 class="title">',
   'after_title'   => '</h4>'

    ));
    register_sidebar(array(

   'name'          => __('Second Footer Widgets','shipper'),
   'id'            =>    'second-footer',
   'description'   => __('Please add Second Footer', 'shipper'),
   'before_widget' => '<div class="widget">',
   'after_widget'  => '</div>',
   'before_title'  => '<h4>',
   'after_title'   => '</h4>'

    ));
    register_sidebar(array(

   'name'          => __('Third Footer Widgets','shipper'),
   'id'            =>    'third-footer',
   'description'   => __('Please add Third Footer', 'shipper'),
   'before_widget' => '<div class="widget">',
   'after_widget'  => '</div>',
   'before_title'  => '<h4>',
   'after_title'   => '</h4>'

    ));
     register_sidebar(array(

   'name'          => __('Four Footer Widgets','shipper'),
   'id'            =>    'four-footer',
   'description'   => __('Please add Four Footer', 'shipper'),
   'before_widget' => '<div class="widget">',
   'after_widget'  => '</div>',
   'before_title'  => '<h4>',
   'after_title'   => '</h4>'

    ));

  }

  /* widgets */

  require_once('widgets/social-icon-widgets.php');

  add_shortcode('shipper-slider','shipper_slider');
  function shipper_slider($att, $content){

    ob_start();
       extract( shortcode_atts(array(
           'title'   => 'LOGISTICS',
           'tagline' => 'Check your delivery easily & quickly',
           'image1'  => get_template_directory_uri() . '/images/banner1.jpg',
           'image2'  => get_template_directory_uri() . '/images/banner2.jpg',
           'image3'  => get_template_directory_uri() . '/images/banner3.jpg',
        ),$att));
       ?>
   <section class="slider">
    <div class="fixed-form">
      <div class="container">
        <h3><?php echo $title; ?></h3>
        <h5><?php echo $tagline; ?></h5>
        <form>
          <input type="text" placeholder="Tracking ID">
          &nbsp;
          <input type="text" class="datepicker" placeholder="Date">
          &nbsp;
          <button type="submit">CHECK SHIPPING</button>
        </form>
      </div>
      <!-- end container --> 
    </div>
    <!-- end fixed-form -->
    <div class="main-slider">

      
         <?php
            $photo1 = wp_get_attachment_image_src($image1,'full');
       

            $photo2 = wp_get_attachment_image_src($image2,'full');
         

            $photo3 = wp_get_attachment_image_src($image3,'full');
        

          ?>
      
      <div class="slide1" style="background:url(<?php echo $photo1[0]; ?>) center no-repeat;"> </div>
      <!-- end slider1 -->
      <div class="slide2" style="background:url(<?php echo $photo2[0]; ?>) center no-repeat"> </div>
      <!-- end slider2 -->
      <div class="slide3" style="background:url(<?php echo $photo3[0]; ?>) center no-repeat;"> </div>
      <!-- end slider3 --> 
    </div>
  </section>
  <!-- end slider -->

   <?php 

  }

//services shortcode 

  add_shortcode('shipper-serices','services_function');
  function services_function($att,$content){
  ob_start();
  extract(shortcode_atts(array(
       'section_number' => '',
       'title'          => '',
       'description'    => '',
        
        'section_one_image'  => get_template_directory_uri() . '/images/icon01.png',
        'section_one_title'  => 'SEA SHIPPING',
        'section_one_content'=> 'We want to ensure that it’s as easy as possible to use the site to get.',

        'section_two_image'  => get_template_directory_uri() . '/images/icon02.png',
        'section_two_title'  => 'AIR SHIPPING',
        'section_two_content'=> 'Shipments moving, whether you’ve worked with us for years completely new',

        'section_three_image'  => get_template_directory_uri() . '/images/icon03.png',
        'section_three_title'  => 'LAND SHIPPING',
        'section_three_content'=> 'International shipping. For further assistance, please get in touch. ',
  ),$att));

  ?>
  <section class="featured-services">
    <div class="container">
      <div class="row">
        <div class="col-md-5">
          <div class="left-side">
            <h3 class="section-title"><span><?php echo $section_number ?></span><?php echo $title; ?></h3>
              <?php echo $description; ?>
          </div>
          <!-- end left-side --> 
        </div>
        <!-- end col-5 -->
        <div class="col-md-7">
          <div class="right-side">
            <div class="service-box">
            <?php
                 $photo1 = wp_get_attachment_image_src($section_one_image,'full');
       

                 $photo2 = wp_get_attachment_image_src($section_two_image,'full');
         

                $photo3 = wp_get_attachment_image_src($section_three_image,'full'); 

            ?>

              <figure><img src="<?php echo $photo1[0]; ?>" alt="Image">
                <figcaption><?php echo $section_one_title; ?></figcaption>
              </figure>
              <div class="desc"> <?php echo $section_one_content; ?></div>
              <!-- end desc --> 
            </div>
            <!-- end service-box -->
            <div class="service-box spacing">
              <figure><img src="<?php echo $photo2[0]; ?>" alt="Image">
                <figcaption><?php echo $section_two_title; ?></figcaption>
              </figure>
              <div class="desc"> <?php echo $section_two_content; ?></div>
              <!-- end desc --> 
            </div>
            <!-- end service-box -->
            <div class="service-box">
              <figure><img src="<?php echo $photo3[0]; ?>" alt="Image">
                <figcaption><?php echo $section_three_title; ?></figcaption>
              </figure>
              <div class="desc"><?php echo $section_three_content; ?></div>
              <!-- end desc --> 
            </div>
            <!-- end service-box --> 
          </div>
          <!-- end right-side --> 
        </div>
        <!-- end col-7 --> 
      </div>
      <!-- end row --> 
    </div>
    <!-- end container --> 
  </section>
  <?php 
 $observices = ob_get_clean();
 return $observices;
 }


 //calculation shortcode 

 add_shortcode('shipper-calculating','calculating_function');
 function calculating_function($attr,$content){
ob_start();
extract(shortcode_atts(array(
   'section_number'   => '01',
   'section_title'    => 'CALCULATE SHIPPING',
   'section_image'    =>  get_template_directory_uri() . '/images/calculate-man.jpg',

),$attr));
?>
   <section class="calculate-shipping">
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-sm-12">
          <h3 class="section-title"><span><?php echo $section_number; ?></span><?php echo $section_title; ?></h3>
          <form action="" method="POST">
            <div class="row">
              <div class="col-md-6 col-sm-6">
                <div class="form-group radio-field">
                  <label>Distance</label>
                  <span class="holder">
                  <input type="radio" name="distance" value="domestic" checked>
                  Domestic</span> <span class="holder">
                  <input type="radio" name="distance" value="International">
                  International</span> </div>
                <!-- end form-group -->
                <div class="form-group">
                  <label>Weight: (Gm)</label>
                  <input type="number" name="Weight">
                </div>
                <!-- end form-group -->
                <div class="form-group size-field">
                  <label>Cargo Size</label>
                  <input type="text" placeholder="cm" name="width">
                  <span>x</span>
                  <input type="text" placeholder="cm" name="height">
                </div>
                <!-- end form-group -->
                
                <div class="form-group">
                  <label>Fragile</label>
                  <select class="selectpicker" name="fragile">
                    <option class="yes" value="yes">YES</option>
                    <option class="no" value="no">NO</option>
                  </select>
                </div>
                <!-- end form-group --> 
              </div>
              <!-- col-6 -->
              <div class="col-md-6 col-sm-6">
                <div class="form-group">
                  <label>Extra Services</label>
                  <span class="full-block">
                  <input type="checkbox" class="quick" checked>
                  Quick Delivery</span> <span class="full-block">
                  <input type="checkbox" class="warranty">
                  Warranty</span> <span class="full-block">
                  <input type="checkbox" class="gift">
                  Gift Box</span> </div>
                <!-- end form-group -->
                <div class="form-group"> <small>The Field below will show the double of the number about $</small> </div>
                <!-- end form-group -->
                <div class="form-group">
                  <input type="text" value="$200" name="maan" disabled>
                </div>
                <!-- end form-group -->
                <div class="form-group">
                  <button type="submit" name="calculate">CALCULATE</button>
                </div>
                <!-- end form-group --> 
              </div>
              <!-- col-6 --> 
            </div>
            <!-- end row -->
          </form>
        </div>
        <!-- end col-8 -->
        <div class="col-md-4 hidden-sm hidden-xs">
          <?php 
            $photo = wp_get_attachment_image_src($section_image,'full')
          ?>
          <figure> <img src="<?php echo $photo[0]; ?> " alt="Image"> </figure>
        </div>
        <!-- end col-4 --> 
      </div>
      <!-- end row --> 
    </div>
    <!-- end container --> 
  </section>

<?php
$obclaculating = ob_get_clean();
return $obclaculating;


 }

 //page section 

 add_shortcode('shipper-page','page_function');
 function page_function($attr, $content){
  ob_start();
  extract(shortcode_atts(array(
      'section_one_title'     => 'PACKING',
      'section_one_tagline'   => 'STORAGES',
      'section_one_links'      => '',
      'section_one_image'     => get_template_directory_uri() . '/images/steps-image1.png',

      'section_two_title'     => 'LANDING',
      'section_two_tagline'   => 'FEATURES',
      'section_two_link'      => '',
      'section_two_image'     => get_template_directory_uri() . '/images/steps-image2.png',


      'section_three_title'     => 'DELIVERY',
      'section_three_tagline'   => 'SERVICES',
      'section_three_link'      => '',
      'section_three_image'     => get_template_directory_uri() . '/images/steps-image3.png',

  ),$attr));
  
    ?>

<!-- end calculate-shipping -->
  <section class="steps-features">
    <div class="container">
      <div class="row spacing">
        <div class="col-md-4 col-sm-4 spacing">
          <?php 
            $photo1 = wp_get_attachment_image_src($section_one_image,'full')
          ?>
          <div class="step-box bg-1" style="background-image:url(<?php echo $photo1[0] ?>);"> <span>01</span>
            <h3><?php echo $section_one_title; ?></h3>
            <h5><?php echo $section_one_tagline; ?></h5>
            <a href="<?php echo $section_one_links; ?>">READ MORE</a> </div>
          <!-- end step-box --> 
        </div>
        <!-- end col-4 -->
        <div class="col-md-4 col-sm-4 spacing">
          <?php 
            $photo2 = wp_get_attachment_image_src($section_two_image,'full')
          ?>
          <div class="step-box bg-2 featured" style="background-image:url(<?php echo $photo2[0]; ?>);"> <span>02</span>
            <h3><?php echo $section_two_title; ?></h3>
            <h5><?php echo $section_two_tagline; ?></h5>
            <a href="<?php  echo $section_two_link; ?>">READ MORE</a> </div>
          <!-- end step-box --> 
        </div>
        <!-- end col-4 -->
        <div class="col-md-4 col-sm-4 spacing">
          <?php 
            $photo3 = wp_get_attachment_image_src($section_three_image,'full')
          ?>
          <div class="step-box bg-3" style="background-image:url(<?php echo $photo3[0]; ?>);"> <span>03</span>
            <h3><?php echo $section_three_title; ?></h3>
            <h5><?php echo $section_three_tagline ?></h5>
            <a href="<?php echo $section_three_link; ?>">READ MORE</a> </div>
          <!-- end step-box --> 
        </div>
        <!-- end col-4 --> 
      </div>
      <!-- end row --> 
    </div>
    <!-- end container --> 
  </section>

    <?php 
$obpage = ob_get_clean();
 return $obpage;

 }


 //lateat news shortcode 

 add_shortcode('shipper-news','news_function');
 function news_function($attr, $content){
 ob_start();

 extract(shortcode_atts(array(
      'section_number' => '03',
      'section_title'  => ''

 ),$attr));
  ?>
<section class="latest-news">
    <div class="container">
      <div class="row spacing">
        <div class="col-xs-12 spacing">
          <h3 class="section-title"><span>03</span>LATEST NEWS</h3>
        </div>
        <!-- end col-12 -->
         <?php 
         $newpost = new Wp_Query(array(
             'post_type'      => 'post',
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
      </div>
      <!-- end row --> 
    </div>
    <!-- end container --> 
  </section>
  <?php 
  $obnews = ob_get_clean();
  return $obnews;
 }

 //client section 

 add_shortcode('shipper-client','function_client');
 function function_client(){
ob_start();
?>
   <section class="clients">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <ul>

     <?php 
        $clientimage = new Wp_Query(array(
           'post_type'      => 'shipper-clients',
           'posts_per_page' => 6,
        ));
     while($clientimage->have_posts()):$clientimage->the_post(); ?>
            <li>
              <figure>
                <h5><?php the_post_thumbnail(); ?></h5>
              </figure>
            </li>
         
      <?php endwhile; ?>
           
          </ul>
        </div>
        <!-- end col-12 --> 
      </div>
      <!-- end row --> 
    </div>
    <!-- end container --> 
  </section>
<?php 
$obclient = ob_get_clean();
return $obclient;
 }

 //about shipper 

 add_shortcode('shipper-about','about_function');
 function about_function($attr, $content){

  ob_start();

  extract(shortcode_atts(array(
     'section_number'         =>  '04',
     'section_left_title'     => '',
     'section_left_content'   => '',

     'left_icon_award_title'        => '',
     'left_icon_award_tagline'      => '',
     'left_icon_award_number'       =>'',

        
     'left_icon_packiging_tagline'      => '',
     'left_icon_packiging_number'       =>'',

     'right_title'                      => '',
     'right_image'                      =>'',



  ),$attr));
?>

<section class="about-intro parent">
    <div class="left-side">
      <div class="content-box">
        <h3 class="section-title"><span><?php echo $section_number; ?></span><?php echo $section_left_title ?></h3>
        <p><?php echo $section_left_content; ?></p>
        <div class="fun-facts">
          <h5><?php echo $left_icon_award_title; ?></h5>
          <div class="fun-box"> <i class="ion-trophy"></i> <span class="title"><?php echo $left_icon_award_tagline; ?></span> <span class="plus">+</span><b class="counter"><?php echo $left_icon_award_number; ?></b> </div>
          <!-- end fun-box -->
          <div class="fun-box"> <i class="ion-umbrella"></i> <span class="title"><?php echo $left_icon_packiging_tagline; ?></span><span class="plus">+</span><b class="counter"><?php echo $left_icon_packiging_number; ?></b> </div>
          <!-- end fun-box --> 
        </div>
        <!-- end fun-facts --> 
      </div>
      <!-- end content-box --> 
    </div>
    <!-- end left-side -->

    <?php 

            $photoright = wp_get_attachment_image_src($right_image,'full')
      
    ?>
    <div class="right-side" style="background:url(<?php echo $photoright[0]; ?> no-repeat;" data-stellar-background-ratio="0.5">
      <div class="overlay parent text-center">
        <div><?php echo $right_title; ?></div>
      </div>
    </div>
    <!-- end left-side --> 
  </section>

<?php 

 }

 //heading shortcode 
add_shortcode('heading','function_heading');
function function_heading($attr,$content){
  ob_start();
extract(shortcode_atts(array(
       'section_number' => '',
       'section_title'  => ''

),$attr));
?>
       <div class="container">
      <div class="row">
       <div class="col-xs-12">
          <h4 class="section-title"><span><?php echo $section_number?></span><?php echo $section_title; ?></h4>
        </div>
      </div>
    </div>

<?php 

}

add_shortcode('shipper-team','team_function');
function team_function($attr,$content){
ob_start();
extract(shortcode_atts(array(
    'section_top_content' => '',

),$attr));
  ?>
    <section class="members">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <p class="intro"><?php echo $section_top_content ?></p>
        </div>
        <!-- end col-12 -->

<?php 
 $teampost = new Wp_Query(array(
     'post_type'      => 'shippers-team',
     'posts_per_page' => 8

 ));

while($teampost->have_posts()):$teampost->the_post(); ?>
        <div class="col-md-3 col-sm-3 col-xs-6">
          <div class="member">
            <figure><?php the_post_thumbnail(); ?>
              <figcaption>
                <h5><?php the_title(); ?></h5>
                <small><?php the_content(); ?></small> </figcaption>
            </figure>
          </div>
          <!-- end member --> 
        </div>
<?php endwhile; ?>

        <!-- end col-3 -->
      
        <!-- end col-3 -->
        
       
        <!-- end col-3 --> 
      </div>
      <!-- end row --> 
    </div>
    <!-- end container --> 
  </section>
  <?php 
  $obteam = ob_get_clean();
  return $obteam;
}

// gallery shortcode 

add_shortcode('gallery','gallery_function');
function gallery_function(){
ob_start();
  ?>
  <section class="gallery">
    <div class="container">
      <div class="row">
        
        <!-- end col-12 -->
        <div class="col-xs-12">
          <ul>
            <?php 
            $newgallery = new Wp_Query(array(
              'post_type' => 'shippers-gallery'

            ));

            while($newgallery->have_posts()):$newgallery->the_post(); ?>
              <li><figure><a href="" class="fancybox"><?php the_post_thumbnail(); ?></a></figure>

              </li>
            <?php endwhile; ?>
            </ul>
        </div>
        <!-- end col-12 -->
      </div>
      <!-- end row --> 
    </div>
    <!-- end container --> 
  </section>
  <?php
  $obgallery = ob_get_clean();
  return $obgallery;
}
//testimonial shortcode 
add_shortcode('shipper-testimonial', 'testimonial_function');
function testimonial_function(){
  ob_start();

  ?>
  <section class="testimonials">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <div class="content-carousel">
        <?php 
          $tes = new Wp_Query(array(
             'post_type' => 'shipper-testimonial',
           

          )); 

        while($tes->have_posts()):$tes->the_post(); ?>
            <div>
              <figure><?php the_post_thumbnail(); ?></figure>
              <blockquote><?php the_content(); ?></blockquote>
              <i class="ion-android-hangout"></i>
              <h4><?php echo the_title(); ?></h4>
              <small><?php echo get_post_meta(get_the_id(),'__desiganation__',true); ?></small> 
            </div>
          <?php endwhile; ?>
            <!-- end div -->
           
            <!-- end div -->
            
            <!-- end div --> 
          </div>
          <!-- end content-carousel --> 
        </div>
        <!-- end col-12 --> 
      </div>
      <!-- end row --> 
    </div>
    <!-- end container --> 
  </section>
  <?php 
  $obtestimonial = ob_get_clean();
  return $obtestimonial;

}

//career shortcode 
add_shortcode('shipper-career', 'career_function');
function career_function($attr,$content){

ob_start();

extract(shortcode_atts(array(
  'main_content'      => '', 
  'job_title'         => '',
  'job_location'      => '',
  'job_serial_number' => '', 
  'job_description'   => '',
  'job_requirment'    => ''

),$attr));
  ?>
       <section class="career">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          
        </div>
        <!-- end col-12 -->
        <div class="col-xs-12">
          <p class="lead"><?php echo $main_content; ?></p>
        </div>
        <!-- end col-12 -->
        <div class="col-xs-12">
          <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
            <div class="panel panel-default">
              <div class="panel-heading" role="tab" id="headingOne">
                <h4 class="panel-title"> <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne"> <span class="col-xs-4"><?php echo $job_title ?></span> <span class="col-xs-4"><?php echo $job_location; ?></span> <span class="col-xs-4 text-right"><?php echo $job_serial_number; ?></span> </a> </h4>
              </div>
              <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                <div class="panel-body">
                  <h4>JOB DESCRIPTION</h4>
                  <p><?php echo $job_description; ?></p>
                  <br>
                  <h4>REQUIREMENTS</h4>
                  <ul>
                      <?php echo $job_requirment; ?>
                  </ul>
                  <button type="submit"><i class="ion-checkmark"></i> APPLY NOW</button>
                </div>
                <!-- end panel-body --> 
              </div>
              <!-- end panel-collapse --> 
            </div>
            <!-- end panel -->
            
            <!-- end panel -->
            
            <!-- end panel --> 
          </div>
          <!-- end panel-group --> 
        </div>
        <!-- end col-12 --> 
      </div>
      <!-- end row --> 
    </div>
    <!-- end container --> 
  </section>
  <?php 
}

$obcareer = ob_get_clean();
return $obcareer;
?>
 
