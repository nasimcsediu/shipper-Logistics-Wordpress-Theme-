 <?php 

global $shipper;
 ?>


 <div class="application"> <img src="<?php echo get_template_directory_uri(); ?>/images/app-mockup.jpg" alt="Image"> </div>
 <footer class="dark-footer">
    <div class="footer-content">
      <div class="container">
        <div class="row">
          
              <?php dynamic_sidebar('first-footer') ?>
          </div>
          <!-- end col-5 -->
          <div class="col-md-2 col-sm-3 col-xs-6">
            
            <ul class="footer-menu">
              <?php 
                 dynamic_sidebar('second-footer');
              ?>
               </ul>
          </div>
          <!-- end col-2 -->
          <div class="col-md-2 col-sm-3 col-xs-6">
            
            <ul class="footer-menu">
              <?php
              dynamic_sidebar('third-footer');
           ?>
            </ul>
          </div>
          <!-- end col-2 -->
          
          <div class="col-md-4">
            
            <ul class="footer-menu">
              <?php
              dynamic_sidebar('four-footer');
           ?>
            </ul>
            <!-- end newsletter --> 
          </div>
          <!-- end col-2 --> 
        </div>
        <!-- end row -->
        <div class="row middle-bar">
    <div class="col-lg-4 col-md-3 hidden-sm hidden-xs"> <img src="<?php echo $shipper['footer-logo']['url'];?>" alt="" class="logo">
            <h4><?php echo $shipper['footer-logo-tagline'] ?></h4>
          </div>
          <!-- end col-4 -->
          <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
            <h3><?php echo $shipper['app-text'] ?></h3>
            <p><?php echo $shipper['app-details'] ?></p>
          </div>
          <!-- end col-4 -->
          <div class="col-lg-4 col-sm-6 col-md-5 col-xs-12">
            <ul>
              <li><img src="<?php echo $shipper['app-details1']['url'] ?>" alt=""></li>
              <li><img src="<?php echo $shipper['app-details2']['url'] ?>" alt=""></li>
            </ul>
            <i class="icon-mobile responsive-icon"></i> <a rel='nofollow' href='http://www.themezinho.net/' ><img src=' https://chart.googleapis.com/chart?cht=qr&amp;chl=www.themezinho.net&amp;chs=90x90' alt=''></a> </div>
          <!-- end col-4 --> 
        </div>
        <!-- end row --> 
      </div>
      <!-- end container --> 
    </div>
    <!-- end footer-content -->
    <div class="sub-footer">
      <div class="container"> <span class="copyright"> <?php echo $shipper['copy-write-text'] ?></span></div>
      <!-- end container --> 
    </div>
    <!-- end sub-footer --> 
  </footer>
  <!-- end footer --> 
</main>

<!-- JS FILES --> 



<?php wp_footer(); ?>
</body>


</html>