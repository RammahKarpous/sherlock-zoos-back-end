<?php get_header(); ?>

<div class="main">
    <?php while ( have_posts() ) : the_post(); ?>
        <section class="post-content">
            <h2><?php the_title() ?></h2>
            <p><?php the_content() ?></p>
        </section>
    <?php endwhile; ?>
</div>

<?php get_footer();