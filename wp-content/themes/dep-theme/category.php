<?php get_header();?>
    <?php get_template_part( 'widgets/content', 'logo' ); ?>
    <?php get_template_part( 'widgets/content', 'navbar' ); ?>
    <!-- Main Body -->
    <main class="w-11/12 lg:w-4/5 mx-auto py-4">
        <!-- Advertise Post Banner -->
        <?php get_template_part( 'widgets/ads/post', 'banner' ); ?>
        
        <div class="flex mt-4">
            <div class="flex-1 bg-white rounded-sm px-4 py-2">
                <?php
                    // The Query
                    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

                    $category = get_category( get_query_var( 'cat' ) );
                    $cat_id = $category->cat_ID;
                    $cat_name = $category->cat_name;

                    $args = array(
                        'posts_per_page' => 11,
                        'cat' => $cat_id,
                        'paged' => $paged,
                    );

                    $category_query = new WP_Query($args);
                ?>

                <h4 class="mb-4 border-b-2 border-primary/20">
                    <span class="text-sm text-primary uppercase lg:text-base"><?php echo($cat_name); ?></span>
                </h4>

                <?php if ($category_query->have_posts()): ?>
                    <div class="flex flex-wrap justify-between">
                        <?php $index = 0; while ($category_query->have_posts()): $category_query->the_post()?>
                            <?php if($index == 0) : ?>
                                <?php get_template_part('widgets/category/content', 'cover');?>
                            <?php else : ?>
                                <?php get_template_part('widgets/category/content', 'post');?>
                            <?php endif ?>
                        <?php $index++; endwhile;?>
                    </div>

                    <!-- Paginations -->
                    <div class="w-full flex justify-between mt-3 mb-2">
                        <div class="flex justify-center">
                            <?php previous_posts_link( '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="1.5"
                                    stroke="currentColor" class="w-6 h-6 text-primary"> <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M6.75 15.75L3 12m0 0l3.75-3.75M3 12h18" /> </svg>',
                                        $category_query->max_num_pages
                                );
                            ?>
                            <?php next_posts_link( '<span>បន្ទាប់</span>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" /></svg>',
                                    $category_query->max_num_pages
                                ); 
                            ?>
                        </div>
                        <div class="py-1 px-3 text-gray-500">
                            <span class="text-xs">ទំព័រទី</span>
                            <span class="text-xs"><?php echo($paged) ?></span>
                            <span class="text-xs"> / </span>
                            <span class="text-xs"><?php echo($category_query->max_num_pages) ?></span>
                        </div>
                    </div>
                <?php endif?>
                <?php wp_reset_postdata();?>
            </div>
            <!-- Popular Section -->
            <?php get_template_part( 'widgets/content', 'rightside' ); ?>
        </div>
    </main>
<?php get_footer();?>