<div class="hidden lg:block lg:w-1/4 lg:ml-4 lg:mr-0 lg:order-3">
    <!-- Research Section -->
    <div class="bg-white rounded-sm py-2 px-4">
        <h4 class="mb-4 border-b-2 border-primary/20">
            <span class="text-base text-primary uppercase">ព័ត៌មានពេញនិយម</span>
        </h4>
        <!-- Research Contents Warpper -->
        <div>
            <?php
                // The Query
                $args = array(
                    'post__not_in' => get_option('sticky_posts'),
                    'meta_key' => 'wpb_post_views_count',
                    'orderby' => 'meta_value_num',
                    'order'=> 'DESC',
                    'posts_per_page' => 5,
                    'nopaging' => false,
                );

                $popular_query = new WP_Query($args);
            ?>

            <div>
                <!-- Released Contents -->
                <?php if ($popular_query->have_posts()): ?>
                    <ul class="flex overflow-auto whitespace-nowrap scrollbar-hide lg:block">
                        <?php while ($popular_query->have_posts()): $popular_query->the_post() ?>
                            <?php get_template_part( 'widgets/posts/content', 'popular' ); ?>
                        <?php endwhile;?>
                    </ul>
                <?php endif;?>
                <?php wp_reset_postdata();?>
            </div>
        </div>
    </div>

    <!-- Advertise About Cover -->
    <?php get_template_part( 'widgets/ads/right', 'banner' ); ?>
</div>