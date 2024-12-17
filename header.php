<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
        <title><?php wp_title('|', true, 'right'); ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Lobster+Two" rel="stylesheet">
        <link rel="shortcut icon" href="/wp-content/uploads/2022/03/favicon.png" type="image/png">


        <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url') ?>/css/bootstrap.min.css">

        <!--        <link rel="preconnect" href="https://fonts.googleapis.com">
                <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
                <link href="https://fonts.googleapis.com/css2?family=Yeseva+One&display=swap" rel="stylesheet">
                <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@1,700&display=swap" rel="stylesheet">
                <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600&display=swap" rel="stylesheet">-->


        <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url') ?>/css/main.min.css"/>
        <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/style.css?v=<?php echo time();  ?>">
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url') ?>/css/media.css?v=<?php echo time();  ?>"/>
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url') ?>/css/buttons.css"/>
        <script type="text/javascript" src="<?php bloginfo('template_url') ?>/js/jquery-3.2.1.min.js"></script>


        <!-----------------Calculators files----------------------->
        <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/css/calculator.css" type="text/css">
        <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/css/calc-image-checks.css" type="text/css">
        <script src="<?php bloginfo('template_url') ?>/js/calculator.js"></script>
        <script src="<?php bloginfo('template_url') ?>/js/calculator-zaezd.js"></script>


        

        <script src="https://kit.fontawesome.com/515fbe8325.js" crossorigin="anonymous"></script>

        <meta name="google-site-verification" content="FZftcSz8HJfwuJ5m9pPc56CEKLHA9USPKhbrVdxUWNI" />
        <meta name="yandex-verification" content="7e7d6e012fab8126" />
        <meta name="google-site-verification" content="ltouUSiDxjNbn176NOwzLu2cbpH-1f9ZmKccMhXo8bQ" />
        <meta name="zen-verification" content="AUZbKzFSG0oPHtPxi8XE7WSEZy4l0RJvohTtAgM0Eil71Hck1j1wSo4l0JPm77vl" />
        
     <script>
    jQuery(document).ready(function($) {
        $('.js-ag-accordeon_title').on('click', function() {
            $(this).next('.js-ag-accordeon_info').slideToggle(200, function () {
      if ($(this).is(":visible")) {
        $(this).prev(".js-ag-accordeon_title").addClass("js-ag-show");
      } else {
        $(this).prev(".js-ag-accordeon_title").removeClass("js-ag-show");
      }
    });
        });
    });
</script>





        
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
        <div class="main" id="main">
            <section class="promotion">
                <div class="container">
                    <div class="promotion-content">
                        <div class="promotion-region">
                            <i class="fas fa-map-marker-alt"></i>
                            <span>Регион:</span>
                            <strong>Московская область</strong>
                        </div>
                        <ul class="nav justify-content-end top-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="/o-nas/">О нас</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/projects/" title="Наши работы">Примеры работ</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/articles/">Полезные статьи</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/kontakty/">Контакты</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </section>

            <header class="header">
                <div class="container">
                    <div class="header-content">
                        <!-- 1. Логотип -->
                        <div class="header-logo">
                            <a href="/">
                                <img src="https://nasha-dachaa.ru/wp-content/uploads/2021/11/nd-logo-new.png" alt="Наша Дача">
                            </a>
                        </div>

                        <!-- 2. Информационный блок -->
                        <div class="header-info">
                            <div class="header-title">Благоустройство участка в Москве<br>и Подмосковье</div>
                            <div class="header-schedule">
                                <i class="far fa-clock icon-circle"></i>
                                Ежедневно с 9.00 до 20.00
                            </div>
                        </div>

                        <!-- 3. Блок с телефонами -->
                        <div class="header-phones">
                            <a href="tel:+79778075987" class="phone-link">
                                <i class="fas fa-phone-alt icon-circle"></i>
                                <span>+7 (977) 807-59-87</span>
                            </a>
                            <a href="tel:+74952276727" class="phone-link">
                                <i class="fas fa-phone-alt icon-circle"></i>
                                <span>+7 (495) 227-67-27</span>
                            </a>
                        </div>

                        <!-- 4. Блок с кнопками -->
                        <div class="header-buttons">
                            <a href="" class="callback-btn sg-popup-id-4027">
                                <i class="fas fa-headset"></i>
                                Заказать звонок
                            </a>
                            <a href="https://wa.me/79778075987" class="whatsapp-btn">
                                <div class="whatsapp-text">
                                    <span>Написать</span>
                                    <span>на WhatsApp</span>
                                </div>
                                <img src="/wp-content/uploads/2024/12/wsp.png" alt="WhatsApp">
                            </a>
                        </div>
                    </div>
                </div>

                <div id="main-menu-wraper" style="margin-top:20px;">
                    <?php wp_nav_menu(array(
                        'menu' => 'Primary Menu',
                        'theme_location' => 'primary',
                        'depth' => 2,
                        'container' => '',
                        'container_class' => '',
                        'container_id' => '',
                        'menu_class' => 'nav navbar-nav navbar-left text-uppercase',
                        'fallback_cb' => 'wp_bootstrap_navwalker::fallback',
                        'walker' => new wp_bootstrap_navwalker())
                    ); ?>
                </div>
            </header>
        </div>
