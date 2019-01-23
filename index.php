<?php get_header() ?>

<?php if ( have_posts() ) : ?>
    <?php while( have_posts() ) : the_post() ?>
        <h2><a href='<?php the_permalink() ?>'><?php the_title() ?></a></h2>
    
        <div class='content'>
            <?php the_excerpt() ?>
            Written by: <?php the_author() ?></br>
            <?php the_date() ?>
            <?php the_post_thumbnail() ?>
        </div>
    <?php endwhile ?>

    <?php  wp_link_pages(); ?>

<?else : ?>
    <p>Well...unfortunately there's no posts.</p>
<?php endif ?>

<?php get_footer() ?>
