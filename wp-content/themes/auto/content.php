<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-7">

            <?php if ( have_posts() ) : ?>
                <?php while ( have_posts() ) : the_post(); ?>
                
                    <!-- Карточка поста / страницы -->
                    <div class="card shadow border-0 rounded-4 overflow-hidden">
                        
                        <!-- Если у страницы есть миниатюра (картинка) – покажем её -->
                        <?php if ( has_post_thumbnail() ) : ?>
                            <img src="<?php the_post_thumbnail_url( 'large' ); ?>" 
                                 class="card-img-top" 
                                 alt="<?php the_title_attribute(); ?>"
                                 style="height: 300px; object-fit: cover;">
                        <?php endif; ?>

                        <div class="card-body p-4">
                            <h1 class="card-title fw-bold"><?php the_title(); ?></h1>
                            
                            <!-- Сам контент (то, что вы писали в редакторе) -->
                            <div class="card-text">
                                <?php the_content(); ?>
                            </div>

                            <!-- Дата публикации -->
                            <p class="mt-3">
                                <small class="text-muted">
                                    Опубликовано: <?php the_date(); ?>
                                </small>
                            </p>

                            <!-- Кнопка "Читать далее" (если это не страница, а запись) -->
                            <?php if ( is_single() ) : ?>
                                <a href="<?php the_permalink(); ?>" class="btn btn-primary rounded-pill px-4 mt-2">
                                    Читать далее →
                                </a>
                            <?php endif; ?>
                        </div>
                    </div>

                <?php endwhile; ?>
            <?php else : ?>
                <p>Контент не найден.</p>
            <?php endif; ?>

        </div>
    </div>
</div>