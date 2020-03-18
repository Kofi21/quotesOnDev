<?php get_header(); ?>
<?php if( have_posts() ) :
//The WordPress Loop: loads post content 
    while( have_posts() ) :
        the_post(); ?>
    
    
    <div class="archives">

        <i class="fas fa-quote-left"></i>
            <div>
                <h1>Archives</h1>
    
                <p>Quote Authors</p>

                <ul>
                
                <?php
                $args = array( 
            'order' => 'ASC',
            'orderby' => 'title',
            'numberposts' => -1
            );
            $quotes = get_posts( $args ); 
            ?>

            <?php foreach ( $quotes as $post ) : setup_postdata( $post ); ?>
            <li>
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </li>
        
            <?php endforeach;?>

            </ul>

    
                <p>Categories</p>
                
                <ul>

                <?php

                $args = array(
                'order' => 'ASC',
                'orderby' => 'name',
                );

                $categories = get_categories( $args );?>


                <?php foreach ($categories as $category) {           
                    $category_id = $category->term_id;
                    $category_name = $category->name; ?>

                    <li>
                        <a href="<?php echo get_category_link($category_id); ?>"><?php echo $category->name;?></a> 
                    </li> 

                <?php };?>

                </ul>


                <p>Tags</p>

                <ul>
                
                <?php
                
                $args = array(
                'order' => 'ASC',
                'orderby' => 'name',
                );

                $tags = get_tags( $args );
                    foreach ($tags as $tag) {           
                    $tag_id = $tag->term_id;
                    $tag_name = $tag->name; ?>
                
                <li>
                    <a href="<?php echo get_tag_link($tag_id); ?>"><?php echo $tag->name;?></a>  
                </li>

                <?php };?>

                </ul>

            </div>
        <i class="fas fa-quote-right"></i>    

    </div>
    
    <!-- Loop ends -->
    <?php endwhile;?>


<?php else : ?>
        <p>No posts found</p>
<?php endif;?>

<?php get_footer();?>


<!-- Category loop -->
<!-- <h2>Categories</h2>
    <ul>
    <?php 
    $args = array(
        'order' => 'ASC', 
    ); 
    $cats = get_categories($args);
    foreach ($cats as $cat) {           
        $cat_id= $cat->term_id;
        $cat_name= $cat->name; ?>
        <li>
        <?php echo '<a href="' . get_category_link( $cat_id ) . '">'.$cat->name.'</a>'; ?>    </li>
    <?php  } ?>
    </ul> -->