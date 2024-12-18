<?php
/*
  Template Name: Service page Заезды
 */

get_header();
?>

<style>
    
   .subheader-section {
    background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url(<?php header_image(); ?>) no-repeat center;
    background-size: cover;
    min-height: 350px;
} 
</style>

<section class="subheader-section">
    <div class="container">
        <div class="row">
            <div class="col-md-7 col-sm-7">
                <div class="subheader-left-block">
                    <h1 class="service-h2-title"><?php the_title(); ?></h1>
                    <?php
                    $reklama = get_post_meta(get_the_ID(), 'reklama', true);
                    $reklama_sidebar = get_post_meta(get_the_ID(), 'reklama_sidebar', true);
                    
                    if ($reklama) {
                        echo '<span class="service-description">';
                        echo $reklama;
                        echo '</span>';
                    }
                    ?>
                </div>
            </div>
            
            <div class="col-md-5 col-sm-5">
                <div class="subheader-right-block">
                    <div class="subheader-right-block_form-outer">
                        <div class="subheader-right-block__form-wraper">
                            <div class="subheader-right-block__title">
                                <i class="fas fa-clipboard-list"></i>
                                Заказать услугу <?php the_title(); ?>
                            </div>
                            <?php echo do_shortcode('[contact-form-7 id="6852" title="Заказ услуги subheader"]'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!--<section  class="page-sub-header">

    <div class="container">
        <div style="padding: 40px 0 35px;
             background:linear-gradient(to bottom, rgba(245, 246, 252, 0.2), rgba(95, 89, 89, 0.73)),url(<?php header_image(); ?>);
             background-repeat: no-repeat;
             -webkit-background-size: cover;
             background-size: cover;">
            <div class="row row-sub-header" >

                <div class="col-12">


                    <h2 class="service-h2-title text-center"><?php the_title(); ?></h2>


                    <div class="meta-block-outer">

                        <div class="meta-txt">
                           noindex
                    <?php
                    $reklama = get_post_meta(get_the_ID(), 'reklama', true);
                   $reklama_sidebar = get_post_meta(get_the_ID(), 'reklama_sidebar', true);

                    echo $reklama;
                    echo $reklama_sidebar;
                    ?>
                    /noindex

                        </div>

                    </div>



                    <h3 style="display:none;"><?php the_ID(); ?></h3>



                </div>
            </div>
        </div> ---------inner top---------------
    </div>
</section>-->


<section class="bread-crumbs">
    <div class="container" style="padding-left:10px;padding-right:10px;">
        <div class="row" style="padding-left:0px;padding-right: 0px;margin-left: 4px;margin-right: 4px;">

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









    <section class="main-text-home">
        <div class="container">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <?php the_content(); ?>
                <?php endwhile; ?>
            <?php endif; ?>

        </div>
        <?php the_tags(); ?>
    </section>

    <!--noindex-->
    <section>
        <div class="container">
            <p style="font-family: 'Cormorant Garamond', serif;font-size: 2.2em;color:#F4B226;">Гарантия на все виды работ - 12 месяцев</p>


            <div class="about-size">
                <p style="font-style: italic;">

                    <span style="color:red;">∗∗∗ опция</span> - не входит в стоимость, можно добавить для укрепления конструкции.
                </p>
            </div>

        </div>


    </section>


    <?php
   //require_once 'calculators/calc-zaezd-compact.php';
    ?>




    <?php require_once 'rel-articles.php';   ?>




<?php require_once 'includes/related-projects.php';  ?>

    <section style="">
        <div class="container">
            <div class="measuring-wraper">
                <div class="row">
                    <div class="col-md-4">
                        <div class="img-measuring-wraper">
                            <img src="/wp-content/uploads/2021/11/measuring-image.jpg" alt="Выезд замерщика бесплатно" class="img-responsive img-measure">
                        </div>
                    </div>
                    <div class="col-md-8" style="padding-left:0px;">
                        <div class="measuring-text">
                            <h4 class="measuring-title">Выезд замерщика бесплатно</h4>
                            <h5 class="measuring-below-text">при условие заключения договора </h5>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/noindex-->




    <div class="clearfix"></div>

    <!--noindex-->
    <?php require_once 'includes/how-we-work.php'; ?>
    <!--/noindex-->





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



