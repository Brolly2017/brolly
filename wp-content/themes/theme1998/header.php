<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php bloginfo('name');?></title>
    <?php wp_head(); ?>
   <!-- <?php bloginfo(); ?>  -->
</head>
<body>
    <header>
        <div class="n60">
             <?php bloginfo('name');?>
             <?php wp_nav_menu('primary');?>
        </div>
    </header>

