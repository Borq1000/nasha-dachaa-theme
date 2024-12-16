<?php
/*
  Template Name: Заезд детальная страница
 */

get_header();
?>





<section>
    <div class="container">

        <div class="col-md-4" style="padding:0px;">
            <div class="image-add-wrapper">
                <img src="<?php header_image(); ?>" class="image-small-detail-banner">
            </div>

        </div>

        <div class="col-md-8" style="padding: 0px;">
            <div class="block-add-left-wraper">


                <div class="meta-txt">

                    <?php
                    $reklama = get_post_meta(get_the_ID(), 'reklama', true);
                    $reklama_sidebar = get_post_meta(get_the_ID(), 'reklama_sidebar', true);

                    echo $reklama;
                    echo $reklama_sidebar;
                    ?>
                </div>
                <a href="" class="button-73" style="margin-left:40px;">Расчитать стоимость</a>     <img src="/wp-content/uploads/2021/11/KACHESTVO.png" class="pull-right" style="width:130px;position: relative;top:-30px;">
            </div>
        </div>



    </div>
</section>




<section class="bread-crumbs">
    <div class="container" style="padding-left:10px;padding-right:10px;">
        <div class="row" style="padding-left:0px;padding-right: 0px;">

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


    <?php require_once 'includes/how-we-work.php'; ?>



    <?php require_once 'includes/slider-portfolio.php'; ?>















    <?php get_footer(); ?>

