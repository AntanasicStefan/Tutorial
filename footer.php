<footer class="footer">
  <div class="row footer-wrap">
           <div class="footer-logo col-lg-4 col-xs-12">
                <div class="footer-logo-pic">
                    <img src="<?php echo get_stylesheet_directory_uri()?>/css/pics/logo.png">
                </div>
                    <p>&copy 2017 PicAward.</p>
            </div>
              <div class="nav-footer col-lg-8 col-xs-12">
                  <div class="menu col-lg-3 footer-navigation-items col-xs-6">
                    <h5>Menu</h5>
                    <?php wp_nav_menu(array(
                      'theme_location' => 'secondary',
                      'container_class' => 'footer-nav-list' )) ?>
                  </div>
                  <div class="legal col-lg-3 footer-navigation-items col-xs-6">
                    <h5>Legal</h5>
                    <?php wp_nav_menu(array(
                      'theme_location' => 'secondary2',
                      'container_class' => 'footer-nav-list')) ?>
                  </div>
                  <div class="about col-lg-3 footer-navigation-items col-xs-6">
                    <h5>About</h5>
                    <?php wp_nav_menu(array(
                      'theme_location' => 'secondary3',
                      'container_class' => 'footer-nav-list')) ?>
                  </div>
                  <div class="social col-lg-3 footer-navigation-items col-xs-6">
                        <h5>Social</h5>
                        <ul class="">
                            <li><a href="https://facebook.com"><img src="<?php echo get_stylesheet_directory_uri()?>/css/pics/face.png"></a></li>
                            <li><a href="https://instagram.com"><img src="<?php echo get_stylesheet_directory_uri()?>/css/pics/instagram.png"></a></li>
                            <li><a href="https://twitter.com/"><img src="<?php echo get_stylesheet_directory_uri()?>/css/pics/twitter.png"></a></li>
                        </ul>
                  </div>
              </div>
   </div>>
</footer>
<?php wp_footer() ?>
</div>
</body>