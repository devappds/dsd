<?php if( get_field('sub_heading') ): ?>
	<h2><?php the_field('sub_heading'); ?></h2>
    
    <?php else : ?>
    
    	<h2>no data</h2>
    
<?php endif; ?>
<!-------------------------------------------------------------------------------------------------------------------->
  <?php if(get_field('height')!=""){?>
           <span><?php echo get_field('height'); ?></span>
        
              <?php } else { ?>
              
               <span>No Rating</span>
              <?php
		}
		
		?>



<?php $status = get_field( "ready_to_move_status" );
			if ($status == 'Yes') { ?>
			    <div class="property-ready"></div>
<?php } ?>
<?php if ($status == 'No') { ?>
			    <div class="property-ready"></div>
<?php } ?>

<!------------------------------------IF ELSE CONDITION------------------------------------------------------------>

          <?php $secondbg3 = get_field( "starting_price_aed_price" );

if($secondbg3 != "") : ?>
	 <strong class="aedprice-box"> <?php echo $secondbg3; ?> </strong>
<?php else : ?>
           
           <strong class="aedprice-box"><?php echo get_field( "ask_for_price_text" );?></strong>
           
<!-------------------------------YES NO CONDITION----------------------------------------------------------------->           
           
 <?php $status = get_field( "sold_status_of_property" );
			if ($status == 'Yes') { ?>
  <img class="soldout-img" src="<?php  echo $settings['footer_logo'];  ?>" alt="sold out property.">
  <?php } ?>
  
  
<!----------------------------------DISPLAY RATING ACCODING ACF TEXT VALUE------------------------------------------>  

  
 <p class="rate">
                      <?php  $star = $post_meta['hotel_rank'][0];
					  if($star != '') {
					  ?>
			   <span><?php echo $star;?> Rating</span>
			 <?php for ($x = 1; $x <= $star; $x++) { ?>
             
               <i class="fa fa-star" aria-hidden="true"></i>
			 <?php }  ?>
             <?php } else { ?>
             <span>No Rating</span>
              <?php
		}
		
		?>
             </p>
             
             
<!------------------------------------DISPLAY STAR RATING------------------------------------------------------------> 
             
             
<div class="star1"> 
              <?php  $star = get_field('star_rating');
			  
			 for ($x = 1; $x <= $star; $x++) { ?>
                <em class="fa fa-star"></em> 
			 <?php }  ?>
			 
             
<!---------------------------------------is acf field is blanck then display none that div------------------------------->
<?php $image = get_field( "banner_image" );
if($image != "") { ?>
<div class="container-fluid aftereventbanner eventregistration" style="background-image: url('<?php echo $image['url']; ?>')">
  <div class="afterevent-overlay"></div>
  <?php } ?>
</div>
<style>

.container-fluid.aftereventbanner {
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center center;
    position: relative;
    display: table;
    height: 350px;
}
.eventtite h2 {
    color: #fff;
    text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25), 0px 4px 4px rgba(0, 0, 0, 0.25);
    font-size: 35px;
    font-weight: normal;
    position: relative;
}
.eventtite h2::after {
    content: "";
    width: 95px;
    border-bottom: 3px solid #fc5c64;
    z-index: 999;
    position: absolute;
    top: 45px;
    left: 0;
    right: 0;
    text-align: center;
    margin: 0 auto;
}
.afterevent-overlay {
    align-items: center;
    background-image: linear-gradient(180deg, rgba(0, 0, 0, 0.15) 0%, rgba(0, 0, 0, 0.5) 100%);
    display: flex;
    display: -webkit-flex;
    height: 100%;
    justify-content: center;
    left: 0;
    position: absolute;
    top: 0;
    width: 100%;
    right: 0;
    z-index: 5;
}

</style>
<!--------------------------------If ELSE CONDITION---------------------------------->

<?php $image = get_field( "banner_image" );
if($image != "") { ?>
<div class="container-fluid aftereventbanner eventregistration" style="background-image: url('<?php echo $image['url']; ?>')">
 
  <div class="afterevent-overlay"></div>
    
 
  <div class="eventcountdown">
    <div class="eventtimer">
      <?php dynamic_sidebar( 'eventcountdown' ); ?>
    </div>
  </div>
 
</div>
 <?php
    } else { 
 ?>
 <div class="container-fluid aftereventbanner eventregistration" style="background-image: url('<?php echo $image['url']; ?>')">
 
  <div class="afterevent-overlay"></div>
    
 
  <div class="eventcountdown">
    <div class="eventtimer">
      <?php dynamic_sidebar( 'eventcountdown' ); ?>
    </div>
  </div>
 
</div>
 <?php }
 ?>
 
<!---------------------------------------------------------------------------------->

<?php if ( get_field( 'quando_date' ) ): ?>

<?php echo get_field( "quando_date" );?>

<?php else: // field_name returned false ?>

Please Enter date Of event

<?php endif; // end of if field_name logic ?>
<!--------------------------------section title------------------------------------->
<div class="sectiontitle"><h2>Seja um associado</h2></div>
<style>
.sectiontitle h2 {
    font-style: normal;
    font-weight: 500;
    font-size: 60px;
    line-height: 51px;
    text-align: center;
    letter-spacing: 0.005em;
    color: #000;
    display: table;
    margin: 0 auto;
}
.sectiontitle h2::after {
    border-bottom: 25px solid #FED6D8;
    content: "";
    display: block;
    float: none;
    margin: 0 auto;
    padding-top: 7px;
    position: relative;
    text-align: center;
    z-index: -1;
    bottom: 24px;
    left: -40px;
    width: calc(100% + 80px);
}
</style>

<!---------------------------------------------------------------->
<?php
if(get_field('main_title'))
{
    echo '<h1>' . get_field('main_title') . '</h1>';
}
else 
{
    echo '<h1>' . the_title() . '</h1>' ;
}
?>

<!----------------------------------->
<?php if ( get_field( 'field_name' ) ): ?>

This is displayed when the field_name is TRUE or has a value.

<?php else: // field_name returned false ?>

This is displayed when the field is FALSE, NULL or the field does not exist.

<?php endif; // end of if field_name logic ?>


<?php $shortcodes = get_field("portfolio_client_common_slider_shortcode",get_option( 'page_on_front')); ?> <?php echo do_shortcode($shortcodes); ?>

----------------------------------------------------------------

<?php if( have_rows('banner_fields') ): ?>
	<?php while( have_rows('banner_fields') ): the_row(); 
		
		// Get sub field values.
		$image = get_sub_field('banner_left_side_image');
		$text = get_sub_field('banner_right_side_text'); 
		
		
		?>
        <div class="row">
          <div class="col-sm-12 col-md-4 col-lg-4 col-xs-12 bannersection_left">
            <div class="bannerleft_img"> <img src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" /></div>
          </div>
          <div class="col-sm-12 col-md-8 col-lg-8 col-xs-12 bannersection_right">
            <div class="bannerright_content"> 
            <?php the_sub_field('banner_right_side_text'); ?>
            
<?php if ( get_sub_field( 'banner_button_text' ) ): ?>

<a href="<?php echo $hero['banner_button_link']; ?>" class="teambtn whitebgyellotext_btn" style="color: <?php echo get_sub_field( "button_color" );?>;"><?php echo get_sub_field( "banner_button_text" );?></a>

<?php else: // field_name returned false ?>



<?php endif; // end of if field_name logic ?>
            
     
            
                          <style>
.whitebgyellotext_btn:hover, .whitebgyellotext_btn:focus {
	color:#fff !important;
	background: <?php echo get_sub_field( "button_color" )?>;
}

</style>
              </div>
          </div>
        </div>
        	<?php endwhile; ?>
<?php endif; ?>


----------------

     <?php
$hero = get_field('we_provide_section_fields');
if( $hero ): ?>
      
      <?php echo $hero['content']; ?> 
      <?php endif; ?>