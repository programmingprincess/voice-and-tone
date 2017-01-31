<div class = "sidebar-wrapper">
  <div class = "logo">
    <?php $custom_logo_id = get_theme_mod( 'custom_logo' );
      $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
    ?>
    <!--<img src = "<?php //echo get_template_directory_uri()?>/assets/lucid-l.png">-->
    <a href = "<?php echo home_url()?>"><img src = "<?php echo $image[0] ?>"></a>
  </div>
  <?php
   wp_nav_menu(
       array(
       'menu' => 'Primary',
       'theme_location' => 'primary',
       'container_class' => '',
       'container_id' => '',
       'items_wrap' => '<ul class="sidebar-nav">%3$s</ul>'
       )
   ); ?>
</div>
