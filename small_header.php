<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>
        <?php
		      if (function_exists('is_tag') && is_tag()) {
		         single_tag_title("Tag Archive for &quot;"); echo '&quot; - '; }
		      elseif (is_archive()) {
		         wp_title(''); echo ' Archive - '; }
		      elseif (is_search()) {
		         echo 'Search for &quot;'.wp_specialchars($s).'&quot; - '; }
		      elseif (!(is_404()) && (is_single()) || (is_page())) {
		         wp_title(''); echo ' - '; }
		      elseif (is_404()) {
		         echo 'Not Found - '; }
		      if (is_home()) {
		         bloginfo('name'); echo ' - '; bloginfo('description'); }
		      else {
		          bloginfo('name'); }
		      if ($paged>1) {
		         echo ' - page '. $paged; }
		   ?>
    </title>

    <meta name="description" content="<?php bloginfo('description'); ?>">

    <link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/_/img/favicon.ico">

    <?php wp_head(); ?>

</head>

<body>

    <div class="container-fluid">
        <!-- <nav class="navbar">
        
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
      <a class="navbar-brand" href="#"> <img src="http://localhost/wordpress/wp-content/themes/ciswa_theme/images/CISWALogowhite.png" alt="CISWA logo"/></a>
    
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
            
        <a class="dropdown-toggle" data-toggle="dropdown" href="#"> About Us <span class="caret"></span></a>
            
        <ul class="dropdown-menu">  
        <li><a href="#">What is CISWA</a></li>
      <li><a href="#">President's Welcome</a></li>
      <li><a href="#">The Executive Council</a></li>
            
        </ul>
        </li>
          
             <li class="dropdown">
            
            
            <a class="dropdown-toggle" data-toggle="dropdown" href="#"> Members <span class="caret"></span></a>
            
        <ul class="dropdown-menu">  
        <li><a href="#">Proffesional Development</a></li>
      <li><a href="#">Annual Winter Conference</a></li>
      <li><a href="#">Membership Benefits</a></li>
            
        </ul>
        </li>
          
             <li class="dropdown">
   
            <a class="dropdown-toggle" data-toggle="dropdown" href="#"> Community Interactions <span class="caret"></span></a>
            
        <ul class="dropdown-menu">  
        <li><a href="#">Experience Australian Christmas</a></li>
      <li><a href="#">Host Australian Christmas</a></li>
      <li><a href="#">Share a Meal (host/students)</a></li>
            
        </ul>
        </li>
         
        <li><a href="#">Awards</a></li> 
          <li><a href="#">Contact Us</a></li> 
      
       </ul> 
      </div>
    </nav>  -->

        <nav class="navbar ">

            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="http://"><img src="http://localhost/wordpress/wp-content/themes/ciswa_theme/images/CISWALogowhite.png" alt="CISWA logo" /></a>

                </div>
                <div class="collapse navbar-collapse" id="myNavbar">

                    <?php
wp_nav_menu( array(
'menu' => 'Primary',
'depth' => 2,
'container' => false,
'menu_class' => 'nav navbar-nav navbar-right',
'fallback_cb' => 'wp_bootstrap_navwalker::fallback',
//Process nav menu using our custom nav walker
'walker'=> new WP_Bootstrap_Navwalker())
);
?>
                </div>
            </div>
        </nav>

        <header class="container-fluid">
            <div class="container">

            </div>
        </header>

    </div>
