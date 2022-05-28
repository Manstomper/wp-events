<?php
$startDate = get_field('start_date');
$endDate = get_field('end_date');
?>

<header>
    <h1><?php the_title(); ?></h1>
    <div class="hero" style="background-image: url('<?= get_the_post_thumbnail_url(null, 'large'); ?>');"></div>
    <?= rig_translate('Alkaa'); ?>
    <time datetime="<?= $startDate; ?>">
        <?= date(get_option('date_format') . ' ' . get_option('time_format'), strtotime($startDate)); ?>
    </time>
    <br>
    <?= rig_translate('Päättyy'); ?>
    <time datetime="<?= $endDate; ?>">
        <?= date(get_option('date_format') . ' ' . get_option('time_format'), strtotime($endDate)); ?>
    </time>
</header>
