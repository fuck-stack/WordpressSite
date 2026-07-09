<?php
/*
Template Name: home
*/
?>

<?php get_header(); ?>

<section class="services py-5" style="background: #f8f9fa; padding-top: 10px;">
    <div class="container-fluid p-0 mt-5"> <!-- убрали отступы по бокам -->
        <div class="row g-0"> <!-- убрали промежутки между колонками -->
            <div class="col-12">

                <?php if ( have_posts() ) : ?>
                    <?php while ( have_posts() ) : the_post(); ?>
                    
                        <div class="card shadow-lg border-0 overflow-hidden mb-5" style="border-radius: 0;"> <!-- убрали скругление -->
                            
                            <?php if ( has_post_thumbnail() ) : ?>
                                <img src="<?php the_post_thumbnail_url( 'full' ); ?>" 
                                     class="card-img-top" 
                                     alt="<?php the_title_attribute(); ?>"
                                     style="height: 400px; object-fit: cover; width: 100%; display: block;">
                            <?php endif; ?>

                            <div class="card-body p-4 p-md-5">
                                <h1 class="card-title fw-bold display-5 mb-4">
                                    <?php the_title(); ?>
                                </h1>
                                
                                <div class="card-text fs-5 lh-lg">
                                    <?php the_content(); ?>
                                </div>

                                <hr class="my-4">
                              

                                <?php if ( is_single() ) : ?>
                                    <a href="<?php the_permalink(); ?>" class="btn btn-primary rounded-pill px-5 py-2 mt-2">
                                        Читать далее →
                                    </a>
                                <?php endif; ?>
                            </div>
                        </div>

                    <?php endwhile; ?>
                <?php else : ?>
                    <div class="alert alert-warning text-center py-5">
                        <i class="fas fa-exclamation-triangle fa-2x mb-3 d-block"></i>
                        <p class="fs-4">Контент не найден.</p>
                    </div>
                <?php endif; ?>

            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>