<?php
/*
  Template Name: Калькулятор бетонной отмостки
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


                        $perimetr = htmlspecialchars($_POST['perimetrfield']);
                        $shirina = htmlspecialchars($_POST['shirinafield']);
                        $corners = htmlspecialchars($_POST['uglovfield']);
                        $tipotmostki = htmlspecialchars($_POST['tipotmostkifield']);
                        $materialin = htmlspecialchars($_POST['materialfield']);
                        $stoimostotmf = htmlspecialchars($_POST['stoimostotmfield']);










                        $address = "nasha-dachaa@yandex.ru";
                        $sub = 'Заказ отмостки с сайта nasha-dachaa.ru';
                        $mes = "Имя клиента: " . $namec . "\n\nТелефон: " . $telc . "\n\nТип отмостки: " . $tipotmostki . "\n\nПериметр дома: " . $perimetr . " м. \n\nШирина отмостки: " . $shirina . " см.\n\nКоличество внешних углов дома: " . $corners . "\n\nПримерная стоимость работы: " . $stoimostotmf . " руб.\n\n" . $materialin;




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





