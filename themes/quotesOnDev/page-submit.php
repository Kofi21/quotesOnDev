<?php get_header(); ?>

<?php
if ( is_user_logged_in() ) {?>

       <section class="submit-quote">
       <i class="fas fa-quote-left"></i>    

            <h3>Submit a Quote</h3>

            <form>

            <p>Author of Quote</p>
            <input type='text'/>
        
            <p>Quote</p>
            <textarea type='text'></textarea>
        
            <p>Where did you find this quote? (e.g. book name) </p>
            <input type='text'/>
        
            <p>Provide the URL of the quote source, if available.</p>
            <input type='text'/>
        
            </form>

            <div>
                <button id="submit-quote">Submit Quote</button>
            </div>
            <i class="fas fa-quote-right"></i>    

        </section>


    
<?php
} else {?>


    <section class="login">
    
<i class="fas fa-quote-left"></i>

      <div>
        <h3>Submit a Quote</h3>
        <p>Sorry, you must be logged in to submit a quote!</p>
        <a href="<?php echo get_home_url() . '/wp-login.php' ;?>">
         <h4>Click here to login</h4>
        </a>
</div>
<i class="fas fa-quote-right"></i>    

    </section>

<?php }?>



<?php get_footer();?>