<?php
add_theme_support('html5', array(
    'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
));

add_theme_support('post-thumbnails', array('post'));

add_theme_support('post-formats', array('aside', 'gallery'));


add_theme_support('post-thumbnails');
add_theme_support('post-thumbnails', array('post'));          // Только для post
add_theme_support('post-thumbnails', array('page'));          // Только для page
add_theme_support('post-thumbnails', array('post', 'movie')); // Для post и movie типов


$defaults = array(
    'default-image' => '',
    'random-default' => false,
    'width' => 0,
    'height' => 0,
    'flex-height' => false,
    'flex-width' => false,
    'default-text-color' => '', // вызывается функций get_header_textcolor()
    'header-text' => true,
    'uploads' => true,
    'wp-head-callback' => '',
    'admin-head-callback' => '',
    'admin-preview-callback' => '',
);
add_theme_support('custom-header', $defaults);

function theme_register_nav_menu() {
    register_nav_menu('primary', 'Primary Menu');
}

add_action('after_setup_theme', 'theme_register_nav_menu');


// Register Custom Navigation Walker
require_once('wp_bootstrap_navwalker.php');

//Comments template

function comments_feed_template_callback($comment, $args, $depth) {
    $GLOBAL['COMMENT'] = $comment;
    ?>

    <div  style="border:1px solid #eaeaea;border-radius: 4px;padding: 25px;margin-bottom: 20px;" class="media">

        <a href="<?php echo get_comment_author_url(); ?>"   class="pull-left"><?php echo get_avatar(''); ?></a>

        <div class="media-body">

            <a href="<?php echo get_comment_author_url(); ?>">
                <h5 class="media-heading"><?php echo get_comment_author(); ?></h5>
            </a>
            <small><?php echo comment_date(); ?> в <?php echo comment_time(); ?></small>

            <div style="width: 400px"><?php wordwrap(comment_text(), 100, "<br />\n"); ?></div>
            <?php
            comment_reply_link(array_merge($args, array(
                'reply_text' => __('<strong>Ответ</strong> <i class="fa fa-reply" aria-hidden="true"></i>'),
                'depth' => $depth,
                'max_depth' => $args['max_depth']
            )));
            ?>


        </div>
    </div>




    <?php
}

//filter for adding class to tumbnail
add_filter('get_avatar', 'add_avatar_class');

function add_avatar_class($class) {
    $class = str_replace("class='avatar", "class=''", $class);
    return $class;
}

//add bootstrap style to reply link

add_filter('comment_reply_link', 'add_reply_link_class');

function add_reply_link_class($class) {
    $class = str_replace("class='comment-reply-link", "class='btn btn-mini pull-right' style='background-color:#e5e5e5", $class);
    return $class;
}

echo apply_filters('the_excerpt', get_the_excerpt());

function new_excerpt_length($length) {
    return 20;
}

add_filter('excerpt_length', 'new_excerpt_length');

//adding logo uploading option


function themeslug_theme_customizer($wp_customize) {
    $wp_customize->add_section('themeslug_logo_section', array(
        'title' => __('Логотип', 'themeslug'),
        'priority' => 30,
        'description' => 'Upload a logo to replace the default site name and description in the header',
    ));



    $wp_customize->add_setting('themeslug_logo');

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'themeslug_logo', array(
                'label' => __('Логотип', 'themeslug'),
                'section' => 'themeslug_logo_section',
                'settings' => 'themeslug_logo',
    )));
}

add_action('customize_register', 'themeslug_theme_customizer');

//end logo upload code
//Убирает объертки span вогруг input полей contact form 7
add_filter('wpcf7_form_elements', function($content) {
    $content = preg_replace('/<(span).*?class="\s*(?:.*\s)?wpcf7-form-control-wrap(?:\s[^"]+)?\s*"[^\>]*>(.*)<\/\1>/i', '\2', $content);

    return $content;
});

//remove_filter('the_content', 'wpautop');
//
//
//REGISTER website SIDEBAR VEDGET
function register_my_widgets() {
    register_sidebar(array(
        'name' => "Виджет - Сайдбар1",
        'id' => 'right-sidebar1',
        'class' => '',
        'before_widget' => '<div class="single_sidebar margin-top-40">',
        'after_widget' => '</div>',
        'description' => 'Эти виджеты будут показаны в правой колонке сайта',
        'before_title' => '<div class="sidebar_head text-center textwhite"><h6>',
        'after_title' => '</h6><div class="main-nav-border"></div></div>'
    ));



//        FOOTER VIDGETS

    register_sidebar(array(
        'name' => "footer1",
        'id' => 'footer1',
        'class' => 'textwidget',
        'before_widget' => '<p>',
        'after_widget' => '</p>',
        'description' => 'Этот виджет будет показан в подвале сайта.',
        'before_title' => '<h4 style="color: #800080" class="title">',
        'after_title' => '</h4>'
    ));



    register_sidebar(array(
        'name' => "home_vidget",
        'id' => 'home',
        'class' => 'textwidget',
        'before_widget' => '',
        'after_widget' => '',
        'description' => 'Это виджет, который  отображается на главной странице сайта.',
        'before_title' => '<h4 style="color: #800080" class="title">',
        'after_title' => '</h4>'
    ));
}

add_action('widgets_init', 'register_my_widgets');



add_filter('excerpt_more', 'new_excerpt_more');

function new_excerpt_more($more) {
    global $post;
    return '<a href="' . get_permalink($post->ID) . '">  Читать дальше......</a>';
}

function wp_corenavi() {
    global $wp_query;
    $pages = '';
    $max = $wp_query->max_num_pages;
    if (!$current = get_query_var('paged'))
        $current = 1;
    $a['base'] = str_replace(999999999, '%#%', get_pagenum_link(999999999));
    $a['total'] = $max;
    $a['current'] = $current;

    $total = 1; //1 - выводить текст "Страница N из N", 0 - не выводить
    $a['mid_size'] = 3; //сколько ссылок показывать слева и справа от текущей
    $a['end_size'] = 1; //сколько ссылок показывать в начале и в конце
    $a['prev_text'] = '&laquo;'; //текст ссылки "Предыдущая страница"
    $a['next_text'] = '&raquo;'; //текст ссылки "Следующая страница"

    if ($max > 1)
        echo '<div class="pagination_area text-center margin-top-50">';
    if ($total == 1 && $max > 1)
        $pages = 'Страницы: ' . $current . ' из ' . $max . '' . "\r\n";
    echo '<small>' . $pages . '</small><br>' . '<ul class="pagination"><li>' . paginate_links($a) . '</li></ul>';
    if ($max > 1)
        echo '</div>';
}

/* чтобы вставить код php в статьях/страницах WordPress, поставьте шоркод: [exec]код[/exec] */

function exec_php($matches) {
    eval('ob_start();' . $matches[1] . '$inline_execute_output = ob_get_contents();ob_end_clean();');
    return $inline_execute_output;
}

function inline_php($content) {
    $content = preg_replace_callback('/\[exec\]((.|\n)*?)\[\/exec\]/', 'exec_php', $content);
    $content = preg_replace('/\[exec off\]((.|\n)*?)\[\/exec\]/', '$1', $content);
    return $content;
}

add_filter('the_content', 'inline_php', 0);


## Удаляет "Рубрика: ", "Метка: " и т.д. из заголовка архива
add_filter('get_the_archive_title', function($title) {
    return preg_replace('~^[^:]+: ~', '', $title);
});


function create_related_services_taxonomy() {
    $labels = array(
        'name' => 'Связанные страницы/записи',
        'singular_name' => 'Связанная страница/запись',
        'search_items' => 'Поиск связанных услуг',
        'all_items' => 'Все связанные услуги',
        'parent_item' => 'Родительская связанная услуга',
        'parent_item_colon' => 'Родительская связанная услуга:',
        'edit_item' => 'Редактировать связанную услугу',
        'update_item' => 'Обновить связанную услугу',
        'add_new_item' => 'Добавить новую связанную услугу',
        'new_item_name' => 'Название новой связанной услуги',
        'menu_name' => 'Связанные услуги',
    );

    $args = array(
        'hierarchical' => true,
        'labels' => $labels,
        'show_ui' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'rewrite' => array( 'slug' => 'related-services' ),
    );

    register_taxonomy( 'related_services', array( 'page', 'post', 'construction_project' ), $args );
    
    
}
add_action( 'init', 'create_related_services_taxonomy', 0 );



function generate_table_of_contents($content) {
    if (is_single()) {
        $matches = array();
        $toc = '';

        // Находим все заголовки H2 и H3, перед которыми есть тег <span> с атрибутом id
        preg_match_all('/<span id="(.+?)"><\/span><(h[23])>(.*?)<\/\2>/', $content, $matches, PREG_SET_ORDER);

        if ($matches) {
            $toc .= '<div class="soderjanie-stati">';
            $toc .= '<p>Содержание:</p>';
            $toc .= '<ul>';

            $prev_level = 2;

            foreach ($matches as $match) {
                $level = intval(substr($match[2], -1));

                if ($level === $prev_level) {
                    $toc .= '</li>';
                } elseif ($level > $prev_level) {
                    $toc .= '<ul>';
                } else {
                    $toc .= '</li></ul></li>';
                }

                // Удаляем HTML-теги из текста заголовка
                $clean_title = strip_tags($match[3]);
                $toc .= '<li><a href="#' . $match[1] . '">' . $clean_title . '</a>';
                $prev_level = $level;
            }

            while ($prev_level > 2) {
                $toc .= '</li></ul>';
                $prev_level--;
            }

            $toc .= '</li></ul></div>';
        }

        $content = $toc . $content;
    }

    return $content;
}



// Функция-обработчик для добавления атрибута id к заголовкам
function add_id_to_heading($content) {
    $content = preg_replace_callback(
        '/<(h[23])>(.*?)<\/\1>/',
        function ($matches) {
            $tag = $matches[1];
            $title = $matches[2];
            $id = sanitize_title($title);

            return '<span id="' . $id . '"></span><' . $tag . '>' . $title . '</' . $tag . '>';
        },
        $content
    );

    return $content;
}

add_filter('the_content', 'add_id_to_heading');
add_filter('the_content', 'generate_table_of_contents', 11);

function remove_read_more_link() {
    return '...';
}
add_filter('excerpt_more', 'remove_read_more_link');


//Шорткоды для калькуляторов

function insert_calculator_shortcode($atts) {
    ob_start();
    include get_template_directory() . '/calculators/calc-zaezd-compact.php';
    $output = ob_get_contents();
    ob_end_clean();
    return $output;
}
add_shortcode('calculator-zaezd', 'insert_calculator_shortcode');

function insert_calculator_pl_shortcode($atts) {
    ob_start();
    include get_template_directory() . '/calculators/calc-betonpl-compact.php';
    $output = ob_get_contents();
    ob_end_clean();
    return $output;
}
add_shortcode('calculator-ploshchadka', 'insert_calculator_pl_shortcode');



//Шорткоды для калькуляторов END

// Projects

// Регистрация нового типа записи 'construction_project'


function get_all_pages_select() {
    $pages = get_pages();
    $pages_select = array();

    foreach ($pages as $page) {
        $pages_select[$page->ID] = $page->post_title;
    }

    return $pages_select;
}


function construction_project_post_type() {
    $labels = array(
        'name' => 'Проекты',
        'singular_name' => 'Проект',
        'add_new' => 'Добавить новый',
        'add_new_item' => 'Добавить новый проект',
        'edit_item' => 'Редактировать проект',
        'new_item' => 'Новый проект',
        'all_items' => 'Все проекты',
        'view_item' => 'Просмотреть проект',
        'search_items' => 'Поиск проектов',
        'not_found' => 'Проектов не найдено',
        'not_found_in_trash' => 'В корзине проектов не найдено',
        'parent_item_colon' => '',
        'menu_name' => 'Проекты',
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'projects', 'with_front' => false),
        'capability_type' => 'post',
        'has_archive' => true,
        'hierarchical' => false,
        'menu_position' => 6,
        'supports' => array('title', 'editor', 'thumbnail'),
        'show_in_menu' => true,
    );

    register_post_type('construction_project', $args);
}

add_action('init', 'construction_project_post_type');


// Добавление метабоксов к типу записи 'construction_project'
function construction_project_metabox() {
    add_meta_box(
        'construction_project_info',
        'Информация о проекте',
        'construction_project_metabox_callback',
        'construction_project',
        'normal',
        'high'
    );
    
    
    
    
    
}

add_action('add_meta_boxes', 'construction_project_metabox');

function construction_project_metabox_callback($post) {
    // Здесь будет код для отображения полей метабокса.
    wp_nonce_field('construction_project_save_meta', 'construction_project_nonce');

    
    $main_photo = get_post_meta($post->ID, 'main_photo', true);
    $completion_time = get_post_meta($post->ID, 'completion_time', true);
    $area = get_post_meta($post->ID, 'area', true);
    $year_of_implementation = get_post_meta($post->ID, 'year_of_implementation', true);
    $highway = get_post_meta($post->ID, 'highway', true);
    $distance_from_mkad = get_post_meta($post->ID, 'distance_from_mkad', true);
    $nearest_city = get_post_meta($post->ID, 'nearest_city', true);
    $main_work = get_post_meta($post->ID, 'main_work', true);
    $dop_raboty = get_post_meta($post->ID, 'dop_raboty', true);
    $material = get_post_meta($post->ID, 'material', true);
    $project_difficulty = get_post_meta($post->ID, 'project_difficulty', true);
    $cost = get_post_meta($post->ID, 'cost', true);
    $work_composition = get_post_meta($post->ID, 'work_composition', true);
    $before_image = get_post_meta($post->ID, 'before_image', true);
    $after_image = get_post_meta($post->ID, 'after_image', true);


    // Вывод полей метабокса
    wp_nonce_field('construction_project_metabox', 'construction_project_metabox_nonce');

    echo '<p><label for="main_photo">Основная фотография проекта:</label>';
    
    echo '<img id="image-preview" src="' . esc_url($main_photo) . '" style="width: 150px; height: auto; display: ' . (empty($main_photo) ? 'none' : 'block') . ';">';
    echo '<input type="hidden" name="main_photo" id="main_photo" value="' . esc_url($main_photo) . '">';
    echo '<button type="button" class="upload_image_button button">Загрузить изображение</button>';
    
    


    echo '<p><label for="completion_time">Сроки выполнения:</label><br>';
    echo '<input type="text" id="completion_time" name="completion_time" value="' . esc_attr($completion_time) . '" /> </p>';

    echo '<p><label for="area">Площадь:</label><br>';
    echo '<input type="text" id="area" name="area" value="' . esc_attr($area) . '" /> <strong>кв.м.</strong></p>';

    echo '<p><label for="year_of_implementation">Год реализации:</label><br>';
    echo '<input type="text" id="year_of_implementation" name="year_of_implementation" value="' . esc_attr($year_of_implementation) . '" /></p>';

    echo '<p><label for="highway">Шоссе:</label><br>';
    echo '<input type="text" id="highway" name="highway" value="' . esc_attr($highway) . '" /></p>';

    echo '<p><label for="distance_from_mkad">Расстояние от МКАД:</label><br>';
    echo '<input type="text" id="distance_from_mkad" name="distance_from_mkad" value="' . esc_attr($distance_from_mkad) . '" /></p>';

    echo '<p><label for="nearest_city">Ближайший город:</label><br>';
    echo '<input type="text" id="nearest_city" name="nearest_city" value="' . esc_attr($nearest_city) . '" /></p>';

    echo '<p><label for="main_work">Основная работа:</label><br>';
    echo '<input type="text" id="main_work" name="main_work" value="' . esc_attr($main_work) . '" /></p>';
    echo '<p><label for="project_difficulty">Сложность проекта:</label>';
    echo '<select id="project_difficulty" name="project_difficulty">';
    echo '<option value="низкая"' . selected($project_difficulty, 'низкая', false) . '>Низкая</option>';
    echo '<option value="средняя"' . selected($project_difficulty, 'средняя', false) . '>Средняя</option>';
    echo '<option value="высокая"' . selected($project_difficulty, 'высокая', false) . '>Высокая</option>';
    echo '</select></p>';
    
    
    echo '<label for="dop_raboty">Дополнительные работы:</label><br>';
    
    echo '<textarea id="dop_raboty" name="dop_raboty" style="width: 100%; max-width: 500px;">'. esc_attr($dop_raboty) .'</textarea>';

    echo '<p><label for="nearest_city">Материал:</label><br>';
    echo '<input type="text" id="material" name="material" value="' . esc_attr($material) . '" /></p>';
    
    
    echo '<p><label for="cost">Стоимость:</label><br>';
    echo '<input type="number" id="cost" name="cost" value="' . esc_attr($cost) . '" /></p>';

    echo '<p><label for="work_composition" style="width: 100%; max-width: 500px;">Состав работ:</label><br>';
    echo '<textarea id="work_composition" name="work_composition" style="height: 286px;width:500px;">' . esc_textarea($work_composition) . '</textarea></p>';
    
    echo '<div>';
    echo '<p><label for="work_composition" style="width: 100%; max-width: 500px;">Фото До:</label><br>';
    echo '<input type="text" id="before_image" name="before_image" value="' . $before_image . '" style="width: 100%; max-width: 500px;">';
    echo '<br>';
    echo '<p><label for="work_composition" style="width: 100%; max-width: 500px;">Фото После:</label><br>';
    echo '<input type="text" id="after_image" name="after_image" value="' . $after_image . '" style="width: 100%; max-width: 500px;"><br>';

    echo '</div>';
    echo '</div>';
    
    
    
// Вставьте этот код перед закрывающим тегом </script>
echo '<script>
    jQuery(document).ready(function($) {
        $("#upload_project_images").on("click", function(e) {
            e.preventDefault();
            var custom_uploader = wp.media({
                title: "Выберите фотографии",
                button: {
                    text: "Добавить"
                },
                multiple: true
            }).on("select", function() {
                var attachment = custom_uploader.state().get("selection").toJSON();
                var image_ids = [];
                for (var i = 0; i < attachment.length; i++) {
                    image_ids.push(attachment[i].id);
                }
                $("#project_images").val(image_ids.join());
            })
            .open();
        });
    });
</script>';

    
    
    
    
}


function construction_project_save_meta($post_id) {
    if (!isset($_POST['construction_project_nonce'])) {
        return;
    }

    if (!wp_verify_nonce($_POST['construction_project_nonce'], 'construction_project_save_meta')) {
        return;
    }

    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }

    if (!current_user_can('edit_post', $post_id)) {
        return;
    }
    
    
    // Сохраняем данные введенные в поле "Дополнительные работы"
    if (isset($_POST['dop_raboty'])) {
        update_post_meta($post_id, 'dop_raboty', sanitize_text_field($_POST['dop_raboty']));
    }
    
    // Сохраняем данные введенные в поле "Материал"
    if (isset($_POST['material'])) {
        update_post_meta($post_id, 'material', sanitize_text_field($_POST['material']));
    }
    
    

    $meta_fields = array(
        
        'main_photo',
        'completion_time',
        'area',
        'year_of_implementation',
        'highway',
        'distance_from_mkad',
        'nearest_city',
        'main_work',
        'additional_works',
        'material',
        'project_difficulty',
        'cost',
        'work_composition',
        'project_images',
        'before_image',
        'after_image'
        
    );

    foreach ($meta_fields as $field) {
        if (array_key_exists($field, $_POST)) {
            update_post_meta($post_id, $field, $_POST[$field]);
        }
    }
}

add_action('save_post', 'construction_project_save_meta');




function my_theme_enqueue_scripts() {
    if (is_admin()) {
        wp_enqueue_media();
        wp_enqueue_script('my-admin-script', get_template_directory_uri() . '/js/admin-scripts.js', array('jquery'), '1.0.0', true);
    }
}
add_action('admin_enqueue_scripts', 'my_theme_enqueue_scripts');



// Создаем метабокс для загрузки изображений
function construction_project_images_metabox() {
    add_meta_box(
        'construction_project_images_metabox',
        'Фото с объекта',
        'construction_project_images_metabox_callback',
        'construction_project',
        'normal',
        'high'
    );
}
add_action('add_meta_boxes', 'construction_project_images_metabox');

// Функция обратного вызова для метабокса с изображениями
function construction_project_images_metabox_callback($post) {
    wp_nonce_field('construction_project_images_save_meta', 'construction_project_images_nonce');
    
    $project_images = get_post_meta($post->ID, 'project_images', true);
    if (empty($project_images)) {
        $project_images = array_fill(0, 4, '');
    }

    for ($i = 0; $i < 4; $i++) {
        echo '<div class="image-uploader" style="display: inline-block; margin-right: 10px;">';
        echo '<img src="' . esc_url($project_images[$i]) . '" style="width: 100px; height: auto; display: block;">';
        echo '<input type="hidden" name="project_images[' . $i . ']" value="' . esc_url($project_images[$i]) . '">';
        echo '<input type="button" class="upload_image_button button" value="Загрузить" style="display: block;">';
        echo '</div>';
    }
}

// Единая функция для отключения форматирования
function disable_all_wp_formatting() {
    remove_filter('the_content', 'wpautop');
    remove_filter('the_content', 'wptexturize');
    remove_filter('comment_text', 'wpautop');
    remove_filter('the_excerpt', 'wpautop');
    remove_filter('the_excerpt', 'wptexturize');
}
add_action('init', 'disable_all_wp_formatting', 1);

// Единая функция для защиты HTML комментариев
function protect_html_comments($content) {
    if (strpos($content, '<!--') !== false) {
        $content = preg_replace('/<!--(.|\s)*?-->/', '<!--protectedhtml-->$0<!--/protectedhtml-->', $content);
    }
    return $content;
}
add_filter('the_content', 'protect_html_comments', 999);

// Единая функция для очистки пустых тегов
function clean_empty_p_tags($content) {
    $content = preg_replace('/<p[^>]*>[\s|&nbsp;]*<\/p>/', '', $content);
    return $content;
}
add_filter('the_content', 'clean_empty_p_tags', 999);

// Отключаем визуальный редактор
add_filter('user_can_richedit', '__return_false');

// Отключаем конвертацию переносов строк в br и p
remove_filter('the_content', 'nl2br');

// Создаем шорткод для защиты HTML от форматирования WordPress
function raw_html_shortcode($attrs, $content = null) {
    remove_all_filters('the_content');
    $content = str_replace(array('<p>', '</p>', '<br>', '<br/>', '<br />'), '', $content);
    add_filter('the_content', 'do_shortcode', 11);
    return trim($content);
}
add_shortcode('raw_html', 'raw_html_shortcode');

// Добавляем поддержку HTML5
add_theme_support('html5', array('script', 'style'));

// Отключаем автоформатирование для определенных тегов
function disable_autop_for_specific_tags($content) {
    if (strpos($content, '<div') !== false) {
        $content = preg_replace('/<p>\\s*?(<div.*?>)/s', '$1', $content);
        $content = preg_replace('/(<\\/div>)\\s*?<\\/p>/s', '$1', $content);
    }
    return $content;
}
add_filter('the_content', 'disable_autop_for_specific_tags', 99);

