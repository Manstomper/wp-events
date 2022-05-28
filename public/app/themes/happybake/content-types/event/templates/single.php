<?php get_header(); ?>
<?php require __DIR__ . '/app-header.php'; ?>

<main>
    <?php the_post(); ?>
    <article class="event">
        <?php require __DIR__ . '/content-header.php'; ?>
        <?php the_content(); ?>
        <?php if (!is_user_logged_in()) { ?>
            <?php comment_form(); ?>
        <?php } else { ?>
            <p><em><?= rig_translate('Ilmoittautumislomake on piilotettu sisäänkirjautuneilta.'); ?></em></p>
        <?php } ?>
    </article>
</main>

<?php get_template_part('templates/app-footer'); ?>
<?php get_footer(); ?>
