<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php /*
   * Print the <title> tag based on what is being viewed.
   */
  global $page, $paged;

  wp_title( '|', true, 'right' );

  // Add the blog name.
  bloginfo( 'name' );

  // Add the blog description for the home/front page.
  $site_description = get_bloginfo( 'description', 'display' );
  if ( $site_description && ( is_home() || is_front_page() ) )
    echo " | $site_description";

  // Add a page number if necessary:
  if ( $paged >= 2 || $page >= 2 )
    echo ' | ' . sprintf( __( 'Page %s', 'twentyeleven' ), max( $paged, $page ) );

    ?> </title>


  <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">

  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/slick.css">
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/slick-theme.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->



<?php wp_head() ; ?>

</head>
<body class="document"><div id="fb-root"></div> 
<script>(function(d, s, id) { var js, fjs = d.getElementsByTagName(s)[0]; if (d.getElementById(id)) return; js = d.createElement(s); js.id = id; js.src = "//connect.facebook.net/ja_JP/sdk.js#xfbml=1&version=v2.5&appId=411378812273100"; fjs.parentNode.insertBefore(js, fjs); }(document, 'script', 'facebook-jssdk'));</script> 

  <header class="document__header">
    <div class="topbar"></div>
    <div class="document__inner docHeader">
      <div class="docHeader__logo">
        <div class="rihatsukanLogo">
          <h1><a href="/"><img class="rihatsukanLogo__image"  src="<?php echo get_stylesheet_directory_uri(); ?>/images/rihatsukan_logo.png" alt="理髪館いとう"></a></h1>
        </div>
      </div>
      <div class="docHeader__basicInfo">
        <? global $place;
          $place = "header";
          get_template_part("basic_info"); ?>
      </div>
      <div class="docHeader__space"></div>
      <div class="docHeader__nav">
        <nav class="globalNav">
          <ul class="globalNav__list">
            <li class="globalNav__item">
              <a href="/#anchor_tokushoku"> 
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/nav_tokushoku.png" alt="お店の特色"></a></li><!--

            --><li class="globalNav__item">
              <a href="/#anchor_info"> 
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/nav_sinchaku.png" alt="新着"></a></li><!--

            --><li class="globalNav__item">
              <a href="/menu/"> 
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/nav_menu.png" alt="メニュー"></a></li><!--


            --><li class="globalNav__item"> 
              <a href="/#anchor_access"> 
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/nav_map.png" alt="地図"></a></li><!--


            --><li class="globalNav__item"> 
              <a href="/staff/"> 
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/nav_staff.png" alt="スタッフ"></a></li><!--

            --><li class="globalNav__item"> 
              <a href="/#anchor_yumeAri"> 
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/nav_country.png" alt="地域とのかかわり"></a></li><!--

            --><li class="globalNav__item"> 
              <a href="/blog/"> 
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/nav_blog.png" alt="ブログ"></a></li>

          </ul>
        </nav>
      </div>
    </div>
  </header>
<!-- ▲▲▲▲▲▲▲▲▲▲▲▲header.php ▲▲▲▲▲▲▲▲▲▲▲▲-->
