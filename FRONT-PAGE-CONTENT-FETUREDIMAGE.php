<?php
//get front page data by id

$front_page_id = get_option('page_on_front');
$page_id = get_option('page_on_front');
$page_data = get_page( $page_id ); 

//store page title and content in variables

$content = apply_filters('the_content', $page_data->post_content);
?>


<div class="banner-right-image">
  <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
  <?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
  <?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' ); ?>
  <img src="<?php echo $thumb['0'];?>" alt="">
  <?php endwhile; ?>
  <?php else : ?>
  <?php _e("Not Found"); ?>
  <?php endif; ?>
</div>
<div class="videoabouttext">
  <?php if(have_posts()) :  while(have_posts()) : the_post(); ?>
  <?php the_content(); ?>
  <?php endwhile; ?>
  <?php else : ?>
  <?php _e("Not Found"); ?>
  <?php endif; ?>
</div>
<?php  $post_id = get_option('page_on_front');
		  
		 
$post_content = get_post($post_id);
$content = $post_content->post_content;
echo do_shortcode( $content );//executing shortcodes

		  
		  
		  ?>
<?php 
	    $post_id = get_option('page_on_front');
	   $url = get_the_post_thumbnail_url( $post_id, 'full' );?>
<div class="about-right-img" style="background-image:url('<?php echo $url;?>');"> </div>
<?php $feat_image = wp_get_attachment_url(get_post_thumbnail_id($post->ID) );
                $image_id = get_post_thumbnail_id();

$image_alt = get_post_meta($image_id, '_wp_attachment_image_alt', TRUE); ?>
<?php if($feat_image!=""){ ?>
<img src="<?php echo $feat_image;?>" alt="<?php echo $image_alt; ?>"/>
<?php } ?>
