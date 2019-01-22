<?php get_header() ?>

<?php if ( have_posts() ) : ?>
    <?php while( have_posts() ) : the_post() ?>
        <h2><a href='<?php the_permalink() ?>'><?php the_title() ?></a></h2>
    
        <div class='content'>
            <?php the_excerpt() ?>
        </div>
    <?php endwhile ?>

<?else : ?>
    <p>Well...unfortunately there's no posts.</p>
<?php endif ?>

<?php get_footer() ?>
