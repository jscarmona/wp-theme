<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>WP-Starter</title>
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <?php wp_head(); ?>
</head>
<body>
    <h1>WordPress Themes</h1>
    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
            <div>
                <h2><?php the_title(); ?></h2>
                <div><?php the_content(); ?></div>
            </div>
        <?php endwhile; ?>
    <?php else : ?>
        <p>There are no posts at this time.</p>
    <?php endif; ?>
    <?php wp_footer(); ?>
</body>
</html>
