<?php get_header(); ?>
<!-- Random quote loop -->
<!--  -->
    <!-- Random quote content -->
    <div class="home-page-container">
    <?php
        $args = array( 
            'post_type' => 'post', 
            'or der' => 'RAND',
            'numberposts' => 1
            );
        $quotes = get_posts( $args ); // returns an array of posts
        ?>
        <?php foreach ( $quotes as $quote ) : setup_postdata( $quote ); ?>
          
        
        <div class="randomQuote">

        <i class="fas fa-quote-left"></i>
        <div>
               <?php the_content();?>
                <p>SOURCE AND URL</p>
        </div>
                <i class="fas fa-quote-right"></i>    

         </div>
        
    

<?php endforeach;?>

<!-- Random quote generator -->
<div>
<button id="quote">Show Me Another!</button>
</div>
        </div>
<?php get_footer();?>