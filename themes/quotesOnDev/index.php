<?php get_header(); ?>


    <!-- Random quote content -->
    <div class="home-page-container">

    <?php 
     query_posts(array(
        'showposts' => 1,
        'orderby' => 'rand',
        'post-type' => 'post'
    ));
    
    if( have_posts() ) :
//The WordPress Loop: loads post content 
    while( have_posts() ) :
        the_post(); ?>

<div class="randomQuote">
        <i class="fas fa-quote-left"></i>
        
        <div>
            <?php the_content();?>
        <p>- <?php the_title();?></p>
        </div>

        <i class="fas fa-quote-right"></i>    
        </div>
    
    <!-- Loop ends -->
    <?php endwhile;?>

</section>

<?php else : ?>
        <p>No posts found</p>
<?php endif;?>

<!-- Random quote generator -->
<div>
<button id="quote">Show Me Another!</button>
</div>
        </div>
<?php get_footer();?>