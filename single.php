<?php get_header(); ?>
    <?php if (have_posts()): ?>
        <?php while (have_posts()): ?>
            <?php the_post(); ?>

            <?php $categories = get_categories(); ?>

            <?php if (!empty($categories)): ?>
                <div class="categories">
                    <span>Categorias:</span>
                    <ul>
                        <?php foreach($categories as $category): ?>
                        <li><a href="<?php echo get_category_link($category->cat_ID); ?>" title="<?php echo $category->cat_name?>"><?php echo $category->cat_name?></a></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            <?php endif; ?>

            <section class="content content-header">
                <h1><?php the_title(); ?></h1>

                <h2><?php echo get_the_excerpt();?></h2>

                <span class="author">
                    por <a href="" title="<?php the_author(); ?>"><?php the_author(); ?></a>
                    <time datetime="<?php echo get_the_date('Y-m-d'); ?>">
                        <?php
                            echo human_time_diff(get_the_time('U'), current_time('timestamp')) . ' atrás';
                        ?>
                    </time>
                </span>
            </section>

            <div class="post-featured-image">
                <?php if (has_post_thumbnail()): ?>
                <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'large') ?>" alt="<?php the_title(); ?>">
                <?php else: ?>
                    <img src="https://picsum.photos/2200/1125" alt="<?php the_title(); ?>">
                <?php endif; ?>
            </div>

            <section class="content content-post">
                <?php the_content(); ?>
            </section>

            <?php $tags = get_the_tags(); ?>

            <?php if (!empty($tags)): ?>
                <div class="tags">
                    <span>Tags:</span>
                    <ul>
                        <?php foreach($tags as $tag): ?>
                        <li><a href="<?php echo get_tag_link($tag->term_id); ?>" title="<?php echo $tag->name?>"><?php echo $tag->name?></a></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            <?php endif; ?>

            <?php if ( comments_open() || get_comments_number() ) : ?>
                <?php comments_template(); ?>
            <?php endif; ?>


        <?php endwhile; ?>
    <?php else: ?>
        <p>Nenhum registro econtrado!</p>
    <?php endif;?>
<?php get_footer(); ?>
