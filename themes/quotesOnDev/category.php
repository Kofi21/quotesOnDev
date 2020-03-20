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
        <h3> - <?php the_title();?></h3>
    </div>
    
    <!-- Loop ends -->
    <?php endwhile;?>



    <i class="fas fa-quote-right"></i>    

</div>

<?php get_footer();?>