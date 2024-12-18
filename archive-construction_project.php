<?php get_header(); ?>

  <?php $args = array(
        'post_type' => 'construction_project',
        'posts_per_page' => -1,
        'orderby' => 'date',
        'order' => 'DESC'
    );
    $projects = new WP_Query($args);
    
    ?>

<main>

    <!------------------------------------------------------->

   <section class="details-card">
  <div class="container" style="margin-top:30px;margin-bottom: 50px;">
    <h1>Наши работы</h1>

    <?php $terms = get_terms( array( 'taxonomy' => 'related_services', 'hide_empty' => false ) ); ?>
    <div class="taxonomy-buttons">
        <span><b>Фильтр</b></span><br>
      <?php foreach ($terms as $term) : ?>
        <button class="taxonomy-button" data-term="<?php echo $term->slug; ?>"><?php echo $term->name; ?></button>
      <?php endforeach; ?>
    </div>

    <div class="row" id="projects-container">
      <?php 
      $counter = 0;
      if (have_posts()) : while (have_posts()) : the_post(); 
        $counter++;
        $related_pages = get_the_terms(get_the_ID(), 'related_services'); 
      ?>
        <div class="col-md-4 col-sm-6 related-projects-col" data-term="<?php echo $related_pages[0]->slug; ?>">
          <div class="related-projects-thumbnail">
            <?php $main_photo = get_post_meta(get_the_ID(), 'main_photo', true); ?>
            <div class="project-image-wrapper">
              <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" class="project-image-link">
                <img src="<?php echo !empty($main_photo) ? esc_url($main_photo) : 'https://nasha-dachaa.ru/wp-content/uploads/2023/04/kiparosivik.jpg'; ?>" 
                     class="related-projects-carousel-img" 
                     alt="<?php the_title_attribute(); ?>" />
              </a>
            </div>
            
            <div class="related-projects-caption">
              <h3 class="related-project-carousel-it-title">
                <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                  <?php the_title(); ?>
                </a>
              </h3>
              
              <div class="related-projects-carousel-preview-info">
                <?php
                $completion_time = get_post_meta(get_the_ID(), 'completion_time', true);
                $area = get_post_meta(get_the_ID(), 'area', true);
                
                if (!empty($completion_time)) : ?>
                  <p class="related-projects-time">
                    <i class="fa fa-clock-o"></i>
                    Сроки: <?php echo esc_html($completion_time); ?>
                  </p>
                <?php endif;
                
                if (!empty($area)) : ?>
                  <p class="related-projects-area">
                    <i class="fa fa-expand"></i>
                    Площадь: <?php echo esc_html($area); ?> кв.м.
                  </p>
                <?php endif; ?>
              </div>
              
              <a href="<?php the_permalink(); ?>" class="related-projects-carousel-btn">
                Подробнее
              </a>
            </div>
          </div>
        </div>
        <?php 
        // Добавляем clearfix после каждого третьего элемента для MD
        if($counter % 3 == 0) : ?>
          <div class="clearfix visible-md visible-lg"></div>
        <?php endif; ?>
        <?php 
        // Добавляем clearfix после каждого второго элемента для SM
        if($counter % 2 == 0) : ?>
          <div class="clearfix visible-sm"></div>
        <?php endif; ?>
      <?php endwhile; else : ?>
        <p>Нет проектов для отображения.</p>
      <?php endif; ?>
    </div>
    
    <?php the_posts_pagination(); ?>
  </div>
</section>


    <!---------------------------------------------------------------->






    <section class="main-text-home">
        <div class="container">


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

<script>
jQuery(document).ready(function($) {
    $('.taxonomy-button').on('click', function() {
        var term = $(this).data('term');
        $('.related-projects-col').hide();
        $('.related-projects-col[data-term="' + term + '"]').show();
    });
});
</script>




    <?php get_footer(); ?>