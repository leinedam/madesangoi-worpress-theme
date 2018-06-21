<?php get_header(); ?>


<?php
   $blog_page = get_option('page_for_posts');
   $image = get_post_thumbnail_id($blog_page);
   $image = wp_get_attachment_image_src($image, 'full');

   ?>



   <div class="blog-header" id="top">
      <div class="container">
        <h1 class="blog-title" style="text-transform:uppercase;" >

        <?php
        if(is_category()){
            single_cat_title();
        }else{
          echo " ".get_the_title($blog_page);
        }
        ?>
         </h1>
        <!-- <p class="lead blog-description"><?php //echo category_description(); ?></p> -->
      </div>
    </div>
    <div class="bread-container"  id="breadcrumbs">
      <div class="container">
          <?php the_breadcrumb(); ?>
      </div>
    </div>

    <!--end of portfolio page-->

    <div class="container">
      <div class="row">

        <div class="col-md-8 col-sm-12 blog-main">
        <?php if(have_posts()) : ?>
           <?php while(have_posts()) : the_post(); ?>

                  <?php   get_template_part('template-parts/post/content', get_post_format()); ?>

            <?php endwhile; ?>



            <?php else : ?>
              <p>
              <?php __('No Posts Found'); ?>
              </p>
              <h1>NO POST FOUND</h1>
         <?php endif; ?>

        </div><!-- /.blog-main -->

       <?php get_sidebar(); ?>


       <div class="col-md-12">
         <hr>
           <nav aria-label="Page navigation example">
             <ul class="pagination">
               <?php the_posts_pagination( array(
               'prev_text' => '<li class="page-item">' . __( 'Previus', 'madesangoi' ). '</li>',
               'mid_size' => '<li class="page-item">'. 2 .'</li>',
               'next_text' => '<li class="page-item">' . __( 'Next', 'madesangoi' ). '</li>',
               'screen_reader_text' => __( ' ' )
               ) ); ?>

             </ul>
           </nav>
       </div>

      </div><!-- /.row -->

    </div><!-- /.container -->


<?php get_footer(); ?>
