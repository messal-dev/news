<div class="lg:flex lg:justify-between lg:flex-row my-4">
    <!-- Cover Content -->
    <?php
        // The Query
        $args = array(
            'post__in' => get_option('sticky_posts'),
            'nopaging' => false,
            'posts_per_page' => 4,
            'ignore_sticky_posts' => 1,
        );

        $the_query = new WP_Query($args);

        $posts = $the_query->posts;
    ?>

    <?php if ($the_query->have_posts()): ?>
        <!-- First Covers -->
        <article class="sticky-content w-full h-36 md:h-48 lg:h-96">
            <a href="<?php echo (get_permalink($posts[0]->ID)) ?>" class="relative block h-full">
                <?php echo (get_the_post_thumbnail($posts[0]->ID, 'medium', array('class' => 'h-full w-full object-cover'))); ?>
                <div class="h-full w-full absolute bg-black/50 top-0"></div>
                <div class="p-4 w-full absolute bottom-0">
                    <?php $category = get_the_category($posts[0]->ID);?>
                    <span class="bg-primary text-white text-[10px] p-1 rounded inline-block mb-2 italic md:text-xs md:mb1">
                        <?php echo ($category[0]->cat_name); ?>
                    </span>
                    <h4 class="text-white text-xs md:text-base lg:text-xl">
                        <?php echo ($posts[0]->post_title); ?>
                    </h4>
                </div>
            </a>
        </article>

        <div class="sticky-content w-full">
            <div class="thinner flex flex-wrap h-full lg:h-96">
                <article class="w-full h-36 md:h-48 lg:h-1/2 block">
                    <a href="<?php echo (get_permalink($posts[1]->ID)) ?>" class="relative h-full">
                        <?php echo (get_the_post_thumbnail($posts[1]->ID, 'medium', array('class' => 'w-full h-full object-cover'))); ?>
                        <div class="h-full w-full absolute bg-black/50 top-0"></div>
                        <div class="p-4 w-full absolute bottom-0">
                            <?php $category = get_the_category($posts[1]->ID);?>
                            <span class="bg-primary text-white text-[10px] p-1 rounded inline-block mb-2 italic md:text-xs md:mb1">
                                <?php echo ($category[0]->cat_name); ?>
                            </span>
                            <h4 class="text-white text-xs md:text-base lg:text-base">
                                <?php echo ($posts[1]->post_title); ?>
                            </h4>
                        </div>
                    </a>
                </article>
                <article class="w-full lg:w-1/2 h-36 md:h-48 lg:h-1/2 block">
                    <a href="<?php echo (get_permalink($posts[2]->ID)) ?>" class="relative h-full">
                        <?php echo (get_the_post_thumbnail($posts[2]->ID, 'medium', array('class' => 'w-full h-full object-cover'))); ?>
                        <div class="h-full w-full absolute bg-black/50 top-0"></div>
                        <div class="p-4 w-full absolute bottom-0">
                            <?php $category = get_the_category($posts[2]->ID);?>
                            <span class="bg-primary text-white text-[10px] p-1 rounded inline-block mb-2 italic md:text-xs md:mb1">
                                <?php echo ($category[0]->cat_name); ?>
                            </span>
                            <h4 class="text-white text-xs md:text-base lg:text-base">
                                <?php echo ($posts[3]->post_title); ?>
                            </h4>
                        </div>
                    </a>
                </article>
                <article class="w-full lg:w-1/2 h-36 md:h-48 lg:h-1/2 block">
                    <a href="<?php echo (get_permalink($posts[3]->ID)) ?>" class="relative h-full">
                        <?php echo (get_the_post_thumbnail($posts[3]->ID, 'medium', array('class' => 'w-full h-full object-cover'))); ?>
                        <div class="h-full w-full absolute bg-black/50 top-0"></div>
                        <div class="p-4 w-full absolute bottom-0">
                            <?php $category = get_the_category($posts[3]->ID);?>
                            <span class="bg-primary text-white text-[10px] p-1 rounded inline-block mb-2 italic md:text-xs md:mb1">
                                <?php echo ($category[0]->cat_name); ?>
                            </span>
                            <h4 class="text-white text-xs md:text-base lg:text-base">
                                <?php echo ($posts[3]->post_title); ?>
                            </h4>
                        </div>
                    </a>
                </article>
            </div>
        </div>
    <?php endif;?>
    <?php wp_reset_postdata(); ?>
</div>
