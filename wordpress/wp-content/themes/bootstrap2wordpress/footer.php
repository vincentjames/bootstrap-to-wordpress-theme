<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Bootstrap_to_WordPress
 */

?>

<?php wp_footer(); ?>

<!--	BOOTSTRAP CORE JAVASCRIPT
        Placed at the bottom of the document so the page loads faster	
====================================================================================== 	 -->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>

    <script src="<?php bloginfo('template_directory'); ?>/assets/js/jquery.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/assets/js/main.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php bloginfo('template_directory'); ?>/assets/js/bootstrap.min.js"></script>
    
    <!-- Typekit Fonts -->
    <script src="https://use.typekit.net/kxd4cbg.js"></script>
    <script>try{Typekit.load({ async: true });}catch(e){}</script>

</body>
</html>
