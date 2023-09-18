<?php

 /*

Template Name: About Us

*/



get_header(); ?>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.carousel.min.css"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.theme.default.min.css"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.min.js"></script>
<script>
$(document).ready(function(){
$('#slider1').owlCarousel({
loop:true,
margin:10,
nav:true,
autoplay:true,
autoplayTimeout:3000,
autoplayHoverPause:true,
responsive:{
        0:{
            items:1,
            nav:true
        },
        767:{
            items:1,
            nav:false
        },
        1200:{
            items:1,
            nav:true,
            loop:false
        }
    }

})
$( ".owl-prev").html('<i class="fa fa-chevron-left"></i>');
$( ".owl-next").html('<i class="fa fa-chevron-right"></i>');
}); 
</script>

<!---STICKY CLONE HEADER SCRIPT--->
<script>
$(document).ready(function() {
	var $header = $(".headerpart"),
	$clone = $header.before($header.clone().addClass("clone"));
$(window).on("scroll", function() {
	var fromTop = $(window).scrollTop();
	$("body").toggleClass("down", (fromTop >100));
	});
});
</script>
<style>
body.down .headerpart.clone {
    top: 0;
}
.headerpart.clone { position: fixed; top: -95px; left: 0; right: 0; z-index: 99999; transition: 0.4s top cubic-bezier(.3, .73, .3, .74); }
</style>
<!---STATIC HTML---->
<div class="teamcommon">
    <div class="owl-carousel owl-theme" id="ourteam">
    <div class="item active">
      <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 teamin">
        <div class="single-item course_single_area">
          <div class="single-item-image overlay-effect"> <a href="#">  <img src="<?php bloginfo('template_directory')?>/assets/images/team1.png" /> </a> </div>
          <div class="single-item-text">
            <h4>Tem Member 1</h4>
            <div class="single-item-text-info">Position</div>
            <div class="course-introduce">
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
            </div>
          </div>
        </div>
      </div>
      </div>
   <div class="item">
      <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 teamin">
        <div class="single-item course_single_area">
          <div class="single-item-image overlay-effect"> <a href="#">  <img src="<?php bloginfo('template_directory')?>/assets/images/team2.png" /> </a> </div>
          <div class="single-item-text">
            <h4>Tem Member 2</h4>
            <div class="single-item-text-info">Position</div>
            <div class="course-introduce">
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
            </div>
          </div>
        </div>
      </div>
      </div>
      <div class="item">
      <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 teamin">
        <div class="single-item course_single_area">
          <div class="single-item-image overlay-effect"> <a href="#">  <img src="<?php bloginfo('template_directory')?>/assets/images/team3.png" /> </a> </div>
          <div class="single-item-text">
            <h4>Tem Member 3</h4>
            <div class="single-item-text-info">Position</div>
            <div class="course-introduce">
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
            </div>
          </div>
        </div>
      </div>
      </div>
      <div class="item">
      <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 teamin">
        <div class="single-item course_single_area">
          <div class="single-item-image overlay-effect"> <a href="#"> <img src="<?php bloginfo('template_directory')?>/assets/images/team1.png" /> </a> </div>
          <div class="single-item-text">
            <h4>Tem Member 4</h4>
            <div class="single-item-text-info">Position</div>
            <div class="course-introduce">
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
            </div>
          </div>
        </div>
      </div>
      </div>
      <div class="item">
      <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 teamin">
        <div class="single-item course_single_area">
          <div class="single-item-image overlay-effect"> <a href="#">  <img src="<?php bloginfo('template_directory')?>/assets/images/team2.png" /> </a> </div>
          <div class="single-item-text">
            <h4>Tem Member 5</h4>
            <div class="single-item-text-info">Position</div>
            <div class="course-introduce">
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
            </div>
          </div>
        </div>
      </div>
      </div>
      <div class="item">
      <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 teamin">
        <div class="single-item course_single_area">
          <div class="single-item-image overlay-effect"> <a href="#">  <img src="<?php bloginfo('template_directory')?>/assets/images/team3.png" /> </a> </div>
          <div class="single-item-text">
            <h4>Tem Member 6</h4>
            <div class="single-item-text-info">Position</div>
            <div class="course-introduce">
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
            </div>
          </div>
        </div>
      </div>
      </div>
       <div class="item">
      <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 teamin">
        <div class="single-item course_single_area">
          <div class="single-item-image overlay-effect"> <a href="#">  <img src="<?php bloginfo('template_directory')?>/assets/images/team1.png" /> </a> </div>
          <div class="single-item-text">
            <h4>Tem Member 7</h4>
            <div class="single-item-text-info">Position</div>
            <div class="course-introduce">
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
            </div>
          </div>
        </div>
      </div>
      </div>
      <div class="item">
      <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 teamin">
        <div class="single-item course_single_area">
          <div class="single-item-image overlay-effect"> <a href="#">  <img src="<?php bloginfo('template_directory')?>/assets/images/team2.png" /> </a> </div>
          <div class="single-item-text">
            <h4>Tem Member 8</h4>
            <div class="single-item-text-info">Position</div>
            <div class="course-introduce">
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
            </div>
          </div>
        </div>
      </div>
      </div>
      <div class="item">
      <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 teamin">
        <div class="single-item course_single_area">
          <div class="single-item-image overlay-effect"> <a href="#">  <img src="<?php bloginfo('template_directory')?>/assets/images/team3.png" /> </a> </div>
          <div class="single-item-text">
            <h4>Tem Member 9</h4>
            <div class="single-item-text-info">Position</div>
            <div class="course-introduce">
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
            </div>
          </div>
        </div>
      </div>
      </div>
      
      </div>
      </div>
      
<!---DYNAMIC OWL SLIDER--->
<section class="banner">
  <div class="owl-carousel owl-theme" id="slider1">
    <?php
$my_query = new WP_Query('post_type=slider&posts_per_page=-1&order=desc');
$i=1;
while ($my_query->have_posts()) : $my_query->the_post(); 
$feat_image = wp_get_attachment_url(get_post_thumbnail_id($post->ID) );?>
    <div class="item<?php if($i==1){ echo "active";}?>"> <img src="<?php echo $feat_image; ?>" />
      <div class="img-overlay">
        <div class="container">
          <div class="col-md-12 col-sm-12 col-lg-12 col-xs-12 bannercontent">
            <div class="btext">
              <h1>
                <?php the_title(); ?>
              </h1>
              <?php the_content(); ?>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php $i++;endwhile;wp_reset_query(); ?>
  </div>
</section>

<!---->

<script>
jQuery(document).ready(function() { 
  
  jQuery("#slider2").owlCarousel({
    autoplay: true,
    autoplayTimeout: 3000,
    autoplayHoverPause: true,
    items: 1,
    navigation : false,
	nav : true,
    loop: true,
    smartSpeed: 900
  });
 $( ".owl-prev").html('<i class="fa fa-chevron-left"></i>');
$( ".owl-next").html('<i class="fa fa-chevron-right"></i>');
});
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.carousel.min.css"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.theme.default.min.css"/>


<!--SCRIPT FOR ENABLE KEYBOARD ARROW FOR NAVIGATION IN OWL CAROSAL SLIDER-->
<script>
$(document).keydown( function(eventObject) {
if(eventObject.which==37) {//left arrow
$('.owl-prev').click();//emulates click on prev button
} else if(eventObject.which==39) {//right arrow
$('.owl-next').click();//emulates click on next button
}
} );
</script>

<script>
$(document).ready(function(){
    $( "a.scrollLink" ).click(function( event ) {
        event.preventDefault();
        $("html, body").animate({ scrollTop: $($(this).attr("href")).offset().top }, 500);
    });
});
</script>

<?php get_footer();