<!-- Navigator -->
<div class="sticky top-0 z-50 w-full bg-white">
    <header class="w-11/12 lg:w-4/5 mx-auto flex justify-between items-center relative">
        <!-- Burgar Icon -->
        <div class="lg:hidden flex justify-center items-center">
            <div id="nav-icon">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
        <!-- Logo -->
        <div class="lg:hidden">
        <?php $imageUrl = get_template_directory_uri() . "/assets/images/dep-news.png";?>
            <img class="h-10 object-cover" src="<?php echo $imageUrl; ?>"  alt="DAP News" />
        </div>
        <!-- Menu -->
        <nav id="navbar-menu"
            class="absolute top-12 left-0 bg-white z-10 font-normal divide-y divide-gray-100 rounded shadow-xl w-64 lg:full lg:shadow-none lg:rounded-none lg:flex-1 lg:static lg:flex lg:justify-between lg:items-center">
            <?php 
                $augs = array(
                    'menu_class' => 'menu-wrapper',
                    'container' => '',
                    'active_class' => 'active'
                );
            ?>
            
            <?php while (wp_nav_menu($augs)): ?>
                <li><?php nav_menu_item()?></li>
            <?php endwhile;?>        
        </nav>
        <!-- Search -->
        <div class="cursor-pointer lg:relative p-3">
            <?php get_search_form() ?>
        </div>

    </header>
</div>
