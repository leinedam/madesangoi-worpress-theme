   <!--from each panel, a button to scroll horizontally to another panel-->

  <div id="sidePanelButton">
    <i class="fa fa-bars" aria-hidden="true"></i>
  </div>

  <!--panel that scrolls horizontally into window on button click-->

    <div id="sidePanel">
        <ul class="navbar-nav">

          <li class="nav-item">
           <div id="sidePanelClose"><i class="fa fa-window-close" aria-hidden="true"></i></div>
          </li>

            <?php
           wp_nav_menu( array(
               'menu'              => 'primary',
               'theme_location'    => 'primary',
               'depth'             => 2,
               'menu_class'        => 'navbar-nav',
               'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
               'walker'            => new wp_bootstrap_navwalker())
           );
            ?>


        <ul class="navbar-nav flex-row socials">
              <?php
                  $args = array(
                      'theme_location' => 'social-menu',
                      'menu_class'=> 'navbar-nav flex-row socials',
                      'link_before'    => '<span class="sr-text">',
                      'link_after'     => '</span>'
                  );
               wp_nav_menu($args);
              ?>
        </ul>


       <div class="dropdown-divider"></div>

       <ul class="navbar-nav flex-row">

           <?php
           wp_nav_menu( array(
               'menu'              => 'languages',
               'theme_location'    => 'languages',
               'depth'             => 2,
               'menu_class'        => 'navbar-nav flex-row',
               'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
               'walker'            => new wp_bootstrap_navwalker())
           );
            ?>

        </ul>


<!--
        <ul class="navbar-nav flex-row">
            <li class="nav-item"><a class="px-2" href="#">EN </a></li>
            <li class="nav-item"><a class="px-2" href="#"> ES</a></li>
        </ul>
-->

        </ul>
    </div>
