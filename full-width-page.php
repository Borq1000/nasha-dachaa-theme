<?php 
/*
Template Name: Full width page
*/

get_header();  ?>
			

<section  class="page-sub-header">

    <div class="container">
        <div style="padding: 40px 0 35px;
             background:linear-gradient(to bottom, rgba(245, 246, 252, 0.2), rgba(95, 89, 89, 0.73)),url(<?php header_image(); ?>);
             background-repeat: no-repeat;
             -webkit-background-size: cover;
             background-size: cover;">
            <div class="row row-sub-header" >

                <div class="col-12">


                    <h2 class="service-h2-title text-center"><?php the_title(); ?></h2>


                    <div class="meta-block-outer">

                        <div class="meta-txt">
                           <!--noindex-->
                    <?php
                    $reklama = get_post_meta(get_the_ID(), 'reklama', true);
                   $reklama_sidebar = get_post_meta(get_the_ID(), 'reklama_sidebar', true);

                    echo $reklama;
                    echo $reklama_sidebar;
                    ?>
                    <!--/noindex-->

                        </div>

                    </div>



                    <h3 style="display:none;"><?php the_ID(); ?></h3>



                </div>
            </div>
        </div> <!-----------inner top----------------->
    </div>
</section>             
                    
<main>

    
    
    <section style="">
        <div class="container">
            
        </div>
    </section>    
    
    
    
    
   
	
	<section class="main-text-home">
	<div class="container">
		<?php if ( have_posts() ) :  while ( have_posts() ) : the_post(); ?>
                       <?php the_content(); ?>
                    <?php endwhile; ?>
                    <?php endif; ?>	
		
	</div>
	
</section>




	
    

    
    
    
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


	

<?php get_footer();  ?>	

