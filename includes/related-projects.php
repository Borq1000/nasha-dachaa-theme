    <?php 
    
    $related_pages = get_the_terms(get_queried_object_id(), 'related_services');

if ($related_pages && !is_wp_error($related_pages)) {
  $related_page_ids = wp_list_pluck($related_pages, 'term_id');
}
  $args = array(
    'post_type' => 'construction_project',
    'posts_per_page' => 4,
    'orderby' => 'date',
    'order' => 'DESC',
    'tax_query' => array(
      array(
        'taxonomy' => 'related_services',
        'field' => 'term_id',
        'terms' => $related_page_ids
      )
    )
  );

  $projects = new WP_Query($args);
    ?>

<div class="clearfix"></div>
<section class="related-projects-section">

<div class="container">
    <?php if ($projects->have_posts()) {   ?>
    <div class="h2">Примеры наших работ</div>
    <?php  } ?>
	<div class="row">
			<div>
   
            
           <div id="myCarousel" class="carousel slide">
  <div class="carousel-inner related-projects-carousel-inner">
      

    
      
    <?php
    $i = 0;
    while ($projects->have_posts()) :
      $projects->the_post(); ?>
      <?php if ($i % 4 == 0) : ?>
        <div class="item related-projects-carousel-item<?php if ($i == 0) { ?> active<?php } ?>">
          <div class="row">
      <?php endif; ?>
            <div class="col-md-3 related-projects-col">
              <div class="thumbnail related-projects-thumbnail">
                <?php $main_photo = get_post_meta(get_the_ID(), 'main_photo', true); ?>
                <?php if (!empty($main_photo)) { ?>
                  <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                  <img src="<?php echo esc_url($main_photo); ?>" class="related-projects-carousel-img" alt="<?php the_title(); ?>">
                  </a>
                <?php } else { ?>
                  <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                  <img src="https://nasha-dachaa.ru/wp-content/uploads/2023/04/kiparosivik.jpg" class="related-projects-carousel-img" alt="<?php the_title(); ?>">
                  </a>
                  <?php } ?>
                <div class="caption related-projects-caption">
                    <div class="related-project-carousel-it-title"><?php the_title(); ?></div>
                  <?php $completion_time = get_post_meta(get_the_ID(), 'completion_time', true); ?>
                  
                    <div class="related-projects-carousel-preview-info">
                   <?php if (!empty($completion_time)) { ?>
                    <p class="related-projects-time">Сроки: <?php echo esc_html($completion_time); ?> </p>
                  <?php } ?>
                  <?php $area = get_post_meta(get_the_ID(), 'area', true); ?>
                  <?php if (!empty($area)) { ?>
                    <p class="related-projects-area">Площадь: <?php echo esc_html($area); ?> кв.м.</p>
                  <?php } ?>
                    </div>
                    
                    <p><a href="<?php the_permalink(); ?>" class="btn btn-primary related-projects-carousel-btn" role="button">Подробнее</a></p>
                </div>
              </div>        
            </div>
      <?php $i++;
      if ($i % 4 == 0 || $i == $projects->post_count) : ?>
          </div>
        </div>
      <?php endif; ?>
    <?php endwhile; wp_reset_postdata(); ?>
  </div>
<!--  <a class="left carousel-control" href="#myCarousel" data-slide="prev"><i class="fa fa-chevron-left fa-2x"></i></a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next"><i class="fa fa-chevron-right fa-2x"></i></a>-->
<!--  <ol class="carousel-indicators">
    <?php for ($j = 0; $j < ceil($projects->post_count / 4); $j++) { ?>
      <li data-target="#myCarousel" data-slide-to="<?php echo esc_attr($j); ?>" <?php if ($j == 0) { ?>class="active"<?php } ?>></li>
    <?php } ?>
  </ol>-->
</div>

        </div><!-- End Well -->
    </div>
    
    
    <?php if ($projects->have_posts()) {   ?>
    <center style="padding-top:20px!important">
                <a href="/projects/" class="button-71 all-projects-btn">Все проекты</a>
            </center>
    <?php } ?>
</div>

    
</section>

<div class="clearfix"></div>