


 <main class="blog-post">
   <?php if(has_post_thumbnail()) : ?>

     <?php if(is_single()) : ?>
       <div class="post-thumb">
            <?php the_post_thumbnail('post-thumb-big'); ?>
       </div>
     <?php else : ?>
        <div class="post-thumb post-thumb-posts">
             <a href="<?php the_permalink(); ?>">
                  <?php the_post_thumbnail('post-thumb'); ?>
             </a>
       </div>
    <?php endif; ?>

  <?php endif; ?>
  <h3 class="blog-post-title">

    <?php if(!is_single()) : ?>
     <span>
          <a href="<?php the_permalink(); ?>">
            <?php the_title(); ?>
          </a>
     </span>
    <?php endif; ?>
  </h3>
  <article>
    <header>
        <div class="date">
            <time>
                <?php echo the_time('d'); ?>
                <span><?php echo the_time('M'); ?></span>
            </time>
        </div><!--date-->
          <div class="author">
             <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>">
               <i class="fa fa-user" aria-hidden="true"></i>
               <span><?php the_author(); ?></span>
              </a>
          </div>
    </header>
  <div class="entry-content">
  <?php if(is_single()) : ?>
    <?php the_content(); ?>
  <?php else : ?>
    <?php echo excerpt(40); ?>
  <?php endif; ?>
</div>

</article>
</main><!-- /.blog-post -->
