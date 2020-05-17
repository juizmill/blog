<?php get_header(); ?>

    <section class="content">
        <?php if (have_posts()): ?>
            <?php while (have_posts()): the_post(); ?>
                <article>
                    <div class="article-content">
                        <a href="<?php echo esc_url( get_permalink() ); ?>" title="<?php the_title(); ?>">
                            <?php if (has_post_thumbnail()): ?>
                                <img class="thumbnail" src="<?php echo get_the_post_thumbnail_url(get_the_ID()) ?>" alt="<?php the_title(); ?>">
                            <?php else: ?>
                                <img class="thumbnail" src="https://picsum.photos/430/150" alt="<?php the_title(); ?>">
                            <?php endif; ?>
                        </a>
                        <div>
                            <h2><a href="<?php echo esc_url( get_permalink() ); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
                            <p><a href="<?php echo esc_url( get_permalink() ); ?>" title="<?php the_title(); ?>"><?php the_excerpt(); ?></a></p>
                        </div>
                    </div>
                </article>
            <?php endwhile; ?>
        <?php else: ?>
            <p>Nenhum post enconrado!</p>
        <?php endif; ?>
    </section>

<?php get_footer(); ?>
