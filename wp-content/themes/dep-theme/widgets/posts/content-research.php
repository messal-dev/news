<li class="mr-4 w-40 md:w-44 lg:w-full lg:mb-4 lg:mr-0 last:mb-0">
    <a href="<?php the_permalink();?>" class="cursor-pointer hover:text-primary">
        <?php the_post_thumbnail( 'medium', array( 'class' => 'h-20 w-full object-cover md:h-24' ) ); ?>
        <h6
            class="text-xs leading-5 overflow-hidden whitespace-nowrap text-ellipsis my-1 hover:text-primary hover:underline lg:overflow-auto lg:whitespace-normal lg:text-clip">
            <?php the_title();?>
        </h6>
    </a>
</li>
