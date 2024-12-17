<?php get_header(); ?>



<section style="padding: 40px 0 35px;
         background: url(<?php header_image(); ?>);
         background-repeat: no-repeat;
         -webkit-background-size: cover;
         background-size: cover;" class="page-sub-header">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div style="color:#fff;font-family: Roboto, sans-serif;" class="page-h1">


                    <?php
                    the_archive_title('<h1>', '</h1>');
                    ?>





                    <h3 style="display:none"><?php the_ID(); ?></h3>

                </div>

            </div>
        </div>
    </div>
</section>

<main>

    <!------------------------------------------------------->

    <section class="details-card">
        <div class="container" style="margin-top:30px;margin-bottom: 50px;">
            <div class="row">
                <p>
                    В этом разделе Вы найдете полезные статьи на теме <?php the_archive_title('', ''); ?>  и о дачном строительстве в целом.
                    В написании большинства статей мы привлекали опытных специалистов сферы благоустроства территории и дачного строительства.
                    Уважаемые посетители сайта, если Вы хотите, чтоб мы освятили подробнее конкретную тему - напишите нам, используя форму обратной связи.

                </p>



                <?php if (have_posts()) { ?>
                    <?php
                    $i = 0;
                    while (have_posts()) : the_post();  // the loop
                        ?>

                        <div class="col-md-4">
                            <div class="card-content">
                                <div class="card-img">
                                    <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">
                                        <img src="<?php the_post_thumbnail_url(); ?>" alt="" class="articles-grid-images">
                                    </a>
                                    <span><h4><?php echo get_the_date('d/m/y'); ?></h4></span>
                                </div>
                                <div class="card-desc">
                                    <h3><?php the_title(); ?></h3>

                                    <a href="<?php the_permalink() ?>" class="btn-card" title="<?php the_title(); ?>">Подробнее</a>
                                </div>
                            </div>
                        </div>

                    <?php endwhile; ?>

                    <?php if (function_exists('wp_corenavi')) wp_corenavi(); ?>

                <?php } else { ?>
                    <h1>Здесь пока нет статей.</h1>

                <?php } ?>

            </div>
        </div>
    </section>

    <!---------------------------------------------------------------->






    <section class="main-text-home">
        <div class="container">


        </div>

    </section>















    <?php get_footer(); ?>