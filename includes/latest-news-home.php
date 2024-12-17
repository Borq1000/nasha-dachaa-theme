<section class="latest-articles">
    <div class="container">
        <div class="h3">Последние статьи</div>
        
        <div class="row latest-articles-grid">
            <?php $latest_post = get_posts('numberposts=3'); ?>
            <?php foreach ($latest_post as $post) : setup_postdata($post); ?>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <article class="article-card">
                        <div class="article-image">
                            <a href="<?php the_permalink() ?>" class="image-link">
                                <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" class="img-responsive">
                            </a>
                            <div class="article-date">
                                <i class="far fa-calendar-alt"></i>
                                <?php echo get_the_date('d.m.Y'); ?>
                            </div>
                        </div>
                        
                        <div class="article-content">
                            <h3 class="article-title">
                                <a href="<?php the_permalink() ?>">
                                    <?php
                                    $title = get_the_title();
                                    echo mb_strimwidth($title, 0, 70, "...");
                                    ?>
                                </a>
                            </h3>
                            <div class="article-excerpt">
                                <?php echo mb_strimwidth(get_the_excerpt(), 0, 120, '...'); ?>
                            </div>
                            <a href="<?php the_permalink() ?>" class="read-more">
                                Читать далее
                                <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </article>
                </div>
            <?php endforeach; ?>
            <?php wp_reset_query(); ?>
        </div>

        <div class="text-center view-all-wrapper">
            <a href="/articles/" class="view-all-button">
                Все статьи
                <i class="fas fa-chevron-right"></i>
            </a>
        </div>
    </div>
</section>