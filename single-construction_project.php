<?php get_header(); ?>

<section class="bread-crumbs">
    <div class="container">
        <div class="row">
            <ul>
                <?php if (function_exists('bcn_display')) bcn_display(); ?>
            </ul>
        </div>
    </div>
</section>

<main>
    <section class="single-project-page-section-1">
        <div class="container">
            <div class="row single-project-page-row-1">
                <div class="col-md-5 col-sm-5">
                    <div class="project-main-img-araper">
                        <img src="<?php echo get_post_meta(get_the_ID(), 'main_photo', true); ?>" 
                             class="project-main-img" 
                             alt="<?php the_title(); ?>">
                    </div>
                </div>
                
                <div class="col-md-7 col-sm-7">
                    <div class="project-info-wraper-1">
                        <h1><?php the_title(); ?></h1>
                        <div class="characteristics-1">
                            <?php if (!empty(get_post_meta(get_the_ID(), 'completion_time', true))) : ?>
                                <div class="char">
                                    <div class="s-1"><?php echo get_post_meta(get_the_ID(), 'completion_time', true); ?></div>
                                    <div class="s-2">Срок выполнения</div>
                                </div> 
                            <?php endif; ?>
                            
                            <?php if (!empty(get_post_meta(get_the_ID(), 'area', true))) : ?>
                                <div class="char">
                                    <div class="s-1"><?php echo get_post_meta(get_the_ID(), 'area', true); ?> кв.м.</div>
                                    <div class="s-2">Площадь покрытия</div>
                                </div>
                            <?php endif; ?>
                            
                            <?php if (!empty(get_post_meta(get_the_ID(), 'year_of_implementation', true))) : ?>
                                <div class="char">
                                    <div class="s-1"><?php echo get_post_meta(get_the_ID(), 'year_of_implementation', true); ?></div>
                                    <div class="s-2">Год реализации</div>
                                </div>
                            <?php endif; ?>
                        </div>
                        
                        <div class="characteristics-2-location">
                            <?php if (!empty(get_post_meta(get_the_ID(), 'highway', true))) : ?>
                                <div class="characteristics-2__row">
                                    <span class="sp-1">Шоссе:</span>
                                    <span><?php echo get_post_meta(get_the_ID(), 'highway', true); ?></span>
                                </div>
                            <?php endif; ?>
                            
                            <?php if (!empty(get_post_meta(get_the_ID(), 'distance_from_mkad', true))) : ?>
                                <div class="characteristics-2__row">
                                    <span class="sp-1">Расстояние от МКАД:</span>
                                    <span><?php echo get_post_meta(get_the_ID(), 'distance_from_mkad', true); ?> км.</span>
                                </div>
                            <?php endif; ?>
                            
                            <?php if (!empty(get_post_meta(get_the_ID(), 'nearest_city', true))) : ?>
                                <div class="characteristics-2__row">
                                    <span class="sp-1">Ближайший город:</span>
                                    <span><?php echo get_post_meta(get_the_ID(), 'nearest_city', true); ?></span>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="row single-project-page-row-2">
                <div class="col-md-6 col-sm-6">
                    <div class="wrp-1">
                        <ul>
                            <?php if (!empty(get_post_meta(get_the_ID(), 'main_work', true))) : ?>
                                <li>
                                    <div class="project-info-icon">
                                        <i class="fas fa-wrench"></i>
                                    </div>
                                    <div class="project-info-content">
                                        <span class="project-info-label">Основная работа:</span>
                                        <span class="project-info-value"><?php echo get_post_meta(get_the_ID(), 'main_work', true); ?></span>
                                    </div>
                                </li>
                            <?php endif; ?>

                            <?php if (!empty(get_post_meta(get_the_ID(), 'dop_raboty', true))) : ?>
                                <li><span>Дополнительные работы:</span> <span><?php echo get_post_meta(get_the_ID(), 'dop_raboty', true); ?></span></li>
                            <?php endif; ?>

                            <?php if (!empty(get_post_meta(get_the_ID(), 'material', true))) : ?>
                                <li>
                                    <div class="project-info-icon">
                                        <i class="fas fa-cube"></i>
                                    </div>
                                    <div class="project-info-content">
                                        <span class="project-info-label">Материал:</span>
                                        <span class="project-info-value"><?php echo get_post_meta(get_the_ID(), 'material', true); ?></span>
                                    </div>
                                </li>
                            <?php endif; ?>

                            <?php if (!empty(get_post_meta(get_the_ID(), 'area', true))) : ?>
                                <li>
                                    <div class="project-info-icon">
                                        <i class="fas fa-ruler"></i>
                                    </div>
                                    <div class="project-info-content">
                                        <span class="project-info-label">Площадь покрытия:</span>
                                        <span class="project-info-value"><?php echo get_post_meta(get_the_ID(), 'area', true); ?> кв.м.</span>
                                    </div>
                                </li>
                            <?php endif; ?>

                            <?php if (!empty(get_post_meta(get_the_ID(), 'completion_time', true))) : ?>
                                <li>
                                    <div class="project-info-icon">
                                        <i class="fas fa-calendar"></i>
                                    </div>
                                    <div class="project-info-content">
                                        <span class="project-info-label">Срок выполнения:</span>
                                        <span class="project-info-value"><?php echo get_post_meta(get_the_ID(), 'completion_time', true); ?></span>
                                    </div>
                                </li>
                            <?php endif; ?>

                            <?php if (!empty(get_post_meta(get_the_ID(), 'project_difficulty', true))) : ?>
                                <li>
                                    <div class="project-info-icon">
                                        <i class="fas fa-signal"></i>
                                    </div>
                                    <div class="project-info-content">
                                        <span class="project-info-label">Сложность проекта:</span>
                                        <span class="project-info-value"><?php echo get_post_meta(get_the_ID(), 'project_difficulty', true); ?></span>
                                    </div>
                                </li>
                            <?php endif; ?>

                            <?php if (!empty(get_post_meta(get_the_ID(), 'cost', true))) : ?>
                                <li>
                                    <div class="project-info-icon">
                                        <i class="fas fa-ruble-sign"></i>
                                    </div>
                                    <div class="project-info-content">
                                        <span class="project-info-label">Стоимость:</span>
                                        <span class="project-info-value"><?php echo get_post_meta(get_the_ID(), 'cost', true); ?> руб.</span>
                                    </div>
                                </li>
                            <?php endif; ?>
                        </ul>
                    </div>
                </div>
                
                <div class="col-md-6 col-sm-6">
                    <div class="wrp-2">
                        <p><strong>Состав работ:</strong></p>
                        <?php echo get_post_meta(get_the_ID(), 'work_composition', true); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php
    $before_image = get_post_meta(get_the_ID(), 'before_image', true);
    $after_image = get_post_meta(get_the_ID(), 'after_image', true);
    
    if($before_image && $after_image) : ?> 
        <section class="before-after-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="before-after-text">Фото До</div>
                        <img src="<?php echo $before_image; ?>" class="img-responsive img-before-after" alt="До">
                    </div>
                    <div class="col-md-6">
                        <div class="before-after-text">Фото После</div>
                        <img src="<?php echo $after_image; ?>" class="img-responsive img-before-after" alt="После">
                    </div>
                </div>
            </div>
        </section>  
    <?php endif; ?>   
    
    <?php
    $project_images = get_post_meta(get_the_ID(), 'project_images', true);
    if (!empty($project_images) && is_array($project_images)) : ?>
        <section class="project-gallery-section">
            <div class="container">
                <div class="project-gallery-title">Фото с объекта</div>
                <div class="row row-project-gallery">
                    <?php foreach ($project_images as $image_url) : ?>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="project-gallery-item">
                                <img src="<?php echo esc_url($image_url); ?>" 
                                     alt="Фото проекта" 
                                     class="img-responsive img-project-gallery">
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
    <?php endif; ?>

    <section class="main-text-home">
        <div class="container">
            <div class="project-description-title">Описание работ</div>
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <?php the_content(); ?>
            <?php endwhile; endif; ?>
        </div>
    </section>

    <section class="guarantee-section">
        <div class="container">
            <p class="guarantee-text">Официальная гарантия - 2 года</p>
        </div>
    </section>

    <?php require_once 'includes/how-we-work.php'; ?>
    <?php require_once 'includes/slider-portfolio.php'; ?>

    <section class="section-queries">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div class="offers-queries-wraper">
                        <div class="h3">Высокое качество работ</div>
                        <?php require_once 'includes/predlojeniya.php'; ?>
                    </div>
                </div>
                
                <div class="col-md-5">
                    <div class="queries-wraper">
                        <div class="h3">Популярные запросы</div>
                        <?php require_once 'includes/zaprosi.php'; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>

