<?php get_header(); ?>
<?php get_template_part('templates/app-header'); ?>

<main>
    <div class="front-page">
        <?php if (has_post_thumbnail()) { ?>
            <div class="hero">
                <?= wp_get_attachment_image(get_post_thumbnail_id(), 'large'); ?>
            </div>
        <?php } ?>
        <h1><?php the_title(); ?></h1>
        <?php the_content(); ?>
        <section class="block-events" data-app="events"></section>
    </div>
</main>

<?php get_template_part('templates/app-footer'); ?>
<?php get_footer(); ?>
