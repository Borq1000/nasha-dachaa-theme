 <section class="related-articles-section-on-service">
        <div class="container">
            
         
            
 <?php
// Получаем термины таксономии для текущей страницы
$terms = wp_get_post_terms(get_the_ID(), 'related_services');

if ($terms && !is_wp_error($terms)) {
    $term_ids = wp_list_pluck($terms, 'term_id');

    // Запрос записей, связанных с текущей страницей
    $related_posts = new WP_Query(array(
        'post_type' => 'post',
        'tax_query' => array(
            array(
                'taxonomy' => 'related_services',
                'field' => 'term_id',
                'terms' => $term_ids,
            ),
        ),
        'posts_per_page' => 5, // Количество записей для отображения
        'post__not_in' => array(get_the_ID()), // Исключаем текущую страницу из списка
    ));

    // Выводим записи в цикле
    if ($related_posts->have_posts()) {
        echo '<div class="h2">Материалы по теме</div>';
        while ($related_posts->have_posts()) {
            $related_posts->the_post();
            $thumbnail_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
            $post_title = get_the_title();
            $post_excerpt = get_the_excerpt();
            $post_permalink = get_permalink();

            // Обрезаем заголовок до 60 символов
            if (strlen($post_title) > 60) {
                $post_title = mb_substr($post_title, 0, 60) . '...';
            }

            echo <<<HTML
            <div class="row related-post-row">
                <div class="col-md-3 col-sm-3">
                    <div class="img-related-post-wrapper">
                      <a href="{$post_permalink}" title="{$post_title}">
                        <img src="{$thumbnail_url}" class="img-responsive img-related-post" alt="{$post_title}">
                      </a>  
                    </div>
                </div>
                
                <div class="col-md-9 col-sm-9">
                    <div class="related-post-wrapper">
                        <div class="h3"><a href="{$post_permalink}">{$post_title}</a></div>
                        <p>
                            {$post_excerpt}
                        </p>
                        <a href="{$post_permalink}" class="btn-card">Читать дальше</a>
                    </div>
                </div>
            </div>
            HTML;
        }
    } else {
        echo '';
    }

    // Сбрасываем данные запроса
    wp_reset_postdata();
}
?>

            
 <!-------------------------------------------------->           
            
            
            
            
 

 
           
        </div>
    </section>
