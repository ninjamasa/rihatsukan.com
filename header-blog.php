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


  <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>#20250205">

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
<body class="document--bg-blog"><div id="fb-root"></div> 
<script>(function(d, s, id) { var js, fjs = d.getElementsByTagName(s)[0]; if (d.getElementById(id)) return; js = d.createElement(s); js.id = id; js.src = "//connect.facebook.net/ja_JP/sdk.js#xfbml=1&version=v2.5&appId=411378812273100"; fjs.parentNode.insertBefore(js, fjs); }(document, 'script', 'facebook-jssdk'));</script> 

    <header class="document__header--bg-blog">
      <div class="topbar"></div>
      <div class="document__inner--width-blog blogHeader">
        <div class="blogHeader__logo rihatsukanLogo--blog">
          <h1><a href="/blog/"><img class="rihatsukanLogo__image" src="<?php echo get_stylesheet_directory_uri(); ?>/images/blog_logo.png" alt="いとうのりおブログ -出会いに感謝-"></a></h1>
        </div>
        <div class="blogHeader__goHome"><a href="<? echo home_url();?>" class="blogHeader__goHomeButton">理髪館いとう<br>ホームページへ</a></div>
      </div>
    </header>
<!-- ▲▲▲▲▲▲▲▲▲▲▲▲header.php ▲▲▲▲▲▲▲▲▲▲▲▲-->
