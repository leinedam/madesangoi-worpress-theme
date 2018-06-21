
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Freelance Web Designer and Wordpress Developer, I can create your website starting from a concept to its final implementation and hosting, just let me know your idea and I will bring it to life">
  <meta name="author" content="Madeleine Sangoi madesangoi.com">
  <meta name="keywords" content="Madeleine Sangoi, web developer,freelance,SEO, websites, apps, wordpress free themes,graphic design,creative design,visual communication, php,web,programador,desarrollador">
	<meta name="robots" content="Index, Follow">
  <meta property="og:description" content="Just let me know your idea and I will bring it to life">
  <meta property="og:url" content="http://www.madesangoi.com/">
  <meta property="og:site_name" content="Freelance Web Designer and Wordpress Developer">
  <meta property="og:type" content="website">
  <meta property="og:image" content="http://www.madesangoi.com/wp-content/uploads/2018/02/logotwitter.png" />
  <meta name="twitter:card" content="summary" >
  <meta name="twitter:site" content="@madesangoi" >
  <meta name="twitter:title" content="Freelance Web Designer and Wordpress Developer" >
  <meta name="twitter:description" content="Just let me know your idea and I will bring it to life" >
  <meta name="twitter:image" content="http://www.madesangoi.com/wp-content/uploads/2018/02/logotwitter.png" >
  <meta name="google-site-verification" content="YbvE0QIyexVlyobjwfLw8hZArrsbJL3IelQuInaRlS4" />
  <link rel="icon" href="<?php bloginfo('template_url'); ?>/images/icon.png">
    <title>
      <?php bloginfo('name'); ?> |
      <?php is_front_page() ? bloginfo('description') : wp_title(); ?>
    </title>

    <?php wp_head(); ?>

<script>(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-71427432-2', 'auto');
  ga('send', 'pageview');</script>

 <script>
    window.onload = function(){var tapaStyle = document.getElementById("tapa").style.display = "none" }
  </script>

  </head>
  <body>


  <?php if(is_front_page() ): ?>
 <!--END OF  LOGO CONTAINER  -->
<div id="tapa">
    <div class="loader" id="loader-4">
            <span></span>
            <span></span>
            <span></span>
    </div>
</div>
 <?php endif; ?>

 <?php if(!is_front_page() ): ?>
  <!-- LOGO CONTAINER -->
<div >
    <div class="logo-contain" >
         <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">  <span class="logo-text">Made Sangoi</span></a>
    </div>
</div>
<?php endif; ?>
