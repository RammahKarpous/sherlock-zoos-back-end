<?php get_header(); ?>

<div class="main">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <section class="post-content">
            <h2><?php the_title() ?></h2>
            <p><?php the_content() ?></p>
            <small><?php the_time('F j, Y') ?></small>
        </section>
    <?php endwhile;
        else : ?>
            <p>There are no posts</p>
    <?php endif; ?>
</div>

<?php get_footer();