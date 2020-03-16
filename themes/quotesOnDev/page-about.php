<?php get_header(); ?>
<?php if( have_posts() ) :
//The WordPress Loop: loads post content 
    while( have_posts() ) :
        the_post(); ?>
    
    
    <div class="about">

        <i class="fas fa-quote-left"></i>
            <div>
                <h1>About</h1>
                <p>Quotes on Dev is a project site for the Red Academy Web Developer Professional program. It's used to experiment with Ajax, WP API, jQuery, and other cool things  &#128578;</p>
                <p>This site is heavily inspired by Chris Coyler's <span>Quotes on Design</span>.</p>
            </div>
        <i class="fas fa-quote-right"></i>    

    </div>
    
    <!-- Loop ends -->
    <?php endwhile;?>


<?php else : ?>
        <p>No posts found</p>
<?php endif;?>

<?php get_footer();?>