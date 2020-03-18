<?php get_header(); ?>
<div class="tag-page-container">

<i class="fas fa-quote-left"></i>

<?php 
//The WordPress Loop: loads post content 
    while( have_posts() ) :
        the_post(); ?>
    
    
    <div class="tags">

       <?php the_content();?>
        <?php the_title();?>

    </div>
    
    <!-- Loop ends -->
    <?php endwhile;?>

<i class="fas fa-quote-right"></i>    

</div>


<?php get_footer();?>