<?php get_header(); ?>
<div class="submit-page-container">
<?php if( have_posts() ) :
//The WordPress Loop: loads post content 
    while( have_posts() ) :
        the_post(); ?>
    
    
    <div class="randomQuote">

<i class="fas fa-quote-left"></i>
<div>
       <?php the_content();?>
        <p>SOURCE AND URL</p>
</div>
        <i class="fas fa-quote-right"></i>    

 </div>
    
    <!-- Loop ends -->
    <?php endwhile;?>

    <?php the_posts_navigation();?>

<?php else : ?>
        <p>No posts found</p>
<?php endif;?>

</div>
<?php get_footer();?>