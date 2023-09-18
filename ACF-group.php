------------------------------acf group inside another group----------------------

<?php
 
    $our_services = get_field('featured_partners_section'); // 'our_services' is your parent group
    $third1_section = $our_services['clickfunnels.comfield']; // 'service_one' is your child group 

 
if( $third1_section ): ?>
<?php echo $third1_section['title']; ?>
<?php endif; ?>


--------------------------acf group--------------------------------

     <?php
$hero = get_field('we_provide_section_fields');
if( $hero ): ?>
      
      <?php echo $hero['content']; ?> 
      <?php endif; ?>
