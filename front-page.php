<?php get_header(); ?>

<?php require_once 'includes/top-main-area.php'; ?>



<?php require_once 'includes/top-how.php'; ?>

<main>



    <section style="">
        <div class="container">

            <h1>Благоустройство участка: все этапы от проектирования до ландшафтных работ</h1>

            <div class="row paragraph-and-img" style="margin-bottom: 40px;">
                <div class="col-md-4">
                    <div><img class="img-responsive" src="/wp-content/uploads/2022/01/balgoustroystvo-uchastka.jpg" alt="Благоустройство участка"></div>
                </div>

                <div class="col-md-8">
                    <p>Благоустройство участка, проведение земляных работ – важный этап при обустройстве придомовых территорий, пожалуй – самый тяжёлый и ответственный. В зависимости от назначения земельного надела, профессионалы проводят другие не менее ответственные манипуляции: вспашка плодородного слоя, выравнивание рельефа (возможно создание искусственных элементов, таких как террасы), полная очистка земли, благоустройство участка с укладкой рулонных или посевных газонов, создание парковки под авто, планирование и обустройство дорожек.</p>
                </div>

            </div>
            



            <?php require_once 'includes/services.php'; ?>
        </div>
    </section>


    <?php require_once 'includes/detailed-services.php'; ?>







    <?php require_once 'includes/our-achievements.php'; ?>

    <section class="main-text-home">
        <div class="container">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <?php the_content(); ?>
                <?php endwhile; ?>
            <?php endif; ?>

        </div>

    </section>



    <section class="descriotion">
        <div class="container">

            
                <div class="h3">Последние статьи</div>
            

            <!-----------------------Latest articles block---------------------------------------->

            <div style="background: none !important" class="row">

                <?php $latest_post = get_posts('numberposts=3'); ?>
                <?php foreach ($latest_post as $post) : setup_postdata($post); ?>
                    <div class="col-md-4 col-xs-12">
                        <div class="inner-fp-ablock">
                            <a href="<?php the_permalink() ?>" alt="<?php the_title(); ?>">
                                <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" style="height:260px;" class="img-responsive rel-artic-img">
                            </a>

                            <h3 class="text-center rel-artic-title">
                                <a href="<?php the_permalink() ?>" alt="<?php the_title(); ?>" class="atitle-front-article">
                                    <?php
                                    $title1 = the_title('', '', 0);
                                    echo mb_strimwidth($title1, 0, 70, "...");
                                    ?>
                                </a>
                            </h3>

                        </div>
                    </div>

                <?php endforeach; ?>
                <?php wp_reset_query(); ?>
            </div>
            <!-------------------------------------------------------------------------->
            <center style="padding-top:20px!important">
                <a href="/articles/" id="all-articles-btn" class="button-71">Посмотреть все статьи</a>
            </center>
        </div>
    </section>



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







    <section class="want-to-build want-to-build--mainpage">
        <div class="container text-center"><span class="txt-home-consultation">Нужна консультация специалиста?</span>  <a class="button-71 sg-popup-id-4027" href="">Свяжитесь с нами!</a></div>
    </section>

    <?php require_once 'includes/how-we-work.php'; ?>








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