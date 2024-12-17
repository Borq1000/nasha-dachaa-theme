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
            <header class="header">
                <section class="promotion">
                    <div class="container">
                        <div class="row" >
                            <div class="col-md-6" style="padding: 0px;margin:0px;">
                                <p class="promotion-text-top-left">
                                    Регион: Московская область 

                                </p>

                            </div>
                            <div class="col-md-6" style="padding: 0px;margin:0px;">
                                <ul class="nav justify-content-end top-nav pull-right" style="padding: 0px;margin:0px;">
                                    <li class="nav-item">
                                        <a class="nav-link" href="/o-nas/"> О нас</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="/projects/" title="Наши работы"> Примеры работ</a>
                                    </li>
<!--                                    <li class="nav-item">
                                        <a class="nav-link" href="/otzyvy/" title="Отзывы"> Отзывы</a>
                                    </li>-->
                                   
                                    <li class="nav-item">
                                        <a class="nav-link" href="/articles/"> Полезные статьи</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="/kontakty/"> Контакты</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="https://wa.me/79778075987" class="whatsapp-link top-nav-whatsapp">
                                            <span class="whatsapp-text">WhatsApp</span>
                                            <i class="whatsapp-icon"></i>
                                        </a>
                                    </li>
                                    
                                </ul>
                            </div>
                        </div>

                    </div>
                </section>


                <section class="header-info">
                    <div class="container">
                        <div class="row" id="centered-on-mobile" itemscope itemtype="https://schema.org/Organization">
                            <div class="col-lg-7 col-md-6 col-sm-6 col-xs-6">
                                <div class="header-info__text clearfix">
                                    <a class="header-info__logo" href="/" >
                                        <img src="/wp-content/uploads/2021/11/nd-logo-new.png" style="width:250px;" class="logo-img">
                                    </a>

                                    <div class="header-info__logo-title">
                                        Благоустройство участка в Москве<br> и Подмосковье
                                        <br>
                                        <span class="header-working-time">Ежедневно с 9.00 до 20.00</span>
                                    </div>
                                </div>
                                <div class="hidden" itemprop="address" itemscope itemtype="https://schema.org/PostalAddress">
                                    <span itemprop="addressCountry">Россия</span>
                                    <span itemprop="addressLocality">Москва</span>
                                    <span itemprop="streetAddress">г. Москва, ул. Коктебельская, 11</span>
                                </div>













                            </div>
                            <div class="col-lg-5 col-md-6 col-sm-6 col-xs-6">
                                <div class="header-info__contacts clearfix">
                                    <a class="btn button callback-btn header-callback-btn sg-popup-id-4027" href="">
                                        Заказать звонок</a>









                                    <div class="header-contact-info-wraper">




                                        <a class="header-info__phone link" href="tel:+7 (977) 807-59-87">
                                            <span itemprop="telephone" class="header-phone-1">+7 (977) 807-59-87</span>
                                        </a>
                                        <br>
                                        <a class="header-info__phone link" href="tel:+74952276727" style="margin-top:0px;">
                                            <span itemprop="telephone" class="header-phone-1">+7 (495) 227-67-27</span>
                                        </a>
                                        <br>
                                        
                                        <a href="https://wa.me/79778075987" class="whatsapp-link">
                                <span class="whatsapp-text">WhatsApp</span> <i class="whatsapp-icon"></i>
                            </a>


                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </section>

                <div id="main-menu-wraper" style="margin-top:20px;">
                    <!---------------------------main menu start------------------------------------------>

                    <?php
                    wp_nav_menu(array(
                        'menu' => 'Primary Menu',
                        'theme_location' => 'primary',
                        'depth' => 2,
                        'container' => '',
                        'container_class' => '',
                        'container_id' => '',
                        'menu_class' => 'nav navbar-nav navbar-left text-uppercase',
                        'fallback_cb' => 'wp_bootstrap_navwalker::fallback',
                        'walker' => new wp_bootstrap_navwalker())
                    );
                    ?>

                    <!-------------------main menu end----------------------------------------------------->
                </div>
            </header>
