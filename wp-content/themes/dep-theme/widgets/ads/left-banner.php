<?php if( adrotate_group(4) == '<!-- Either there are no banners, they are disabled or none qualified for this location! -->' ): ?>
    <div class="feature-ads-wrapper">
        <div class="ads-placeholder-card feature-ad-placeholder">
            <span class="feature-ads-placeholder-title">ផ្ទាំងពាណិជ្ជកម្ម (300 x 250)</span>
        </div>
    </div>
<?php else: ?>
    <div class="feature-ads-wrapper">
        <?php echo adrotate_group(4); ?>
    </div>
<?php endif; ?>     