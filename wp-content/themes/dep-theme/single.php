<?php get_header();?>
    <?php get_template_part( 'widgets/content', 'logo' ); ?>
    <?php get_template_part( 'widgets/content', 'navbar' ); ?>
    <!-- Main Body -->
    <main class="w-11/12 lg:w-4/5 mx-auto py-4">
        <!-- Advertise Post Banner -->
        <?php get_template_part( 'widgets/ads/post', 'banner' ); ?>

        <div class="flex mt-4">
            <div class="flex-1">
                <?php if (have_posts()): ?>
                    <?php while(have_posts()) : the_post(); ?>
                        <article class="bg-white p-4">
                            <div class="">
                                <div class="mb-4">
                                    <div class="mb-1">
                                        <?php $categories = get_the_category();?>
                                        <?php foreach($categories as $category): ?>
                                            <span class="bg-primary text-white text-[10px] p-1 rounded inline-block mb-2 italic md:text-xs md:mb1">
                                                <?php echo ($category->cat_name); ?>
                                            </span>
                                        <?php endforeach; ?>
                                    </div>

                                    <h1 class="text-base text-primary leading-7 lg:text-2xl">
                                        <?php the_title();?>
                                    </h1>
                                </div>
                                <!-- Info -->
                                <div class="flex mb-4">
                                    <span class="text-xs mr-4 flex justify-center items-center text-gray-400">
                                        <svg class="w-3.5 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5m-9-6h.008v.008H12v-.008zM12 15h.008v.008H12V15zm0 2.25h.008v.008H12v-.008zM9.75 15h.008v.008H9.75V15zm0 2.25h.008v.008H9.75v-.008zM7.5 15h.008v.008H7.5V15zm0 2.25h.008v.008H7.5v-.008zm6.75-4.5h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V15zm0 2.25h.008v.008h-.008v-.008zm2.25-4.5h.008v.008H16.5v-.008zm0 2.25h.008v.008H16.5V15z" />
                                        </svg>
                                        <?php the_time('F j, Y');?>
                                    </span>
                                    <span class="text-xs mr-4 flex justify-center items-center text-gray-400">
                                        <svg class="w-3.5 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                                        </svg>
                                        <?php the_author(); ?>
                                    </span>
                                    <?php if(has_tag()): ?>
                                        <span class="text-xs mr-4 flex-1 flex justify-start items-center text-gray-400">
                                            <svg class="w-3.5 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M9.568 3H5.25A2.25 2.25 0 003 5.25v4.318c0 .597.237 1.17.659 1.591l9.581 9.581c.699.699 1.78.872 2.607.33a18.095 18.095 0 005.223-5.223c.542-.827.369-1.908-.33-2.607L11.16 3.66A2.25 2.25 0 009.568 3z" />
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 6h.008v.008H6V6z" />
                                            </svg>
                                            <div>
                                                <?php the_tags('<span class="text-xs hover:text-primary">', '</span> , <span class="text-xs hover:text-primary">', '</span>') ?>
                                            </div>
                                        </span>
                                    <?php endif; ?>
                                </div>
                                <!-- Content -->
                                <div class="post-content">
                                    <?php the_content() ?>
                                </div>
                            </div>
                        </article>
                    <?php endwhile ?>
                <?php endif ?>
            </div>
            <!-- Popular Section -->
            <?php get_template_part( 'widgets/content', 'rightside' ); ?>
        </div>
    </main>
<?php get_footer();?>