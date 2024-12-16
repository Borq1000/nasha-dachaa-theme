<?php
/*
  Template Name: Common page
 */

get_header();
?>



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

    </section>



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




    <div class="clearfix"></div>
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

