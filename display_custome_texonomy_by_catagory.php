<div class="faq-listing" id="order">
  <h2><?php echo get_field( "order_faqs_text" );?></h2>
  <?php      
$args = array(
    'post_type' => 'faq',
	 'posts_per_page' => -1,
    'tax_query' => array(
        array(
            'taxonomy' => 'Faq_category',
            'field' => 'ID', //can be set to ID
            'terms' => 7 //if field is ID you can reference by cat/term number
        )
    )
);
$query = new WP_Query( $args );

?>
  <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
  <div class="faq-item">
    <?php the_content(); ?>
  </div>
  <?php endwhile; ?>
  <?php endif; ?>
  <?php wp_reset_query(); ?>
</div>

<!--Post catagory-->

 <?php $content = get_the_content(); echo mb_strimwidth($content, 0, 400, '...');?>
 
 

   <?php
$catList = '';
foreach((get_the_category()) as $cat) {
	$catID = get_cat_ID( $cat->cat_name );
	$catLink = get_category_link( $catID );
	if(!empty($catList)) {
		$catList .= '';
	}
	$catList .= '<a href="'.$catLink.'">'.$cat->cat_name.'</a>';
}

?>
 <div class="postcatagory"><span><?php echo $catList;?></span></div>
 
 
<?php $content = get_the_content();

echo substr($content, 0, 100); ?>

<?php  $content = get_the_content();

echo substr($content, 0, 100);?>



<?php
function prefix_category_title( $title ) {
    if ( is_category() ) {
        $title = single_cat_title( '', false );
    }
    return $title;
}
add_filter( 'get_the_archive_title', 'prefix_category_title' );

add_action( 'wp_enqueue_scripts', 'myplugin_enqueue' );

function myplugin_enqueue() {
    // wp_register_script(...
    // wp_enqueue_script(...
}


add_filter('style_loader_tag', 'myplugin_remove_type_attr', 10, 2);
add_filter('script_loader_tag', 'myplugin_remove_type_attr', 10, 2);

function myplugin_remove_type_attr($tag, $handle) {
    return preg_replace( "/type=['\"]text\/(javascript|css)['\"]/", '', $tag );
}


?>
<?php   $args = array(  
        'post_type' => 'stores',
        'post_status' => 'publish',
        'posts_per_page' => -1, 
		 'order' => 'ASC'
        
    );

    $loop = new WP_Query( $args ); 
        
    while ( $loop->have_posts() ) : $loop->the_post();  ?>
<?php   endwhile;

    wp_reset_postdata();  ?>
	
    
    ------------------------------
    
      <?php
                $category_id =  get_field('security_post_catgory_id', get_option( 'page_on_front' ));
                $catquery = new WP_Query( 'cat=' .$category_id. '&posts_per_page=-1' );
                while($catquery->have_posts()) : $catquery->the_post();
                ?>
				
                     <?php endwhile; ?>