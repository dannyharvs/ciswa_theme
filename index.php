<?php get_header(); /* Tells WordPress to include header.php */ ?>

<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('main_tag') ) : 
endif; ?>

<div class="container-fluid maincontainer">
    <div class="container-fluid text-center">
        <h2 class="text-center">Our Mission</h2>
        <div class="row">
            
            
            
  <div class="col-sm-4">
      <img class="img-responsive" src="http://localhost/wordpress/wp-content/themes/ciswa_theme/images/PD.jpg" alt="proffesional development"/>
      <h3>Professional Development</h3>
      <p>Providing education and support at our annual winter conference.</p>
      <button type="button" class="btn btn-default">Register Now</button>
            </div>
  <div class="col-sm-4">
      <img class="img-responsive" src="http://localhost/wordpress/wp-content/themes/ciswa_theme/images/awards.jpg" alt="CISWA awards"/>
      <h3>CISWA Awards</h3>
      <p>For promoting and supporting international education in WA.</p>
      <button type="button" class="btn btn-default">View Awards</button>
            </div>
  <div class="col-sm-4">
      <img class="img-responsive" src="http://localhost/wordpress/wp-content/themes/ciswa_theme/images/communityengagement.jpg" alt="community engagement"/>
      <h3>Community Engagement</h3>
      <p>Creating opportunities for international students.</p>
      <button type="button" class="btn btn-default">Learn More</button>
            </div>
</div>
      </div>
</div>
      
      
      <div class="container-fluid members text-center"> 
          <div class="members">
      <h3>Members</h3>
              
<?php echo do_shortcode('[logoshowcase]'); ?>
              
      </div>  
      </div>
      
<?php get_footer(); /* Tells WordPress to include footer.php */ ?>