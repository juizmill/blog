<?php get_header(); ?>

    <?php if (have_posts()): ?>
        <?php while (have_posts()): ?>
            <?php the_post(); ?>
            <?php the_content(); ?>
        <?php endwhile; ?>
    <?php else: ?>
        <p>Nenhuma pagina econtrada!</p>
    <?php endif;?>

<?php get_footer(); ?>
