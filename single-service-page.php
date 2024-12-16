<?php
/*
  Template Name:  Single service page
 */

get_header();
?>
<style>
    
   .subheader-section {
    background: url(<?php header_image(); ?>) no-repeat center;
    background-size: cover;
    min-height: 350px;
} 
</style>
<section class="subheader-section">
    <div class="container">
        <div class="row">
            <div class="col-md-7 col-sm-7">
                <div class="subheader-left-block">
                    <?php
                    $reklama = get_post_meta(get_the_ID(), 'reklama', true);
                   $reklama_sidebar = get_post_meta(get_the_ID(), 'reklama_sidebar', true);

                   
                   echo '<span>';
                    echo $reklama;
                    echo '</span>';
                    echo $reklama_sidebar;
                    ?>
                </div>
            </div>
            
            <div class="col-md-5 col-sm-5">
                <div class="subheader-right-block">
                    <div class="subheader-right-block_form-outer">
                    <div class="subheader-right-block__form-wraper">
                        <div class="subheader-right-block__title">Заказать услугу <?php the_title(); ?></div>
                       
                        <?php 
                        
                       
                        echo do_shortcode('[contact-form-7 id="6852" title="Заказ услуги subheader"]');  ?>

                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</section>



<!--<section style="background: #faf9f99e;">
    <div class="container">

        <div class="col-md-5 hidden-xs" style="padding:0px;">
            <div class="image-add-wrapper">
                <img src="<?php header_image(); ?>" class="image-small-detail-banner">
            </div>

        </div>

        <div class="col-md-7 col-xs-12" style="padding: 0px;">
            <div class="block-add-left-wraper">


                <div class="meta-txt">
                    <noindex>
                    <?php
                    $reklama = get_post_meta(get_the_ID(), 'reklama', true);
                   $reklama_sidebar = get_post_meta(get_the_ID(), 'reklama_sidebar', true);

                    echo $reklama;
                    echo $reklama_sidebar;
                    ?>
                    </noindex>
                </div>

            </div>
        </div>



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



    <section style="">
        <div class="container">

        </div>
    </section>




    <h3 style="color:red;display: none;"><?php the_ID(); ?></h3>

    <section class="main-text-home">
        <div class="container" style="padding-top: 20px;">

            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <?php the_content(); ?>
                <?php endwhile; ?>
            <?php endif; ?>

        </div>

    </section>

    <!--noindex-->
    <section>
        <div class="container">
            <p style="font-family: 'Cormorant Garamond', serif;font-size: 2.2em;color:#F4B226;">Официальная гарантия - 2 года</p>
        </div>
    </section>
    <!--/noindex-->
    <!--noindex-->
    <section>
        <div class="container">
            <div class="row">

                <div class="blockquote">
                    <strong style="color:red;background: #eee;padding: 3px 2px 3px 3px;"><i class="fas fa-bell"></i> Обратите внимание!</strong>
                    Если при выполнении землянных работ на Вашем участке, выявится влагонасыщеный, тяжелопроходимый грунт (мусор, камни, бетон и т.д.), то расходы услуг возрастут.
                </div>


                <div class="about-size">
                    <p style="font-style: italic;">

                        <span style="color:red;">∗∗∗ опция</span> - не входит в стоимость, можно добавить для укрепления конструкции.
                    </p>
                </div>


                <div class="diametr-trubi-wraper">
                    <p>

                    </p>
                </div>

            </div>
        </div>
    </section>
    <!--/noindex-->



    <!----------------------------------Проверяем, если заезды--------------------------------------------------->
    <?php if (is_page(243) || is_page(245) || is_page(253) || is_page(249) || is_page(247) || is_page(336)) { ?>

   
        <?php require_once 'includes/dopuslugi/dop-uslugi-zaezd.php'; ?>

    <?php } ?>

    <!--------------------------------------------------------------------------------->


   <?php require_once 'rel-articles.php';   ?>

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

