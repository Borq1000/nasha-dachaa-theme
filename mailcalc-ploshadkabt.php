<?php
/*
  Template Name: Калькулятор бетонной площадки под авто
 */

get_header();
?>
<section style="padding: 40px 0 35px;
         background: url(<?php header_image(); ?>);
         background-repeat: no-repeat;
         -webkit-background-size: cover;
         background-size: cover;height: 200px;" class="page__sub-header">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div style="color:#fff" class="page-h1">
                    <?php the_title(); ?>



                    <noindex>
                        <?php
                        the_meta();
                        ?>
                    </noindex>


                    <h3 style="display:none"><?php the_ID(); ?></h3>

                </div>

            </div>
        </div>
    </div>
</section>
<section class="bread-crumbs">
    <div class="container">
        <div class="row">
            <div class="col-12">

                <?php
                if (function_exists('bcn_display')) {
                    bcn_display();
                }
                ?>

            </div>
        </div>
    </div>

</section>
<main class="m-contacts">
    <section class="map">
        <div class="container">

            <div class="row">









                <!-----------------------------main content block--------------------------------->
                <div class="col-lg-12 col-md-12 col-xl-12">


                    <p class="bg bg-success" style="padding:25px;">
                        Спасибо! Заявка отправлена. Мы свяжемся с вами в ближайшее время.
                    </p>

                    <br>
                    <div class="clearfix"></div>

                    <center>
                        <a href="/" class="btn btn-primary">Перейти на главную</a>
                    </center>



                    <?php
                    $post = (!empty($_POST)) ? true : false;

                    if ($post) {

                        $namec = htmlspecialchars($_POST['client-name']);

                        $telc = htmlspecialchars($_POST['client-phone']);


                        $dlinapl2field = htmlspecialchars($_POST['dlinapl2field']);
                        $shirinapl2field = htmlspecialchars($_POST['shirinapl2field']);
                        $tippl2field = htmlspecialchars($_POST['tippl2field']);
                        $kamenpl2field = htmlspecialchars($_POST['kamenpl2field']);
                        $materialfield = htmlspecialchars($_POST['materialfield']);
                        $stoimostpl2field = htmlspecialchars($_POST['stoimostpl2field']);






                        $address = "nasha-dachaa@yandex.ru";
                        $sub = 'Заказ бетонной площадки под авто на сайте nasha-dachaa.ru';
                        $mes = "Имя клиента: " . $namec . "\n\nТелефон: " . $telc . "\n\nТип исполнения площадки: " . $tippl2field . "\n\nДлина/м.: " . $dlinapl2field . " м. \n\nШирина/м.: " . $shirinapl2field . " м.\n\nУстановка бордюрного камня: " . $kamenpl2field . "\n\nПримерная стоимость работы: " . $stoimostpl2field . " руб.\n\n" . $materialfield;




                        $send = mail($address, $sub, $mes, "Content-type:text/plain; charset = UTF-8\r\nReply-To:,,,\r\nFrom: <contact>");
                    }
                    ?>






                </div>
            </div>
            <!--------------------------------------------------------------->

        </div>
    </section>
    <!------------------------contact section---------------------------------------->
    <?php //require_once 'contact-us-section.php';   ?>

    <!-------------------------------------------------------------->

</main>


<?php get_footer(); ?>







