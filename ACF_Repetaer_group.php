




  <?php
$hero = get_field('banner_fields');
if( $hero ): ?>
    <div class="hero_content wow fadeInUp"> <?php echo $hero['text']; ?>
      <div class="round-hover-btn"> <a href="<?php echo $hero['button_link']; ?>" class="btn_circle_arrow"> <?php echo $hero['button_text']; ?> <span class="circle-arrow"> <svg viewBox="0 0 36 36">
        <circle cx="18" cy="18" r="17.5" fill="none"></circle>
        </svg> </span> </a> </div>
    </div>
    <?php endif; ?>








        <?php if( have_rows('about_three_box_content') ): ?>
        <?php while( have_rows('about_three_box_content') ): the_row(); 
		

		$ab_box1_icon = get_sub_field('about_first_box_icon');

		
		
		?>
        
        
       <?php echo $ab_box1_icon; ?> 
        <?php endwhile; ?>
        <?php endif; ?>
		
        
        
            <?php


if( have_rows('bottom_gray_bg_boxes') ):


    while( have_rows('bottom_gray_bg_boxes') ) : the_row();?>

    <?php   
        $boxdesc_text = get_sub_field('box_content');?>
        
        <div class="col-md-6 col-sm-6 col-md-6 col-xs-12 four-boxs two-boxs-content">
        <div class="fourserviceBox">
          <div class="fouservice-content">
           <?php echo $boxdesc_text; ?>
          </div>
        </div>
      </div>
        

  <?php
    endwhile;


else :

endif;?>
    
      
      
      