<?php get_header(); ?>
<?php get_template_part('templates/app-header'); ?>

<main>
    <article>
        <h1><?= rig_translate('Page not found'); ?></h1>
        <p><?= rig_translate('The page you were looking for was not found.'); ?></p>
    </article>
</main>

<?php get_template_part('templates/app-footer'); ?>
<?php get_footer(); ?>
