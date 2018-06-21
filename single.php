<?php get_header(); ?>

    <div class="blog-header" id="top">
      <div class="container">
        <h1 class="blog-title"><?php the_title(); ?></h1>
      </div>
    </div>

    <div class="bread-container" id="breadcrumbs">
      <div class="container">
          <?php the_breadcrumb(); ?>
      </div>
    </div>


<div class="container">
  <div class="row">
   <?php if(have_posts()) : ?>
     <?php while(have_posts()) : the_post(); ?>

          <div class="col-md-8 col-sm-12 blog-main">
                  <?php get_template_part('template-parts/post/content', get_post_format()); ?>

            </div><!-- /.blog-main -->

          <?php get_sidebar(); ?>

        <!-- /start of pager -->
            <div class="col-md-12">





                  <nav class="blog-pagination">
                  <?php
                   the_post_navigation( array(
                       'prev_text' => ' <span class="btn btn-outline-primary" > ' . __( '  %title ' , 'madesangoi') . '<i class="fa fa-chevron-right" aria-hidden="true"></i> </span>',
                       'next_text' => '<span class="btn btn-outline-secondary" > <i class="fa fa-chevron-left" aria-hidden="true"></i>' . __( '%title' , 'madesangoi'  ) . ' </span> ',
                       'screen_reader_text' => __( ' ' ),
                   ) );
                   ?>
                 </nav>
           </div>

  </div>
</div>

<div class="container-fluid gray" >
  <div class="row">
      <div class="col-md-12"><!-- comments-->
              <div class="container comments">
                    <?php comment_form(); ?>
               </div>
               <div class="container comment-list">
                   <ol class="commentlist">
                       <?php
                         $comments = get_comments(array(
                             'post_id'   => $post->ID,
                             'status'    => 'approve'
                         ));

                       wp_list_comments(array(

                           'per_page'    =>  10,
                           'reverse_top_level'   => false

                       ), $comments );
                       ?>
                   </ol>
              </div>
            </div><!-- comments-->
        </div>
      </div>



      <!-- /end of pager -->

        <?php endwhile; ?>
        <?php else : ?>
          <p><?php __('No Posts Found'); ?></p>
        <?php endif; ?>



<?php get_footer(); ?>
