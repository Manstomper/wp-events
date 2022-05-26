<?php
$startDate = get_field('start_date');
$endDate = get_field('end_date');
?>
<header>
    <h1><?php the_title(); ?></h1>
    <div class="hero" style="background-image: url('<?= get_the_post_thumbnail_url(null, 'large'); ?>');"></div>
    <?= rig_translate('Alkaa'); ?>
    <time datetime="<?= date('Y-m-d H:i', $startDate); ?>">
        <?= date(get_option('date_format') . ' ' . get_option('time_format'), $startDate); ?>
    </time>
    <br>
    <?= rig_translate('Päättyy'); ?>
    <time datetime="<?= date('Y-m-d H:i', $endDate); ?>">
        <?= date(get_option('date_format') . ' ' . get_option('time_format'), $endDate); ?>
    </time>
</header>
