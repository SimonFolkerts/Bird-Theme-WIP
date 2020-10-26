<?php get_header(); ?>
<div class="bird-content">
    <?php while (have_posts()) : the_post(); ?>
        <div>
            <h2><?php the_title(); ?></h2>
            <?php the_post_thumbnail(); ?>
            <p>
                <?php the_content(); ?>
            </p>
        </div>
    <?php endwhile; ?>
</div>
<?php get_footer();
