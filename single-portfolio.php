

<?php get_header(); ?>

    <div class="blog-header" id="top">
      <div class="container">
        <h1 class="blog-title"><?php the_title(); ?></h1>
      </div>
    </div>

    <div class="bread-container"  id="breadcrumbs" >
      <div class="container">
          <?php
          echo '<a href="'.home_url().'" ">Home</a>';
          echo "&nbsp;&nbsp;&#187;&nbsp;&nbsp;";
          echo '<a href="'.home_url( '/index.php/my-portfolio/' ) .'" ">Portfolio</a>';
          echo "&nbsp;&nbsp;&#187;&nbsp;&nbsp;";
          echo  the_title();
           ?>
      </div>
    </div>


<div class="container-fluid">
  <div class="row">
   <?php if(have_posts()) : ?>
     <?php while(have_posts()) : the_post(); ?>

        <div class="col-md-12 col-sm-12 portfoilo-container" >

               <?php  get_template_part( 'template-parts/page/content', 'portfolio' ); ?>

        </div><!-- /.blog-main -->


     <!-- /start of pager -->
         <div class="col-12">
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
      <!-- /end of pager -->

        <?php endwhile; ?>
        <?php else : ?>
          <p><?php __('No Posts Found'); ?></p>
        <?php endif; ?>

      </div><!-- /.row -->


    </div><!-- /.container -->


<?php get_footer(); ?>
