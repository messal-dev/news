<div class="hidden lg:block lg:order-1 lg:mb-4 lg:w-1/4 lg:mr-4 lg:mb-0">
    <!-- Content -->
    <div class="bg-white rounded-sm py-2 px-4">
        <h4 class="mb-4 border-b-2 border-primary/20">
            <span class="text-base text-primary uppercase">អត្ថបទស្រាវជ្រាវ</span>
        </h4>
        <!-- Released Contents Warpper -->

        <?php
            // The Query
            $args = array(
                'category_name' => 'research',
                'nopaging' => false,
                'posts_per_page' => 5,
            );

            $the_query = new WP_Query($args);
        ?>

        <div>
            <!-- Released Contents -->
            <?php if ($the_query->have_posts()): ?>
                <ul class="flex overflow-auto whitespace-nowrap scrollbar-hide lg:block">
                    <?php while ($the_query->have_posts()): $the_query->the_post() ?>
                        <?php get_template_part( 'widgets/posts/content', 'research' ); ?>
                    <?php endwhile;?>
                </ul>
            <?php endif;?>
            <?php wp_reset_postdata();?>
        </div>
    </div>

    <!-- Advertise About Cover -->
    <?php get_template_part( 'widgets/ads/left', 'banner' ); ?>
</div>