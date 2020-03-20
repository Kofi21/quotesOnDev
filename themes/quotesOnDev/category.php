<?php get_header(); ?>

<div class="category-page-container">

    <i class="fas fa-quote-left"></i>

    <h1>Category: <?php echo single_term_title();?></h1>

<?php 
//The WordPress Loop: loads post content 
    while( have_posts() ) :
        the_post(); ?>
    

    <div class="categoryQuote">
       <p><?php the_content();?></p>
        <h3> - <?php the_title();?> , 
        <a class="source" href="<?php echo get_post_meta( get_the_ID(), '_qod_quote_source_url', true );?>"><span><?php echo get_post_meta( get_the_ID(), '_qod_quote_source', true );?></span></a>
        </h3>
    </div>

    <!-- Loop ends -->
    <?php endwhile;?>
    <i class="fas fa-quote-right"></i>    


    <div class="pagination">
    <a href="#">&laquo;</a>
    <a href="#">1</a>
    <a href="#">2</a>
    <a href="#">3</a>
    <a href="#">&rarr;</a>
    </div>

</div>

<?php get_footer();?>