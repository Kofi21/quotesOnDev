<?php get_header(); ?>

<div class="quote-author-page-container">

    <i class="fas fa-quote-left"></i>

   

<?php 
//The WordPress Loop: loads post content 
    while( have_posts() ) :
        the_post(); ?>
    
    <div class="authorQuote">
       <p><?php the_content();?></p>
        <h3> - <?php the_title();?> , 
        <a class="source" href="<?php echo get_post_meta( get_the_ID(), '_qod_quote_source_url', true );?>"><span><?php echo get_post_meta( get_the_ID(), '_qod_quote_source', true );?></span></a>
        </h3>

    </div>
    
    <!-- Loop ends -->
    <?php endwhile;?>



    <i class="fas fa-quote-right"></i>    
    <div>
<button id="author-quote" onClick = "window.location.href = 'http://localhost:8888/quotesOnDev/'";
>Show Me Another!</button>
</div>
</div>



<?php get_footer();?>