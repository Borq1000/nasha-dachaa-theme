<?php
get_header();
?>


<section class="bread-crumbs" style="padding-top: 10px;">
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









    <section class="main-text-home single-article-section" itemscope itemtype="http://schema.org/Article">
        <div class="container">
            
            <h1 itemprop="headline"><?php the_title(); ?></h1>

            <div class="single-article-img-wraper" itemscope itemprop="image" itemtype="http://schema.org/ImageObject">
                <img src="<?php the_post_thumbnail_url(); ?>" itemprop="image" class="img-responsive" alt="<?php the_title(); ?>">

            </div>
            <span class="single-article-time-sp">
                <time itemprop="datePublished" datetime="<?php echo get_the_date('Y-m-d'); ?>"><?php echo get_the_date('d M Y'); ?></time>
            </span>
            


            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                    <div itemprop="articleBody">
                        <?php the_content(); ?>
                    </div>

                <?php endwhile; ?>
            <?php endif; ?>
            <?php the_tags('Теги: ', ', ', ' '); ?>
            
            
       
        </div>

    </section>

    <section class="read-alse-section">
        <div class="container">
            
            <div class="row">
                <?php
// Get the current post's categories
$cats = wp_get_post_categories(get_the_ID());

// If there are categories, display related posts
if ($cats) {
    $args = array(
        'category__in' => $cats,
        'post__not_in' => array(get_the_ID()),
        'posts_per_page' => 5, // Change this value as needed
        'ignore_sticky_posts' => 1
    );
    $related_posts = new WP_Query($args);
    if ($related_posts->have_posts()) {
        echo '<div class="h3">Читайте также</div>';
        echo '<ul class="read-alse-article-ul">';
        while ($related_posts->have_posts()) {
            $related_posts->the_post();
            echo '<li><a href="' . get_permalink() . '" title="' . get_the_title() . '">' . get_the_title() . '</a></li>';
        }
        echo '</ul>';
    }
    wp_reset_postdata();
}
?>

            </div>
        </div>
    </section>

    <section style="">
        <div class="container">
            <div class="measuring-wraper">
                <div class="row">
                    <div class="col-md-4">
                        <div class="img-measuring-wraper">
                            <img src="/wp-content/uploads/2021/11/measuring-image.jpg" alt="Выезд замерщика бесплатно" class="img-responsive img-measure">
                        </div>
                    </div>
                    <div class="col-md-8" style="padding-left:0px;">
                        <div class="measuring-text">
                            <h4 class="measuring-title">Выезд замерщика бесплатно</h4>
                            <h5 class="measuring-below-text">при условие заключения договора </h5>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>




    <div class="clearfix"></div>
    <?php require_once 'includes/how-we-work.php'; ?>




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



    <?php get_footer(); ?>


