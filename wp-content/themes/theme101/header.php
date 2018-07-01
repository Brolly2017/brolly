<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php the_title();?></title>
   <?php wp_head();?>
</head>
<?php if( is_front_page() ):
      $theme101_class=array('theme101','my-class');
      else:
      $theme101_class=array('not-my-class');  
      endif;
?>
<body <?php body_class($theme101_class);?> >
     <?php wp_nav_menu(array('theme_location'=>'primary')); ?>
     <img src="<?php header_image();?>" height="<?php get_custom_header()->height;?>" width="<?php get_custom_header()->width;?>"> 