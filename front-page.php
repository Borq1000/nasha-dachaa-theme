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



    <?php require_once 'includes/latest-news-home.php'; ?>


    <?php require_once 'includes/articles-landscaping.php'; ?>
    







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