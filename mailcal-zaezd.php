<?php
/*
  Template Name: Калькулятор заезда на участок
 */

header('Content-Type: text/plain; charset=utf-8');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST, GET, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type');

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


                        $dlinaZd = htmlspecialchars($_POST['dlinazdfield']);
                        $shirinaZd = htmlspecialchars($_POST['shirinazdfield']);
                        $quarter = htmlspecialchars($_POST['quartermfield']);
                        $materialZd = htmlspecialchars($_POST['materialfield']);
                        $pipeZd = htmlspecialchars($_POST['tiptrubafield']);
                        $ogolovkiZd = htmlspecialchars($_POST['ogolovkifield']);
                        $stoimosZd = htmlspecialchars($_POST['stoimostzdfield']);


                        $address = "nasha-dachaa@yandex.ru";
                        $sub = 'Заказ заезда на участок с сайта «Наша дача»';

                        $mes = "<html><body>";
                        $mes .= '<img src="https://nasha-dachaa.ru/wp-content/uploads/2021/11/nd-logo-new.png" width="200" alt="Строй Участок" />';
                        $mes .= '<table rules="all" style="border-color: #666;" cellpadding="10">';

                        $mes .= "<tr style='background: #eee;'><td><strong>Имя клиента:</strong> </td><td>" . strip_tags($namec) . "</td></tr>";
                        $mes .= "<tr style='background: #eee;'><td><strong>Телефон:</strong> </td><td>" . strip_tags($telc) . "</td></tr>";
                        $mes .= "<tr style='background: #eee;'><td><strong>Длина заезда:</strong> </td><td>" . strip_tags($dlinaZd) . "м.</td></tr>";
                        $mes .= "<tr style='background: #eee;'><td><strong>Ширина заезда:</strong> </td><td>" . strip_tags($shirinaZd) . "м.</td></tr>";
                        $mes .= "<tr style='background: #eee;'><td><strong>Квадратные метры:</strong> </td><td>" . strip_tags($quarter) . "&#13217;</td></tr>";
                        $mes .= "<tr style='background: #eee;'><td><strong>Используемый материал:</strong> </td><td>" . strip_tags($materialZd) . "</td></tr>";
                        $mes .= "<tr style='background: #eee;'><td><strong>Тип трубы:</strong> </td><td>" . strip_tags($pipeZd) . "</td></tr>";
                        $mes .= "<tr style='background: #eee;'><td><strong>Оголовки:</strong> </td><td>" . strip_tags($ogolovkiZd) . "</td></tr>";
                        $mes .= "<tr style='background: #eee;'><td><strong>Примерная стоимость:</strong> </td><td>" . strip_tags($stoimosZd) . " руб.</td></tr>";

                        $mes .= "</table>";

                        $mes .= "</html></body>";

                        $send = mail($address, $sub, $mes, "Content-type:text/html; charset = UTF-8\r\nReply-To:,,,\r\nFrom: <contact>");
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







