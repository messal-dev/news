<li class="mb-4 last:mb-2">
    <a href="<?php the_permalink();?>" class="flex justify-start cursor-pointer hover:text-primary">
        <?php the_post_thumbnail( 'medium', array( 'class' => 'w-14 h-14 lg:w-16 lg:h-16 object-cover' ) ); ?>
        <div class="flex-1 flex flex-col ml-2 justify-between">
            <?php $category = get_the_category();?>
            <span class="hidden md:block text-[10px] text-gray-400 block lg:mb-1">
                <?php echo ($category[0]->cat_name); ?>
            </span>
            <p class="w-44 text-xs leading-5 hover:text-primary hover:underline truncate">
                <?php the_title();?>
            </p>
            <div class="flex justify-between">
                <span class="text-[10px] text-gray-400 mr-2"><?php the_time('F j, Y');?></span>
                <span class="text-[10px] text-gray-400"><?php the_author();?></span>
            </div>
        </div>
    </a>
</li>