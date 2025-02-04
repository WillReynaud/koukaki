<div class="swiper mySwiper">
    <div class="swiper-wrapper">
        <?php
        // WP_Query pour récupérer les personnages
        $args = array(
            'post_type' => 'characters',
            'posts_per_page' => -1,
            'meta_key' => '_main_char_field',
            'orderby' => 'meta_value_num',
        );
        $characters_query = new WP_Query($args);

        while ($characters_query->have_posts()) {
            $characters_query->the_post();
            ?>
            <div class="swiper-slide">
                <?php 
                // Affiche l'image de l'article
                echo get_the_post_thumbnail(get_the_ID(), 'full'); 
                ?>
                <figcaption><?php the_title(); ?></figcaption>
            </div>
            <?php
        }
        wp_reset_postdata();
        ?>
    </div>