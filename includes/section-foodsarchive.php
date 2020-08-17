


<?php if( have_posts() ): while ( have_posts() ): the_post();?>
<div class="food">
    <div class="food--wrapper">
  <?php if(has_post_thumbnail()):?>
  <img src="<?php the_post_thumbnail_url('food-image');?>" alt="<?php the_title();?>" class="food--image">
  <?php endif;?>
    <div class="food--title"><?php the_title();?></div>
    <div class="food--price"><?php the_field('price');?></div>
    <div class="food--description"><?php the_field('description');?></div>
</div>
</div>
<?php endwhile; else: endif;?>