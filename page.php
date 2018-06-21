<?php get_header(); ?>
           <?php if(have_posts()) : ?>
            <?php while(have_posts()) : the_post(); ?>

            <div class="blog-header"  id="top">
              <div class="container">
                <h1 class="blog-title" style="text-transform:uppercase;" ><?php the_title(); ?></h1>
              </div>
            </div>

            <div class="bread-container" id="breadcrumbs">
              <div class="container">
                  <?php the_breadcrumb(); ?>
              </div>
            </div>


             <?php  get_template_part( 'template-parts/page/content', 'page' ); ?>

          <?php endwhile; ?>
        <?php else : ?>
          <p><?php __('No Page Found'); ?></p>
          <h1>NO PAGE FOUND</h1>
        <?php endif; ?>
    <?php get_footer(); ?>
