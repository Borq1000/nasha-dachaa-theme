<section style="margin-top:50px;" class="relative-articles-section descriotion">
        <div class="container">



            <div style="background: none !important" class="row">

                <div class="header-h2 header-h2-left" style="margin-bottom: 20px;padding-left: 12px;">
                    <div class="h3">Статьи на теме благоустройство территории</div>
                </div>

                <?php $latest_post = get_posts('category=3&orderby=date&numberposts=10&numberposts='); // Defaults args fetch posts starting with the most recent ?>
                <?php foreach ($latest_post as $post) : setup_postdata($post); ?>

                    <div class="col-md-4 col-sm-6">
                        <div class="inner-fp-ablock">
                            <a href="<?php the_permalink() ?>" alt="<?php the_title(); ?>">
                                <img src="<?php the_post_thumbnail_url(); ?>" class="img-responsive rel-artic-img" alt="<?php the_title('', '', 0); ?>">
                            </a>


                            <h3 class="text-center rel-artic-title">
                                <a href="<?php the_permalink() ?>" alt="<?php the_title(); ?>">
                                    <?php
                                    $tit = the_title('', '', 0);
                                    echo mb_strimwidth($tit, 0, 60, "...");
                                    ?>
                                </a>
                            </h3>

                        </div>
                    </div>

                <?php endforeach; ?>
                <?php wp_reset_query(); ?>

            </div>

        </div>
    </section>