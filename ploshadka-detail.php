<?php
/*
  Template Name: Площадка детальная страница
 */

get_header();
?>

<style>
    .detail-page-top-banner{
        margin-top:10px;
        padding: 0px;
        background:linear-gradient( rgba(230, 215, 215, 0.26), #fefffe8c, #ffffff ), url(<?php header_image(); ?>) no-repeat;

        background-size: cover;
        background-position:center;


    }
</style>


<!--<section style="padding: 40px 0 35px;
    background: url(<?php header_image(); ?>);
    background-repeat: no-repeat;
    -webkit-background-size: cover;
    background-size: cover;" class="page-sub-header">
                <div class="container">
                        <div class="row">
                                <div class="col-12">


                                    <h2 class="service-h2-title text-center"><?php the_title(); ?></h2>
                                    <div style="background:#8080809c;height:230px;width:750px;;margin: 0 auto;">
                                        <hr class="divider">
                                    </div>

                                           <div class="meta-block-outer">
                                            <noindex>
                                                <span class="meta-txt"> <?php
the_meta();
?>
                                                </span>
                                            </noindex>
                                        </div>

                                     <div>
                                                <a href="#zaezd-calculator" class="button btn-header" style="margin-left:0;font-size: 13px; text-transform: uppercase;background: #17BBFB;">Расчитать стоимость заезда на участок</a>
                                           </div>


                            <h3 style="display:none"><?php the_ID(); ?></h3>



                                </div>
                </div>
        </section>  -->


<div class="container detail-page-top-banner">

    <div class="col-md-7" style="height:180px;">
        <img src="https://nasha-dachaa.ru/wp-content/uploads/2021/11/vzd2.png" class="image-small-detail-banner">
    </div>

    <div class="col-md-5" style="padding: 0px;">
        <div style="" class="top-ad-block">
            <h1 class="" style="color:#464b52;font-size: 40px;font-weight: bold;font-family: Roboto;margin-left: 30px;"><?php the_title(); ?></h1>
            <p style="font-size: 20px;color:#464b52;margin-left: 20px;display: inline-block;margin-right: 20px;">
                Обустроим въезд / заезд на участок за 1 день под ключ в Москве
                и области по самой низкой цене! От 29 900 руб. + 10% скидка до 29 Марта.
            </p>
        </div>
    </div>



</div>




<section class="bread-crumbs">
    <div class="container">
        <div class="row">

            <ul id="breadcrumbs-one">
                <?php
                if (function_exists('bcn_display')) {
                    bcn_display();
                }
                ?>
            </ul>

        </div>
    </div>







</section>


<main>



    <section style="">
        <div class="container">

        </div>
    </section>






    <section class="main-text-home">
        <div class="container">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <?php the_content(); ?>
                <?php endwhile; ?>
            <?php endif; ?>

        </div>

    </section>



    <section>
        <div class="container">
            <div class="row">
                <div class="blockquote">
                    <strong style="color:red;">Внимание!</strong> В случае проведения земляных работ обнаружен труднопроходимый грунт с содержанием камней
                    или мусора более 20% в единице объема или влагонасыщенный то по этой причине существенно увеличатся стоимость услуг.
                </div>
            </div>
        </div>
    </section>



    <?php require_once 'includes/see-also.php'; ?>


    <!--noindex-->
    <?php require_once 'includes/how-we-work.php'; ?>
    <!--/noindex-->



    <?php require_once 'includes/slider-portfolio.php'; ?>











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

