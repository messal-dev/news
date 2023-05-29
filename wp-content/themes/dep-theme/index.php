<?php get_header();?>
    <?php get_template_part( 'widgets/content', 'logo' ); ?>
    <?php get_template_part( 'widgets/content', 'navbar' ); ?>
        <!-- Main Body -->
        <main class="w-11/12 lg:w-4/5 mx-auto mt-4">
        
            <!-- Advertise Post Banner -->
            <?php get_template_part( 'widgets/ads/post', 'banner' ); ?>

            <!-- Covers -->
            <?php get_template_part( 'widgets/posts/cover' ); ?>

            <!-- Body Section -->
            <div class="flex my-4 flex-wrap lg:flex-nowrap">
                <!-- Released Section -->
                <?php get_template_part( 'widgets/content', 'leftside' ); ?>

                <!-- Content Section -->
                <?php get_template_part( 'widgets/contents' ); ?>

                <!-- Popular Section -->
                <?php get_template_part( 'widgets/content', 'rightside' ); ?>
            </div>

        </main>
<?php get_footer();?>