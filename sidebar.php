
  <?php
/**
 * The sidebar containing the main widget area
 *
*/

    if ( ! is_active_sidebar( 'sidebar' ) ) {
        return;
    }
?>

       <div class="col-md-3 col-sm-12 offset-sm-1 blog-sidebar">
  
          <?php if(is_active_sidebar('sidebar')) : ?>
           
            <?php dynamic_sidebar('sidebar'); ?>
            
          <?php endif; ?>
        
        </div><!-- /.blog-sidebar -->
        