<?php while ( have_posts() ) : the_post(); ?>
    <section class="post-content">
        <p><?php the_content() ?></p>
    </section>
<?php endwhile; ?>