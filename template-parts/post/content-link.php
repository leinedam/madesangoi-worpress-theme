<?php if(!is_single()) : ?>
<div class="blog-content-link">
<?php endif; ?>


<?php if(has_post_thumbnail()) : ?>

  <?php if(is_single()) : ?>
       <div class="post-thumb-link">
            <?php the_post_thumbnail('post-thumb-big'); ?>
        </div>
  <?php else: ?>
        <div class="link-image">
            <a style="color:black;" href="<?php the_permalink(); ?>">
                  <?php the_post_thumbnail('post-thumb-link'); ?>
            </a>
        </div>
  <?php endif; ?>

<?php endif; ?>

<h2 class="blog-post-title" style="text-align:center">
    <?php if(!is_single()) : ?>
     <span>
         <h3 class="link-title">
          <a href="<?php the_permalink(); ?>">
            <?php the_title(); ?>
          </a>
         </h3>
     </span>
    <?php endif; ?>
</h2>

  <?php if(is_single()) : ?>

     <?php the_content(); ?>

  <?php else: ?>

     <?php echo excerpt(35); ?>

 <?php endif; ?>


<?php if(is_single()) : ?>
 <?php	if ( comments_open() || get_comments_number() ) :   comments_template();  endif; ?>
<?php endif; ?>



<?php if(!is_single()) : ?>
</div>
<?php endif; ?>
