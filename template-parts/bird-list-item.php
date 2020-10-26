<div class="bird-list-item">
    <h2 class="bird-list-item__header"><a href="<?php echo "?birds_species=" . $post->post_name?>"><?php the_title() ?></a></h2>

    <?php the_post_thumbnail([200,200], array("class" => "bird-list-item__thumb")); ?>

    <p class="bird-list-item__excerpt"><?php the_excerpt(); ?></p>
</div>