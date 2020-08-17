<?php if( have_posts() ): while ( have_posts() ): the_post();?>

<div class="post--date"><?php echo get_the_date();?></div>
<?php the_content();?>

<?php endwhile; else: endif;?>

