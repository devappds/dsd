<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
<?php
if(has_post_thumbnail()) { ?>

<div class="timg" style="background-image: url('<?php echo $thumb['0'];?>')"> </div>
<?php
    } else { 
 ?>
<div class="timg" style="background-image: url('http://tour2.mormirkam.co.il/wp-content/uploads/2019/07/HAIFA.jpeg')"> </div>
<?php }
 ?>
 
 
 <div class="container-fluid slidersection">

              <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
   <?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
   <?php
if(has_post_thumbnail()) { ?>
            <img src="<?php echo $thumb['0'];?>" alt="">
            <?php
    } else { 
 ?>
 
  
<img src="<?php echo get_bloginfo( 'template_directory' ); ?>/assets/images/defaultbanner.png" />
 <?php }
 ?>
             <?php endwhile; ?>
 <?php else : ?><?php _e("Not Found"); ?><?php endif; ?>
<div class="scontet">
  <div class="sccom">
<h2><?php the_title(); ?></h2>
</div> </div>
</div>


<?php
$currentlang = get_bloginfo('language');
if($currentlang=="en-GB"):
?>

<?php elseif($currentlang=="pl-PL"): ?>

<?php endif; ?>