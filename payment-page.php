<?php 
/*
Template Name: Payment page
*/

get_header();  ?>
			
          
                    
<main>

    
    
    <section style="">
        <div class="container">
            
        </div>
    </section>    
    
    
    
    
   
	
	<section class="main-text-home">
	<div class="container">
            <h1 class="text-center">Оплата</h1>
		<?php if ( have_posts() ) :  while ( have_posts() ) : the_post(); ?>
                       <?php the_content(); ?>
                    <?php endwhile; ?>
                    <?php endif; ?>
            <div class="payment-text">
                Пожалуйста, в поле «Описание заказа» укажите местоположение объекта. Электронный чек будет отправлен на указанную вами электронную почту.
            </div>
            
            <?php require_once 'includes/payment.php';  ?>
		
	</div>
	
</section>

<?php get_footer();  ?>	

