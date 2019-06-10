<!DOCTYPE html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Tutorial site</title>
<?php wp_head() ?>

</head>
<body>
  <div class="wrapper container-fluid">
  <header>
    <div class="row">
    <button id="btn-toggle" class="nav-mobile-btn">Menu</button>
      <div class="header-logo col-lg-4 col-xs-12">
          <div class="header-logo-pic">
               <img src="<?php echo get_stylesheet_directory_uri()?>/css/pics/logo.png">
           </div>
           <p><b>pic</b>award</p>
      </div>
      <div class="nav-main offset-lg-3 col-lg-5 col-xs-12">
      <?php wp_nav_menu(array(
        'theme_location' => 'primary',
        'container_class' => 'main-nav-list' )) ?>
      </div>
 
   </div>
   </header>
