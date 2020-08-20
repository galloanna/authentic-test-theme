<?php $delay_count = 0; ?>
<?php if( have_posts() ): while ( have_posts() ): the_post();?>
<div class="post-archive">
  <?php if(has_post_thumbnail()):?>
  <img src="<?php the_post_thumbnail_url('blog-image');?>" alt="<?php the_title();?>" class="post-archive__image" data-aos="zoom-in-left" data-aos-duration="500" data-aos-easing="ease-in-out" data-aos-delay="<?php echo $delay_count * 300; ?>">
  <?php endif;?>
  <div class="post-archive__wrapper"  data-aos="fade-left" data-aos-duration="500" data-aos-easing="ease-in-out" data-aos-delay="<?php echo $delay_count * 300; ?>">
    <div class="post-archive__date"><?php echo get_the_date();?></div>
    <div class="post-archive__title"><?php the_title();?></div>
    <div class="post-archive__excerpt"><?php the_excerpt();?></div>
    <a class="post-archive__link post-archive__link--has-icon" href="<?php the_permalink();?>">Read more</a>
  </div>
</div>
<?php $delay_count++; ?>
<?php endwhile; else: endif;?>