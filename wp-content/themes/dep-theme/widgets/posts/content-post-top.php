<div class="pb-5 border-b-[1px] border-gray-200">
    <a href="<?php the_permalink() ?>">
        <h4 class="mb-4 text-sm hover:text-primary hover:underline lg:text-base">
            <?php the_title();?>
        </h4>
        <?php the_post_thumbnail( 'medium', array( 'class' => 'w-full h-40 lg:h-64 object-cover' ) ); ?>
    </a>
</div>