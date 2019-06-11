<?php
    /*
    Template Name: What's CISWA

    */
    ?>
<?php include (TEMPLATEPATH . '/small_header.php');  /* Tells WordPress to include the smaller header header.php */ ?>



<div class="container-fluid maincontainer">
    <div class="container">
        <div class="row">
            <div class="col-sm-6" text-center>
                <h1><?php the_field('whatisciswaheading'); ?>
                </h1>
                <p><?php the_field('whatisciswa'); ?>
                    
<!--
                    CISWA is an independent, voluntary, non-profit group promoting the wellbeing of international students studying in Western Australia.
                    Originally funded by AusAid, CISWA was established in1963 in response to the demand for support services for the 1000 international students studying in Western Australia. Over fifty years on, CISWA remains the only organization of its kind in Australia, though the number of international students in WA has grown to over 50,000.

                    CISWA supports the staff who work with international students, running an affordable Professional Development (PD) Program and an Annual Winter Conference currently in its 25th year.
                    CISWA supports international students through providing free Hospitality programs integrating them with local Australian families through the “Country”, “Christmas” and “Share a Meal” programs. The two former programs have been in operation for over 20 years.
-->
                </p>


            </div>
            
            <div class="col-sm-6">
                <img class="img-responsive" src="<?php the_field('whatisciswaimage'); ?>" alt="whatisciswaimage">
<!--                <img src="http://localhost/wordpress/wp-content/themes/ciswa_theme/images/awards.jpg" alt="awards" />-->
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