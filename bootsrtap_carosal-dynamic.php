<?php
     $args = array(
     'post_type' => 'slider',
     'posts_per_page' => -1,
     'order' => 'ASC',
   );
$slide = new WP_Query($args);?>
<?php if ($slide->have_posts()): ?>

<div id="carouselBanner" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <?php
        $args = array(
            'post_type' => 'slider',
            'orderby' => 'menu_order title',
            'order'   => 'ASC',
        );
        $query = new WP_Query( $args );
        ?>
    <?php if($query->have_posts()) : ?>
    <?php $i = 0; ?>
    <?php while($query->have_posts()) : $query->the_post() ?>
    <li data-target="#carouselBanner" data-slide-to="<?php echo $i ?>" class="<?php if($i === 0): ?>active<?php endif; ?>"></li>
    <?php $i++; ?>
    <?php endwhile ?>
    <?php endif ?>
    <?php wp_reset_postdata(); ?>
  </ol>
  <div class="carousel-inner">
    <?php $i = 0;while ($slide->have_posts()): $slide->the_post();?>
    <div class="carousel-item <?php if (0 == $i) {echo ' active';}?>">
      <?php $feat_image = wp_get_attachment_url(get_post_thumbnail_id($post->ID) );?>
      <?php if($feat_image!=""){ ?>
      <img src="<?php echo $feat_image;?>" class="d-block w-100" alt="..."/>
      <?php } ?>
    </div>
    <?php $i++;endwhile;?>
  </div>
  
  <!-- Left and right controls --> 
  
  <a class="carousel-control-prev" href="#carouselBanner" role="button" data-slide="prev"> <i class="fas fa-arrow-left" aria-hidden="true"></i> <span class="sr-only">Previous</span> </a> <a class="carousel-control-next" href="#carouselBanner" role="button" data-slide="next"> <i class="fas fa-arrow-right" aria-hidden="true"></i> <span class="sr-only">Next</span> </a> </div>
<?php wp_reset_postdata();endif;?>
<script>

 $(document).bind('keyup', function(e) {
        if(e.which == 39){
            $('.carousel').carousel('next');
        }
        else if(e.which == 37){
            $('.carousel').carousel('prev');
        }
    });
	
	</script> 
