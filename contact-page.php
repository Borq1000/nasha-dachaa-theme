<?php
/*
  Template Name:  Contact page
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

    <section class="contact-page-section">
        <div class="container">
            <div class="sec-title">

                <h1><?php the_title(); ?></h1>
            </div>
            <div class="inner-container">
                <div class="row clearfix">

                    <!--Form Column-->
                    <div class="form-column col-md-8 col-sm-12 col-xs-12">
                        <div class="inner-column">

                            <!--Contact Form-->
                            <div class="contact-form">

                                <div class="row clearfix">
                                    <?php echo do_shortcode('[contact-form-7 id="73" title="Контактная форма"]'); ?>
                                </div>

                            </div>
                            <!--End Contact Form-->

                        </div>
                    </div>

                    <!--Info Column-->
                    <div class="info-column col-md-4 col-sm-12 col-xs-12">
                        <div class="inner-column">
                            <div itemscope itemtype="http://schema.org/Organization">
                                <h2 itemprop="name">&laquo;Наша дача&raquo;</h2>
                                <ul class="list-info">
                                    <li><i class="fas fa-globe"></i><span itemprop="address" itemscope itemtype="http://schema.org/PostalAddress"><span itemprop="addressLocality"> Москва</span>, <br><span itemprop="streetAddress">Дорожная ул., 21а</span></span></li>
                                    <li><i class="far fa-envelope"></i> <a href="mailto:nasha-dachaa@yandex.ru" style="color:#fff;" itemprop="email">nasha-dachaa@yandex.ru</a></li>
                                    <li><i class="fas fa-phone"></i> <span itemprop="telephone">+7 (977) 807-59-87</span></li>
                                    <li><i class="fas fa-phone"></i> <span itemprop="telephone">+7 (495) 227-67-27</span></li>
                                </ul>
                                <ul class="social-icon-four">
                                    <li class="follow">Мы в соцсетях: </li>
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                    <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                                    <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                </ul>
								
								<!----------->
								<div class="review-block-qr">
									<div class="text-let-review">
									Оставить отзыв о нашей работе
								</div>
					
					<div class="text-review-qr">
									<img src="/wp-content/uploads/2024/10/qr-nd.png" class="img-responsive">
								</div>
								</div>
								
								<!------------------->
                            </div>
                        </div>
                    </div>

					
                </div>
				
				
            </div>
        </div>
    </section>









    <!--noindex-->
    <?php require_once 'includes/how-we-work.php'; ?>
    <!--/noindex-->


















    <?php get_footer(); ?>



