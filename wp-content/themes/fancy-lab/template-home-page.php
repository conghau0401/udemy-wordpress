<?php
/*
Template Name: Home Page hau
*/
get_header();
?>

<div class="content-area">
    <main>

        <div class="container">
            <section class="slider">Slider 123</section>
            <section class="popular-products">Popular products</section>
            <section class="new-arrivals">New Arrivals</section>
            <section class="deal-of-the-week">Deal of the week</section>
            <section class="slider">Slider</section>
        </div>
        <section class="lab-blog">
            <div class="container">
                <div class="row">
                    <?php
                        //if there are any posts
                        if ( have_posts() ):
                            //load posts loop
                            while( have_posts() ): the_post();
                            ?>
                            <article>
                                <h2><?php the_title(); ?></h2>
                                <div><?php the_content(); ?></div>
                            </article>
                            <?php
                            endwhile;
                        else:
                    ?>
                    <p>Nothing to display.</p>
                    <?php endif; ?>
                </div>
            </div>
        </section>
    </main>
</div>

<?php get_footer(); ?>
