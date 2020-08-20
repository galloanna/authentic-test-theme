

<div class="food">
<?php $delay_count = 0; ?>
<?php if( have_posts() ): while ( have_posts() ): the_post();?>
    <div class="food__wrapper" data-aos="fade-left" data-aos-duration="500" data-aos-easing="ease-in-out" data-aos-delay="<?php echo $delay_count * 300; ?>">
  <?php if(has_post_thumbnail()):?>
  <img src="<?php the_post_thumbnail_url('food-image');?>" alt="<?php the_title();?>" class="food__image">
  <?php endif;?>
    <div class="food__title"><?php the_title();?></div>
    <div class="food__price"><?php the_field('price');?></div>
    <div class="food__description"><?php the_field('description');?></div>
</div>
<?php $delay_count++; ?>
<?php endwhile; else: endif;?>
</div>