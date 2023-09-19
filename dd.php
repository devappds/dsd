 <?php wp_nav_menu( array('menu' => 'mainmenu','container_class' => '','items_wrap' => '<ul class="navigation">%3$s</ul>',));?>


/** logo dynamic */
<?php echo esc_url( home_url( '/' ) ); ?>

function nd_dosth_theme_setup() {

// Add <title> tag support
add_theme_support( 'title-tag' );  

// Add custom-logo support
add_theme_support( 'custom-logo' );

}
add_action( 'after_setup_theme', 'nd_dosth_theme_setup');


<?php the_custom_logo(); ?>

/** sticky header */

<script>
new WOW().init();
</script> 
<script>
$(window).scroll(function(){
    if ($(window).scrollTop() >= 300) {
        $('.mainheader').addClass('fixed-header');
		
        
    }
    else {
        $('.mainheader').removeClass('fixed-header');
      
    }
	
	
});
</script> 
<script>
$(document).ready(function() {
$(window).on("scroll", function() {
var fromTop = $(window).scrollTop();
$("body").toggleClass("down", (fromTop >300));
});
});
</script> 
<style>
.fixed-header {
	position: fixed !important;
	top: 0;
	background: #041648 !important;
	z-index: 999;
	width: 100%;
	transition: 0.8s top cubic-bezier(.3, .73, .3, .74);
}
</style>


/** widegt */

register_sidebar(
		array(
			'name'          => __( 'Footer 1', 'twentyseventeen' ),
			'id'            => 'sidebar-2',
			'description'   => __( 'Add widgets here to appear in your footer.', 'twentyseventeen' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);


    <?php dynamic_sidebar( 'sidebar-5' ); ?>

/** bs carosal */
