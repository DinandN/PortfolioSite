<?php get_header(); ?>
<!-- container from bootstrap -->
<div class='container containerColor'>
    <!-- get title from wordpress -->
    <h1 class='wpTitle'><?php the_title(); ?></h1>
    <!-- get template from includes folder -->
    <?php get_template_part('includes/section','content'); ?>
</div>

<?php get_footer(); ?>