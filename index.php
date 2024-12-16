<?php

get_header(); ?>



<main>

    
    <!------------------------------------------------------->

    <section class="details-card">
        <div class="container" style="margin-top:30px;margin-bottom: 50px;">
            <h1>Полезные статьи на теме благоустройство и озеленение участков</h1>
            <div class="row">
                <p>
                    В этом разделе Вы найдете полезные статьи по благоустройству дачного участка, ландашафтному дизайну и о дачном строительстве в целом.
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
                                    <h3>
                                        <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">
                                            <?php the_title(); ?>
                                        </a>
                                    </h3>

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









<section class="section-queries">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <div class="offers-queries-wraper">
                    <div class="h3" style="color:#fff">Высокое качество работ</div>
                    <?php require_once 'includes/predlojeniya.php';  ?>
                </div>
            </div>
            
            <div class="col-md-5">
                <div class="queries-wraper">
                    <div class="h3" style="color:#fff">Популярные запросы</div>
                    
                    <?php require_once 'includes/zaprosi.php';  ?>
                </div>
            </div>
        </div>
    </div>
</section>





    <?php get_footer(); ?>