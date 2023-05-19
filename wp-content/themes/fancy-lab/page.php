
<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Fancy Lab
 */

get_header();
?>

<div class="content-area">
    <main>
        <div class="container">
            <div class="row">
                <?php
                    //if there are any posts
                    if ( have_posts() ):
                        //load posts loop
                        while( have_posts() ): the_post();
                        ?>
                        <article class="col">
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
    </main>
</div>

<?php get_footer(); ?>
