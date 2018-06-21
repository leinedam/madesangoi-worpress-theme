
    <!-- /.Main TOP Navigation -->
    <?php get_template_part( 'template-parts/navigation', 'top' ); ?>

     <footer class="blog-footer">
       <div class="back-arrow"> <a href="#top" class="smooth1"><i class="fa fa-chevron-up" aria-hidden="true"></i></a></div>
            <h3>
              <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="footer-link">
                 <?php bloginfo('description'); ?>
              </a></h3>
            Copyritgh ©  <?php echo Date('Y'); ?> - <a href="http://www.madesangoi.com/"> <?php bloginfo('name'); ?></a>
    </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->




    <script src="js/jquery.fluidbox.min.js"></script>


    <?php wp_footer(); ?>
    <script>
        //-------------------------------//
        //---Inner  NAVIGATION FIXED---//
        //-------------------------------//

        window.onscroll = function() {myFunction()};

        var header = document.getElementById("breadcrumbs");
        var sticky = header.offsetTop;

        function myFunction() {
          if (window.pageYOffset >= sticky) {
            header.classList.add("sticky");
          } else {
            header.classList.remove("sticky");
          }
        }

    </script>




  </body>
</html>
