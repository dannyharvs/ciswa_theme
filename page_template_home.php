<?php
    /*
    Template Name: Home page

    */
    ?>
<?php get_header(); /* Tells WordPress to include header.php */ ?>

<div class="container-fluid maincontainer">
    <div class="container-fluid text-center">
        <div class="container-fluid text-center heading">
            <h2><?php the_field('ourmission'); ?></h2>
        </div>
        <div class="row">

            <div class="col-sm-4">
                <!--                <img class="img-responsive" src="http://localhost/wordpress/wp-content/themes/ciswa_theme/images/PD.jpg" alt="proffesional development" />-->
                <img class="img-responsive" src="<?php the_field('pd_image'); ?>" alt="pd image">
                <h3><?php the_field('professional_development'); ?>
                    <!--Professional Development-->
                </h3>
                <p><?php the_field('providing_education'); ?>
                    <!--                Providing education and support at our annual winter conference.-->
                </p>
                <a class="btn btn-default" href=<?php the_field('registernow'); ?>>Register Now</a>


                <!--                    Register Now-->
                
            </div>
            <div class="col-sm-4">
                <!--                <img class="img-responsive" src="http://localhost/wordpress/wp-content/themes/ciswa_theme/images/awards.jpg" alt="CISWA awards" />-->
                <img class="img-responsive" src="<?php the_field('awards_image'); ?>" alt="awards_image">
                <h3><?php the_field('ciswa_awards');?></h3>
                <p><?php the_field('for_promoting'); ?>
                    <!--                    For promoting and supporting international education in WA.-->
                </p>
                <a class="btn btn-default" href=<?php the_field('viewawards'); ?>>View Awards</a>
<!--                <button type="button" class="btn btn-default">View Awards</button>-->
            </div>
            <div class="col-sm-4">
                <img class="img-responsive" src="<?php the_field('community_image'); ?>" alt="community_image">
                <!--                <img class="img-responsive" src="http://localhost/wordpress/wp-content/themes/ciswa_theme/images/communityengagement.jpg" alt="community engagement" />-->
                <h3><?php the_field('community_interactions'); ?></h3>
                <p><?php the_field('creating_opportunities'); ?>
                    <!--                    Creating opportunities for international students.-->
                </p>
                <a class="btn btn-default" href=<?php the_field('learnmore'); ?>>Learn More</a>
<!--                <button type="button" class="btn btn-default">Learn More</button>-->
            </div>
        </div>
    </div>
</div>


<div class="container-fluid members text-center">
    <div class="members">
        <h2><?php the_field('members'); ?>
            <!--Members-->
        </h2>

        <?php echo do_shortcode('[logoshowcase]'); ?>

    </div>
</div>


<?php get_footer(); /* Tells WordPress to include footer.php */ ?>
