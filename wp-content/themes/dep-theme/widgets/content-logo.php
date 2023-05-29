<!-- Start Logo -->
<div class="hidden lg:block hero py-4 bg-white">
    <div class="header-logo w-4/5 mx-auto flex">
        <!-- Logo -->
        <div class="logo">
            <a href="<?php echo get_home_url() ?>">
                <img class="mx-auto h-28 object-cover" src="<?php echo get_site_icon_url(); ?>" alt="DAP News" />
            </a>
        </div>
        <!-- Ads -->
        <div class="logo-banner-ads flex-1">
            <?php if( adrotate_group(1) == '<!-- Either there are no banners, they are disabled or none qualified for this location! -->' ): ?>
                <div class="bannder-ad-wrapper">
                    <div class="ads-placeholder-card logo-banner-ads-placeholder">
                        <span class="ads-placeholder-title">ផ្ទាំងពាណិជ្ជកម្ម (720 x 90)</span>
                        <div class="ads-placeholder-contact">
                            <span>លេខទូរស័ព្ទ: 096 289 9400</span>
                            <span>អុីម៉ែល: messalbiz@gmail.com</span>
                        </div>
                    </div>
                </div>
            <?php else: ?>
                <?php echo adrotate_group(1); ?>
            <?php endif; ?>            
        </div>
    </div>
</div>
