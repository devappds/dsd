<?php
/**
 * The front page template file
 *
 * If the user has selected a static page for their homepage, this is what will
 * appear.
 * Learn more: https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since Twenty Seventeen 1.0
 * @version 1.0
 */

get_header(); ?>

<section class="banner" id="home" wow fadeInUp>
  <div class="container-fluid bannerpart">
    <div class="owl-carousel owl-theme" id="home-slider">
      <?php  $my_query = new WP_Query('post_type=slider&posts_per_page=-1&order=asc');?>
      <?php  while ($my_query->have_posts()) : $my_query->the_post(); ?>
      <?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
      <div class="item" style="background-image:url(<?php echo $thumb['0'];?>);">
        <div class="banner-overlay"></div>
        <div class="cover">
          <div class="bannertext-common wow fadeInUp">
            <div class="bannertext">
              <?php the_content(); ?>
              <div class="readmore-btn"><?php echo get_field( "read_more_button_text_&_link" );?></div>
            </div>
          </div>
        </div>
      </div>
      <?php endwhile;  wp_reset_query(); ?>
    </div>
  </div>
</section>
<div class="container-fluid aboutus-part" wow fadeInUp>
  <div class="container">
    <div class="stitle">
      <div class="section-title">
        <h2><?php echo get_field('about_us_title', get_option( 'page_on_front' ));?> </h2>
        <span class="three_line"></span></div>
    </div>
    <div class="aboutus-common">
      <div class="row">
        <div class="col-sm-7 col-md-7 col-lg-7 col-xs-12 about-left wow fadeInLeft">
          <div class="about-left-common">
            <div class="about-left-content">
              <?php if(have_posts()) :  while(have_posts()) : the_post(); ?>
              <?php the_content(); ?>
              <?php endwhile; ?>
              <?php else : ?>
              <?php _e("Not Found"); ?>
              <?php endif; ?>
            </div>
            <div class="readmore-btn"><?php echo get_field('about_us_read_more_button_text_&_link', get_option( 'page_on_front' ));?></div>
          </div>
        </div>
        <div class="col-sm-5 col-md-5 col-lg-5 col-xs-12 about-right wow fadeInRight">
          <div class="about-right-img">
            <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
            <?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
            <img src="<?php echo $thumb['0'];?>" alt="">
            <?php endwhile; ?>
            <?php else : ?>
            <?php _e("Not Found"); ?>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="container-fluid ourprducts-part wow fadeInUp">
  <div class="container">
    <div class="stitle">
      <div class="section-title">
        <h2><?php echo get_field('our_products_title', get_option( 'page_on_front' ));?></h2>
        <span class="three_line"></span></div>
    </div>
    <div class="product-common">
      <div class="row">
        <?php
        $args = array( 'post_type' => 'product', 'posts_per_page' => 5, 'orderby' => 'rand' );
        $loop = new WP_Query( $args );
        while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>
        <div class="col-md-6 col-sm-6 col-lg-3 col-xs-12 product-box-column">
          <div class="product-grid"> <a href="<?php the_permalink(); ?>" class="image">
            <?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
            <div class="product-image" style="background-image:url(<?php echo $thumb['0'];?>);"> </a> <span class="product-discount-label" style="display:none;">-33%</span>
              <ul class="product-links">
                <li><a href="<?php the_permalink(); ?>"><i class="fa fa-eye"></i></a></li>
                <li><?php echo do_shortcode('[ti_wishlists_addtowishlist]');?></li>
              </ul>
            </div>
            <div class="product-content">
              <?php if ($average = $product->get_average_rating()) : ?>
              <ul class="woocommerce">
                <li> <?php echo '<div class="star-rating" title="'.sprintf(__( 'Rated %s out of 5', 'woocommerce' ), $average).'"><span style="width:'.( ( $average / 5 ) * 100 ) . '%"></span></div>'; ?></li>
              </ul>
              <h3 class="title yesstar"><a href="<?php the_permalink(); ?>">
                <?php the_title(); ?>
                </a></h3>
              <?php else :?>
              <div class="noratting"></div>
              <h3 class="title nostar</tt>"><a href="<?php the_permalink(); ?>">
                <?php the_title(); ?>
                </a></h3>
              <?php endif; ?>
              <div class="price">
                <?php   echo $product->get_price_html(); ?>
              </div>
              <a class="add-to-cart" href="<?php the_permalink(); ?>?add-to-cart=<?php echo $post->ID;?>">add to cart</a> </div>
          </div>
        </div>
        <?php endwhile; ?>
        <?php wp_reset_query(); ?>
      </div>
      <div class="readmore-btn"><?php echo get_field('more_products_button_text_&_link', get_option( 'page_on_front' ));?></div>
    </div>
  </div>
</div>
<div class="container-fluid testimonial-part wow fadeInUp">
  <div class="container">
    <div class="stitle">
      <div class="section-title">
        <h2><?php echo get_field('testimonial_title', get_option( 'page_on_front' ));?></h2>
        <span class="three_line"></span></div>
    </div>
    <section id="testim" class="testim"> 
      <!--         <div class="testim-cover"> -->
      <div class="wrap"> <span id="right-arrow" class="arrow right fa fa-chevron-right"></span> <span id="left-arrow" class="arrow left fa fa-chevron-left "></span>
        <ul id="testim-dots" class="dots">
          <?php
        $args = array(
            'post_type' => 'testimonial',
            
            'order'   => 'ASC',
        );
        $query = new WP_Query( $args );
        ?>
          <?php if($query->have_posts()) : ?>
          <?php $i = 0; ?>
          <?php while($query->have_posts()) : $query->the_post() ?>
          <li class="dot <?php if($i === 0): ?>active<?php endif; ?>"></li>
          <?php $i++; ?>
          <?php endwhile ?>
          <?php endif ?>
          <?php wp_reset_postdata(); ?>
        </ul>
        <div id="testim-content" class="cont">
          <?php
     $args = array(
     'post_type' => 'testimonial',
     'posts_per_page' => -1,
     'order' => 'ASC',
   );
$slide = new WP_Query($args);?>
          <?php if ($slide->have_posts()): ?>
          <?php $i = 0;while ($slide->have_posts()): $slide->the_post();?>
          <div class="<?php if (0 == $i) {echo ' active';}?>">
            <div class="testimonial-text">
              <div class="img">
                <?php $feat_image = wp_get_attachment_url(get_post_thumbnail_id($post->ID) );?>
                <?php if($feat_image!=""){ ?>
                <img src="<?php echo $feat_image;?>" alt="..."/>
                <?php } ?>
              </div>
              <h2>
                <?php the_title();?>
              </h2>
              <?php the_content();?>
            </div>
          </div>
          <?php $i++;endwhile;?>
          <?php wp_reset_postdata();endif;?>
        </div>
      </div>
      <p><?php echo get_field('testimonial_section_bottom_line', get_option( 'page_on_front' ));?></p>
    </section>
  </div>
</div>
<script src="https://use.fontawesome.com/1744f3f671.js"></script> 
<script>

var	testim = document.getElementById("testim"),
		testimDots = Array.prototype.slice.call(document.getElementById("testim-dots").children),
    testimContent = Array.prototype.slice.call(document.getElementById("testim-content").children),
    testimLeftArrow = document.getElementById("left-arrow"),
    testimRightArrow = document.getElementById("right-arrow"),
    testimSpeed = 4500,
    currentSlide = 0,
    currentActive = 0,
    testimTimer,
		touchStartPos,
		touchEndPos,
		touchPosDiff,
		ignoreTouch = 30;
;

window.onload = function() {

    // Testim Script
    function playSlide(slide) {
        for (var k = 0; k < testimDots.length; k++) {
            testimContent[k].classList.remove("active");
            testimContent[k].classList.remove("inactive");
            testimDots[k].classList.remove("active");
        }

        if (slide < 0) {
            slide = currentSlide = testimContent.length-1;
        }

        if (slide > testimContent.length - 1) {
            slide = currentSlide = 0;
        }

        if (currentActive != currentSlide) {
            testimContent[currentActive].classList.add("inactive");            
        }
        testimContent[slide].classList.add("active");
        testimDots[slide].classList.add("active");

        currentActive = currentSlide;
    
        clearTimeout(testimTimer);
        testimTimer = setTimeout(function() {
            playSlide(currentSlide += 1);
        }, testimSpeed)
    }

    testimLeftArrow.addEventListener("click", function() {
        playSlide(currentSlide -= 1);
    })

    testimRightArrow.addEventListener("click", function() {
        playSlide(currentSlide += 1);
    })    

    for (var l = 0; l < testimDots.length; l++) {
        testimDots[l].addEventListener("click", function() {
            playSlide(currentSlide = testimDots.indexOf(this));
        })
    }

    playSlide(currentSlide);

    // keyboard shortcuts
    document.addEventListener("keyup", function(e) {
        switch (e.keyCode) {
            case 37:
                testimLeftArrow.click();
                break;
                
            case 39:
                testimRightArrow.click();
                break;

            case 39:
                testimRightArrow.click();
                break;

            default:
                break;
        }
    })
		
		testim.addEventListener("touchstart", function(e) {
				touchStartPos = e.changedTouches[0].clientX;
		})
	
		testim.addEventListener("touchend", function(e) {
				touchEndPos = e.changedTouches[0].clientX;
			
				touchPosDiff = touchStartPos - touchEndPos;
			
				console.log(touchPosDiff);
				console.log(touchStartPos);	
				console.log(touchEndPos);	

			
				if (touchPosDiff > 0 + ignoreTouch) {
						testimLeftArrow.click();
				} else if (touchPosDiff < 0 - ignoreTouch) {
						testimRightArrow.click();
				} else {
					return;
				}
			
		})
}
</script>

<?php
get_footer();









