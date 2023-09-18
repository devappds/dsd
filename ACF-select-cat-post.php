<div class="fullwidthpost_press row">
      <?php 
 $term = get_field('select_catagory_of_first_news_post_');
	?>
      <?php
	
	$args = array(
        'post_type' => 'post', /*Post type (plays)*/
		'posts_per_page' => 1,
		 'order' => 'DESC',
        'tax_query' => array(
            array(
                'taxonomy' => 'category', /*Taxonomy to search (genre)*/
                'field'    => 'slug',
                'terms'    =>  $term, /*Search category for (comedy)*/
            ),
        ),
    );
    $query = new WP_Query( $args );
	
	 if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); 
	?>
      <div class="col-md-6 col-sm-6 cbuton_left">
        <?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
        <img src="<?php echo $thumb['0'];?>" alt=""> </div>
      <div class="col-md-6 col-sm-6 cbuton_right">
        <h6><?php echo esc_html( $term->name ); ?></h6>
        <h2><a href="<?php the_permalink(); ?>">
          <?php the_title(); ?>
          </a> </h2>
        <p>
          <?php the_excerpt(); ?>
        </p>
        <div class="fflex">
          <div class="fccom"> <img src=" <?php the_field('author_image'); ?>" alt="">
            <div class="ffcom">
              <h4>
                <?php the_field('author_name'); ?>
              </h4>
              <p>
                <?php the_field('post_date'); ?>
              </p>
            </div>
          </div>
          <a href="<?php the_permalink(); ?>"><img src="<?php bloginfo('template_directory'); ?>/images/arrow.png" alt=""> </a> </div>
      </div>
      <?php endwhile; ?>
      <?php endif; ?>
      <?php wp_reset_query(); ?>
    </div>