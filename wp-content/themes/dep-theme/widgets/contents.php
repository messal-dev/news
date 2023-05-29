<div class="flex-1 flex order-3 lg:order-2">
    <div class="w-full bg-white rounded-sm py-2 px-4">
        <h4 class="mb-4 border-b-2 border-primary/20">
            <span class="text-sm text-primary uppercase lg:text-base">ព័ត៌មានប្រចាំថ្ងៃ</span>
        </h4>
        <!-- Contents -->
        <?php
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

            // The Query
            $args = array(
                'post__not_in' => get_option('sticky_posts'),
                'paged' => $paged,
            );

            $the_query = new WP_Query($args);

            $posts = $the_query->posts;
        ?>

        <?php if ($the_query->have_posts()): ?>
            <div>
                <ul>
                    <?php $index = 0; while ($the_query->have_posts()): $the_query->the_post()?>
                        <?php if($index == 0) : ?>
                            <?php get_template_part('widgets/posts/content', 'post-top');?>
                        <?php else : ?>
                            <?php get_template_part('widgets/posts/content', 'post');?>
                        <?php endif ?>
                    <?php $index++; endwhile;?>
                </ul>
            </div>
            <!-- Paginations -->
            <div class="w-full flex justify-between mt-3 mb-2">
                <div class="flex justify-center">
                    <?php previous_posts_link( '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6 text-primary"> <path stroke-linecap="round" stroke-linejoin="round"
                                d="M6.75 15.75L3 12m0 0l3.75-3.75M3 12h18" /> </svg>',
                                $the_query->max_num_pages
                         ); 
                    ?>
                    <?php next_posts_link( '<span>បន្ទាប់</span>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" /></svg>',
                            $the_query->max_num_pages
                        ); 
                    ?>
                </div>
                <div class="py-1 px-3 text-gray-500">
                    <span class="text-xs">ទំព័រទី</span>
                    <span class="text-xs"><?php echo($paged) ?></span>
                    <span class="text-xs"> / </span>
                    <span class="text-xs"><?php echo($the_query->max_num_pages) ?></span>
                </div>
            </div>
        <?php endif?>
        <?php wp_reset_postdata();?>
    </div>
</div>