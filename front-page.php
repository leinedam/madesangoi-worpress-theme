<?php get_header(); ?>

<div id="top"></div>
<div id="site">
    <div id="section-wrapper">
         <div id="section-1" class="section">

            <div class="parallax text-center">
             <div class="container" >
                    <div class="row">
                        <div class="col-md-12 intro">
                          <img src="<?php bloginfo('template_url'); ?>/images/logo-tr.png" style="width:135px;margin-bottom:25px; ">
                          <h1><?php echo get_theme_mod('showcase_heading', 'Bold Ideas for a Purpose'); ?></h1>

                          <h3 class="quotes"><?php echo get_theme_mod('showcase_description1', 'Multimedia Designer'); ?></h3>
                          <h3 class="quotes"><?php echo get_theme_mod('showcase_description2', 'Web Developer'); ?></h3>
                          <h3 class="quotes"><?php echo get_theme_mod('showcase_description3', 'Freelancer'); ?></h3>

                          <!-- <h3 id="subtitle"> bloginfo(//'description'); ?></h3> -->
                        </div>
                   </div>
             </div>
           </div>
           <a class="smooth1 anchor " href="#section-2"><i class="fa fa-chevron-down" aria-hidden="true"></i></a>
        </div>
    </div>
</div>


 <!--END OF  LOGO CONTAINER -->

 <div id="site">
  <div id="section-wrapper">
  <div id="section-2" class="section">
    <div class="container">
        <div class="row title-front">
            <div class="col-md-12">
                 <h1><a href="<?php echo esc_url( home_url( '/index.php/services/' ) ); ?>">Services

                 </a></h1>
            </div>
        </div>


            <div class="row services dix1" >

                    <?php if(is_active_sidebar('services-1')) : ?>

                        <?php dynamic_sidebar('services-1'); ?>

                    <?php endif; ?>
            </div>
    </div>

    <a class="smooth1 anchor " href="#section-3"><i class="fa fa-chevron-down" aria-hidden="true"></i></a>
 </div>

  <div id="section-3" class="section">
       <div class="container-fluid center">
            <div class="title-front">
                 <h1><a href="<?php echo esc_url( home_url( 'index.php/my-portfolio/' ) ); ?>"> Portfolio </a></h1>
            </div>


            <div class="row" >

              <?php

                  $args = array('post_type' => 'portfolio','post_per_page' => 8 , 'orderby' => 'rand');
                  $image = new WP_Query($args);


                  while($image->have_posts()): $image->the_post(); ?>
                    <div class="imagen col-md-3 col-sm-6 col-xs-12">
                         <a href="<?php the_permalink(); ?>" target="_blank">
                         <?php the_post_thumbnail("portfolio-front"); ?>

                         <div class="medio">

                           <div class="texto" style="font-size:64px;margin-top:28%;">
                           <i class="fa fa-plus-circle" aria-hidden="true"></i>
                           </div>

                         </div>
                         </a>
                    </div>
                  <?php endwhile; wp_reset_postdata();   ?>


            </div>
<br>

<a class="btn btn-info space-bottom space-top" href="<?php echo esc_url( home_url( 'index.php/my-portfolio/' ) ); ?>">View More</a>

       </div>
        <!-- biG screen version -->
  </div>


   <div id="section-4" class="section">
        <div class="container-fluid">
        <div class="row title-front">
            <div class="col-md-12">
               <h1><a href="#">Blog</a></h1>
               <br>
            </div>
        </div>

        <div class="row">
            <?php
                global $post;
                $args = array( 'posts_per_page' => 4, 'order'=> 'DESC', 'orderby' => 'date' );
                $postslist = get_posts( $args );
                foreach ( $postslist as $post ) :
                  setup_postdata( $post ); ?>

                    <div class="col-md-3 col-sm-6 blog-panel ">

                        <?php if(has_post_thumbnail()) : ?>
                           <div class="link-image-2-container">
                                <a href="<?php the_permalink(); ?>">
                                    <div class="link-image-2">
                                      <?php the_post_thumbnail("post-thumb-front"); ?>
                                    </div>
                                </a>
                           </div>
                       <?php endif; ?>

                        <h3 class="blog-post-title2"><span><a href="<?php the_permalink(); ?>"><?php echo title(10); ?></a></span></h3>

                      <p class="blog-post-content2"><?php echo excerpt(12); ?> </p>
                    </div>
                <?php
                endforeach;
                wp_reset_postdata();
            ?>
       </div>
    </div>
  </div>




  <!-- get footer -->
  <?php get_footer(); ?>




</div>
</div><!-- /.site -->
