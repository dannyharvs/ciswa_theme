<?php
    /*
    Template Name: The Executive Council

    */
    ?>
<?php include (TEMPLATEPATH . '/small_header.php');  /* Tells WordPress to include the smaller header header.php */ ?>



<div class="container-fluid maincontainer">
    <div class="container">
        <div class="row">
            <div class="col-sm-8" text-center>
                <h2><?php the_field('theexecutivecouncil'); ?>
                </h2>
                <p><?php the_field('intro'); ?></p>

                <h2><?php the_field('presidentheading'); ?>
                </h2>
                <p><?php the_field('presidentp'); ?></p>

                <h1><?php the_field('viceheading'); ?>
                </h1>
                <p><?php the_field('viceheadingp'); ?></p>

                 <h1><?php the_field('2ndviceheading'); ?>
                </h1>
                <p><?php the_field('2ndvicep'); ?></p>
                
                <h1><?php the_field('treasureheading'); ?>
                </h1>
                <p><?php the_field('treasurep'); ?></p>
                
                <h1><?php the_field('projectheading'); ?>
                </h1>
                <p><?php the_field('projectp'); ?></p>
                
            </div>

            <!--main_articles-->
            <div class="spacer">
            </div>





        </div>
        <!--row-->
    </div>
    <!--container-->
</div>
<!--container_fluid-->

<?php get_footer(); /* Tells WordPress to include footer.php */ ?>
