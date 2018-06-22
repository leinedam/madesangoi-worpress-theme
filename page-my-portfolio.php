<?php
/*
* Template Name: My Porfolio
*/

 get_header(); ?>

   <div class="blog-header" id="top">
      <div class="container" >
            <h1 class="blog-title" style="text-transform:uppercase;"><?php the_title(); ?></h1>
      </div>
    </div>

    <div class="bread-container" id="breadcrumbs">
      <div class="container">
          <ul class="list-inline">
            <li  class="list-inline-item"><?php the_breadcrumb(); ?>  &nbsp;&nbsp;&#187;&nbsp;&nbsp;</li>
            <li  class="list-inline-item"><a class="smooth1" href="#web"><?php pll_e('Web Design'); ?></a> | </li>
            <li  class="list-inline-item"><a class="smooth1" href="#apps"> <?php pll_e('Apps & Prototypes'); ?> </a> | </li>
            <li  class="list-inline-item"><a class="smooth1" href="#graphic"> <?php pll_e('Graphic Design'); ?> </a> | </li>
            <li  class="list-inline-item"><a class="smooth1" href="#illustration"> <?php pll_e('Graphic Art'); ?> </a> | </li>
            <li  class="list-inline-item"><a class="smooth1" href="#videos"> Videos </a>  </li>
          </ul>
      </div>
    </div>



    <!-- a template for portfolio page only -->


        <div class="container-fluid ">
            <div class="row sutil-gray" id="web">
              <div class="col-md-12 text-center space-top ">
                <h1><?php pll_e('Web Design'); ?></h1>
              </div>
                  <?php
                      $args = array(

                          'post_type' => 'portfolio',
                          'post_per_page' => 10,
                          'orderby' => 'date',
                          'order' => 'DESC',
                          'category_name' => 'webdesign'
                      );
                  $image = new WP_Query($args);

                  while($image->have_posts()): $image->the_post(); ?>

                  <div class="col-md-4">
                    <div class="blog-content-image">
                      <div class="img-container" >
                            <a href="<?php the_permalink();?>">
                                 <?php the_post_thumbnail('portfolio') ;?>
                                 <div class="middle">
                                   <div class="text"><i class="fa fa-plus" aria-hidden="true"></i></div>
                                 </div>
                             </a>
                      </div>
                    </div>
                    <div class="portfolio-image-desc">
                        <h3>
                           <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                       </h3>
                    </div>
                </div><!-- col-md-4 -->

                <?php endwhile; wp_reset_postdata();?>
            </div><!-- /.row -->


            <div class="row sutil-gray" id="apps">
              <div class="col-md-12 text-center space-top ">
                <h1><?php pll_e('Apps & Prototypes'); ?></h1>
              </div>
                  <?php
                      $args = array(

                          'post_type' => 'portfolio',
                          'post_per_page' => 10,
                          'orderby' => 'date',
                          'order' => 'DESC',
                          'category_name' => 'apps'
                      );
                  $image = new WP_Query($args);

                  while($image->have_posts()): $image->the_post(); ?>

                  <div class="col-md-4">
                    <div class="blog-content-image">
                      <div class="img-container" >
                            <a href="<?php the_permalink();?>">
                                 <?php the_post_thumbnail('portfolio') ;?>
                                 <div class="middle">
                                   <div class="text"><i class="fa fa-plus" aria-hidden="true"></i></div>
                                 </div>
                             </a>
                      </div>
                    </div>
                    <div class="portfolio-image-desc">
                        <h3>
                           <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                       </h3>
                    </div>
                </div><!-- col-md-4 -->

                <?php endwhile; wp_reset_postdata();?>
            </div><!-- /.row -->


            <div class="row sutil-gray " id="graphic">
              <div class="col-md-12 space-top  text-center ">
                <h1><?php pll_e('Graphic Design'); ?></h1>
              </div>
                  <?php
                      $args = array(

                          'post_type' => 'portfolio',
                          'post_per_page' => 10,
                          'orderby' => 'date',
                          'order' => 'ASC',
                          'category_name' => 'graphicdesign'
                      );
                  $image = new WP_Query($args);

                  while($image->have_posts()): $image->the_post(); ?>
                  <div class="col-md-4">
                    <div class="blog-content-image">
                      <div class="img-container" >
                            <a href="<?php the_permalink();?>">
                                 <?php the_post_thumbnail('portfolio') ;?>
                                 <div class="middle">
                                   <div class="text"><i class="fa fa-plus" aria-hidden="true"></i></div>
                                 </div>
                             </a>
                      </div>
                    </div>
                    <div class="portfolio-image-desc">
                        <h3>
                           <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                       </h3>
                    </div>
                </div><!-- col-md-4 -->

                <?php endwhile; wp_reset_postdata();?>
            </div><!-- /.row -->


            <div class="row sutil-gray" id="illustration">
              <div class="col-md-12 space-top text-center">
                <h1><?php pll_e('Graphic Art'); ?> </h1>
              </div>

                  <?php
                      $args = array(

                          'post_type' => 'portfolio',
                          'post_per_page' => 6,
                          'orderby' => 'date',
                          'order' => 'DESC',
                          'category_name' => 'illustration'
                      );
                  $image = new WP_Query($args);

                  while($image->have_posts()): $image->the_post(); ?>

                  <div class="col-md-4">
                    <div class="blog-content-image">
                      <div class="img-container" >
                            <a href="<?php the_permalink();?>">
                                 <?php the_post_thumbnail('portfolio') ;?>
                                 <div class="middle">
                                   <div class="text"><i class="fa fa-plus" aria-hidden="true"></i></div>
                                 </div>
                             </a>
                      </div>
                    </div>
                    <div class="portfolio-image-desc">
                        <h3>
                           <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                       </h3>
                    </div>
                </div><!-- col-md-4 -->

                <?php endwhile; wp_reset_postdata();?>
            </div><!-- /.row -->




            <div class="row sutil-gray " id="videos">
              <div class="col-md-12 space-top text-center">
                <h1>Videos</h1>
              </div>

                  <?php
                      $args = array(

                          'post_type' => 'portfolio',
                          'post_per_page' => 10,
                          'orderby' => 'date',
                          'order' => 'ASC',
                          'category_name' => 'experimental'
                      );
                  $image = new WP_Query($args);

                  while($image->have_posts()): $image->the_post(); ?>

                  <div class="col-md-6">
                    <div class="blog-content-image">
                      <div class="img-container" >
                            <a href="<?php the_permalink();?>">
                                 <?php the_post_thumbnail('portfolio2') ;?>
                                 <div class="middle">
                                   <div class="text"><i class="fa fa-plus" aria-hidden="true"></i></div>
                                 </div>
                             </a>
                      </div>
                    </div>
                    <div class="portfolio-image-desc">
                        <h3>
                           <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                       </h3>
                    </div>
                </div><!-- col-md-4 -->

                <?php endwhile; wp_reset_postdata();?>
            </div><!-- /.row -->





      </div>

<?php get_footer(); ?>
