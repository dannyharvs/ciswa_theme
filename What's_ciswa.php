<?php
    /*
    Template Name: What's CISWA

    */
    ?>
<?php get_header(); /* Tells WordPress to include header.php */ ?>
<div class="container-fluid maincontainer">
    <div class="container">
        <div class="row">
            <section class="col-sm-7 main_text">
<article class="excerpts">	
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  
 					
<div class="post single-page">
		<h3 class="posttitle" id="post-<?php the_ID(); ?>"><?php the_title(); ?></h3>

		
	</div><!--post class-->
	
        <!—add the hook to the new tester text field which can be added to any div anywhere-->
    
	<p><?php the_field(‘tester’); ?></p>

   
<?php endwhile; ?>
			
	<?php else: ?>
	<div class="post">
		<p>Sorry, no posts found.</p>
	</div><!--post-->
	<?php endif; ?>
	</article><!---->


</section> <!--main_articles-->
    <?php get_sidebar(); ?>        
            
     </div>
    </div>
  </div>


<?php get_footer(); ?>