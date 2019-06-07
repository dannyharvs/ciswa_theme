<?php get_header(); /* Tells WordPress to include header.php */ ?>

<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('main_tag') ) : 
endif; ?>

<div class="container-fluid maincontainer">
    <div class="container-fluid text-center">
        <h2 class="text-center">Our Mission</h2>


        <article class="excerpts">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

            <div <?php post_class(); ?>>
                <h3 class="posttitle" id="post-<?php the_ID(); ?>">
                    <a href="<?php the_permalink() ?>" rel="bookmark">
                        <?php the_title(); ?>
                    </a>
                </h3>

                <div class="postcontent">
                    <?php the_excerpt(); ?>
                </div>
                <!--postcontet-->


            </div>
            <!--post class-->

            <?php endwhile; ?>

            <?php else: ?>
            <div class="post">
                <p>Sorry, no posts found.</p>
            </div>
            <!--post-->
            <?php endif; ?>

        </article>

        <section class="aside_elements">
            <!-- ---- Widgetized sidebar ------------------------->
            <?php /* Widgetized sidebar */
    if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('widgetized-area') ) : ?><?php endif; ?>
            <!-- ------- Widgetized sidebar ---------------------->
        </section>



    </div>
</div>


<div class="container-fluid members text-center">
    <div class="members">
        <h3>Members</h3>

        <?php echo do_shortcode('[logoshowcase]'); ?>

    </div>
</div>

<?php get_footer(); /* Tells WordPress to include footer.php */ ?>
