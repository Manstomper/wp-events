<?php get_header(); ?>
<?php require __DIR__ . '/app-header.php'; ?>

<main>
    <?php the_post(); ?>
    <article class="event">
        <?php require __DIR__ . '/content-header.php'; ?>
        <?php the_content(); ?>
        <?php comment_form(); ?>
    </article>
</main>

<?php get_template_part('templates/app-footer'); ?>
<?php get_footer(); ?>
