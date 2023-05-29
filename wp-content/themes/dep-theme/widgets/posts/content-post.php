<li class="py-5 border-b-[1px] border-gray-200">
    <a href="<?php the_permalink();?>">
        <div class="flex">
            <?php the_post_thumbnail( 'medium', array( 'class' => 'w-24 h-28 md:w-40 object-cover' ) ); ?>
            <div class="flex-1 flex flex-col justify-between ml-4">
                <div class="flex-1 flex flex-col">
                    <?php $category = get_the_category();?>
                    <span class="text-gray-400 text-[10px] md:text-xs mb-1">
                        <?php echo ($category[0]->cat_name); ?>
                    </span>
                    <h4 class="text-sm leading-6 hover:text-primary hover:underline lg:text-base">
                        <?php the_title();?>
                    </h4>
                </div>
                <div class="flex justify-between">
                    <span class=" text-[10px] md:text-xs text-gray-400 mr-2">
                        <?php the_time('F j, Y');?>
                    </span>
                    <span class=" text-[10px] md:text-xs text-gray-400">
                        <?php the_author();?>
                    </span>
                </div>
            </div>
        </div>
    </a>
</li>