<?php
/*
Template Name: Code
*/
?>

<!doctype html>
<html lang='en'>

<head>
    <meta charset='utf-8'>
    <title></title>
    <?php wp_head(); ?>
    <style>
    body {
        background: white !important;
    }
    </style>
</head>

<body>
    <!-- container from bootstrap -->
        <div class='container'>
            <!-- get title from wordpress -->
            <h1 class="wpTitle"><?php the_title();?></h1>
            <?php get_template_part('includes/section', 'content');?>
        </div>
<?php get_footer();?>