<?php if( have_posts() ): while ( have_posts() ): the_post();?>
<div class="post">
  <?php if(has_post_thumbnail()):?>
  <img src="<?php the_post_thumbnail_url('blog-image');?>" alt="<?php the_title();?>" class="post--image">
  <?php endif;?>
  <div class="post--wrapper">
    <div class="post--date"><?php echo get_the_date();?></div>
    <div class="post--title"><?php the_title();?></div>
    <div class="post--excerpt"><?php the_excerpt();?></div>
    <a class="post--link post--link__has-icon" href="<?php the_permalink();?>">Read more</a>
  </div>
</div>
<?php endwhile; else: endif;?>