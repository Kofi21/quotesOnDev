<?php get_header(); ?>
<!-- Random quote loop -->
<!--  -->
    <!-- Random quote content -->
    <div class="home-page-container">
    <?php
        $args = array( 
            'post_type' => 'post', 
            'order' => 'RAND',
            'numberposts' => 1
            );
        $quotes = get_posts( $args ); // returns an array of posts
        ?>
        <?php foreach ( $quotes as $quote ) : setup_postdata( $quote ); ?>
    
    <div class="randomQuote">
    <!-- <?php the_content(); ?> -->
    </div>
    
<?php endforeach;?>

<!-- Random quote generator -->
<div>
<button id="quote">Click Me!</button>
</div>
        </div>
<?php get_footer();?>