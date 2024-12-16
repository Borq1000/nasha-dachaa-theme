<?php


get_header();
?>


<section  class="page-sub-header">




    <div class="container">
        <div style="padding: 40px 0 35px;
             background:linear-gradient(to bottom, rgba(245, 246, 252, 0.2), rgba(95, 89, 89, 0.73)),url(<?php header_image(); ?>);
             background-repeat: no-repeat;
             -webkit-background-size: cover;
             background-size: cover;margin-top:10px;">
            <div class="row" >

                <div class="col-12">


                    <h2 class="service-h2-title text-center"><?php the_title(); ?></h2>


                    <div class="meta-block-outer">
                        <noindex>
                            <span class="meta-txt">
                                <?php
                                $reklama = get_post_meta(get_the_ID(), 'reklama', true);

                                echo $reklama;
                                ?>

                            </span>
                        </noindex>
                    </div>



                    <h3 style="display:none"><?php the_ID(); ?></h3>



                </div>
            </div>
        </div> <!-----------inner top----------------->
    </div>
</section>








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








    <?php get_footer(); ?>


