<?php get_header(); ?>
<?php get_template_part('templates/app-header'); ?>

<?php global $wp_query; ?>

<main>
    <h1><?= rig_translate('Search'); ?></h1>

    <p>
        <?= sprintf(rig_translate('%s result(s) for'), $wp_query->found_posts); ?>
        &quot;<?= get_search_query(); ?>&quot;.
    </p>

    <?php if (have_posts()) { ?>
        <ul>
            <?php while (have_posts()) { ?>
                <?php the_post(); ?>
                <li>
                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                </li>
            <?php } ?>
        </ul>
    <?php } ?>

    <?php get_search_form(); ?>
</main>

<?php get_template_part('templates/app-footer'); ?>
<?php get_footer(); ?>
