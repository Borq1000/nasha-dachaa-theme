<?php 
/*
Template Name: Reviews page
*/

get_header();  ?>
			

           
                    
<main>


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

