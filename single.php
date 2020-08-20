<?php get_header();?>


<div class="post-single">
<?php if(has_post_thumbnail()):?>
    <img src="<?php the_post_thumbnail_url('blog-image');?>" alt="<?php the_title();?>" class="post-single__image">
<?php endif;?>

<div class="post-single__title"><?php the_title();?></div>
        <?php get_template_part('includes/section', 'blogcontent');?>


</div>
<?php get_footer();?>





