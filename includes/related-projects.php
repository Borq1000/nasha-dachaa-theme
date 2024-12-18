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

<section class="related-projects-section">
  <div class="container">
    <?php if ($projects->have_posts()) : ?>
      <h2 class="h2">Примеры наших работ</h2>
      
      <div class="row">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner related-projects-carousel-inner">
            <?php
            $i = 0;
            while ($projects->have_posts()) : $projects->the_post();
              if ($i % 4 == 0) : ?>
                <div class="item related-projects-carousel-item<?php echo ($i == 0) ? ' active' : ''; ?>">
                  <div class="row">
              <?php endif; ?>
                
                <div class="col-md-3 col-sm-6 related-projects-col">
                  <div class="thumbnail related-projects-thumbnail">
                    <?php 
                    $main_photo = get_post_meta(get_the_ID(), 'main_photo', true);
                    $image_url = !empty($main_photo) ? esc_url($main_photo) : 'https://nasha-dachaa.ru/wp-content/uploads/2023/04/kiparosivik.jpg';
                    ?>
                    <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" class="project-image-link">
                      <img src="<?php echo $image_url; ?>" 
                           class="related-projects-carousel-img" 
                           alt="<?php the_title_attribute(); ?>" />
                    </a>
                    
                    <div class="caption related-projects-caption">
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
                      
                      <a href="<?php the_permalink(); ?>" class="btn related-projects-carousel-btn">
                        Подробнее
                      </a>
                    </div>
                  </div>
                </div>
                
              <?php
              $i++;
              if ($i % 4 == 0 || $i == $projects->post_count) : ?>
                  </div>
                </div>
              <?php endif;
            endwhile;
            wp_reset_postdata();
            ?>
          </div>
          
          <?php if ($projects->post_count > 4) : ?>
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
              <i class="fa fa-chevron-left"></i>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
              <i class="fa fa-chevron-right"></i>
            </a>
          <?php endif; ?>
        </div>
      </div>
      
      <div class="text-center">
        <a href="/projects/" class="button-71 all-projects-btn">
          Все проекты <i class="fa fa-arrow-right"></i>
        </a>
      </div>
    <?php endif; ?>
  </div>
</section>