<?php get_header(); ?>
<!-- Random quote loop -->
<?php if( have_posts() ) : 
    while( have_posts() ) :
        the_post(); ?>
    <!-- Random quote content -->
    <h2><?php the_title(); ?></h2>
    <?php the_content(); ?>
<?php endwhile;?>
<?php else : ?>
        <p>No posts found</p>
<?php endif;?>
<!-- Random quote generator -->
<button class="randomQuote">Click Me!</button>
<div class="test-div">
</div>
<?php get_footer();?>