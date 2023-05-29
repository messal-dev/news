<?php if( adrotate_group(2) == '<!-- Either there are no banners, they are disabled or none qualified for this location! -->' ): ?>
    <div class="post-ads-wrapper">
        <div class="ads-placeholder-card post-ad-placeholder">
            <span class="ads-placeholder-title">ផ្ទាំងពាណិជ្ជកម្ម (1024 x 90)</span>
            <div class="ads-placeholder-contact">
                <span>លេខទូរស័ព្ទ: 096 289 9400</span>
                <span>អុីម៉ែល: messalbiz@gmail.com</span>
            </div>
        </div>
    </div>
<?php else: ?>
    <div class="post-ads-wrapper">
        <?php echo adrotate_group(2); ?>
    </div>
<?php endif; ?>     