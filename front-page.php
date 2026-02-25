<?php get_header(); ?>
<!-- ▼▼▼▼▼▼▼▼▼▼front-page.php ▼▼▼▼▼▼▼▼▼▼▼-->
<!-- comment-->

<?php //showCardContent('cards/basic-info') あとで積極的に使っていこう?>

<div class="document__content--frontPage">
  <div class="tokushoku">
    <div class="cardsContainer tokushoku__container">
      <div class="topBanner">
        <div class="topBanner__inner">
          <div class="topBanner__header">
            <h2 class="topBanner__heading">究極の若返りメニュー<br>リバースエイジング誕生!</h2>
            <a href="https://rihatsukan.reverseaging.site" class="topBanner__button">詳しくはこちら &gt;</a>
          </div>
          <div class="topBanner__items">
            <a href="https://rihatsukan.reverseaging.site/course/mens.html" class="topBanner__item">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/top_banner_01_mens.png" alt="メンズエステコース">
            </a>
            <a href="https://rihatsukan.reverseaging.site/course/aging.html" class="topBanner__item">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/top_banner_02_aging.png" alt="美肌コース">
            </a>
            <a href="https://rihatsukan.reverseaging.site/course/growth.html" class="topBanner__item">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/top_banner_03_growth.png" alt="発毛ケアコース">
            </a>
          </div>
        </div>
      </div>


      <div id="anchor_tokushoku" class="topSlider">
        <div class="topSlider__item">
          <a href="" class="topSlider__link"><img class="topSlider__mainImage" src="<?php echo get_stylesheet_directory_uri(); ?>/images/slide_hotspot.png" alt=""></a></div>
        <div class="topSlider__item">
          <a href="" class="topSlider__link"><img class="topSlider__mainImage"  src="<?php echo get_stylesheet_directory_uri(); ?>/images/slide_yume.jpg" alt=""></a></div>
        <div class="topSlider__item">
          <a href="" class="topSlider__link"><img class="topSlider__mainImage"  src="<?php echo get_stylesheet_directory_uri(); ?>/images/slide_egao.jpg" alt=""></a></div>
        <div class="topSlider__item">
          <a href="" class="topSlider__link"><img class="topSlider__mainImage"  src="<?php echo get_stylesheet_directory_uri(); ?>/images/slide_arigato_basho.jpg" alt=""></a></div>
        <div class="topSlider__item">
          <a href="/#anchor_yumeAri" class="topSlider__link"><img class="topSlider__mainImage"  src="<?php echo get_stylesheet_directory_uri(); ?>/images/slide_yumeari.png" alt=""> </a></div>
        <div class="topSlider__item">
          <a href="/#anchor_yumeAri" class="topSlider__link"><img class="topSlider__mainImage"  src="<?php echo get_stylesheet_directory_uri(); ?>/images/slide_yumeari.png" alt=""> </a></div>


  <?
      $thepost = get_posts('post_type=fudemoji2&numberposts=1&orderby=rand');
      $post = $thepost[0];
      setup_postdata($post);
  ?>

        <div class="topSlider__item fudemoji">
          <a href="" class="topSlider__link">
            <div class="fudemoji">
              <img class="topSlider__mainImage"  src="<?php echo get_stylesheet_directory_uri(); ?>/images/slide_fude.png" alt="">
              <img class="fudemoji__title" src="<?php echo get_stylesheet_directory_uri(); ?>/images/slide_fude_head.png" alt="今日の筆文字">
              <div class="fudemoji__container">
                <? the_post_thumbnail('fudemoji2_size') ?>
              </div>
            </div>
          </a>
        </div>
        <div class="topSlider__item fudemoji">
          <a href="" class="topSlider__link">
            <div class="fudemoji">
              <img class="topSlider__mainImage"  src="<?php echo get_stylesheet_directory_uri(); ?>/images/slide_fude.png" alt="">
              <img class="fudemoji__title" src="<?php echo get_stylesheet_directory_uri(); ?>/images/slide_fude_head.png" alt="今日の筆文字">
              <div class="fudemoji__container">
                <? the_post_thumbnail('fudemoji2_size') ?>
              </div>
            </div>
          </a>
        </div>
      </div>
      <div class="tokushoku__box">
        <div style="" class="card__content tokushoku__content">
  <?php
    if(have_posts())while(have_posts()){
      the_post();
      the_content();
    } 
  ?>

        </div>
      </div>
    </div>
  </div><!-- .document__inner -->
  <div class="document__inner">
    <div class="cardsContainer">
      <div id="anchor_info" class="card--info">
        <div class="card__inner">
          <h2 class="card__title"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/h_info.png" alt="お知らせ"></h2>
          <div class="card__content--margin-zero">
            <div class="info">
              <ul class="info__list">

<?
  $theposts = get_posts("numberposts=0&category_name=info-fixed");
  foreach($theposts as $post):
    setup_postdata($post);
?>
                <li class="info__item--fixed">
                  <a href="<? the_permalink();?>" class="info__link">
                    <header class="info__header">
                      <h3 class="info__title">
                         
                        <? the_title(); ?>
                      </h3>
                      <time class="info__publishDate">
                        <? the_time('Y年n月j日'); ?>
                      </time>
                    </header>
                    <div class="info__content">
                      
                      <? the_content();?>
                    </div></a></li>

<?


  endforeach;
  wp_reset_postdata();//ループをリセット
/* */?>


<?
  $theposts = get_posts("numberposts=3&category_name=info"); //info-fixedをのぞく
  $first_flag = true;
  foreach($theposts as $post):
    setup_postdata($post);
    if(in_category("info-fixed",$post)){ //固定のものは、上ですでに表示してるのですっとばす。
      continue;
    }
?>

                <li class="info__item">
                  <a href="<? the_permalink();?>" class="info__link">
<? if($first_flag):?>
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/latest_post.png" alt="新着" class="info__latestIcon">
<? endif;?>
                    <header class="info__header">
                      <h3 class="info__title<? echo $first_flag ? '--new': ''?>">
                        <? the_title(); ?>
                      </h3>
                      <time class="info__publishDate"><? the_time('Y年n月j日'); ?></time>
                    </header>
                    <div class="info__content"><? the_excerpt();?></div></a></li>
<?
  $first_flag=false;
  endforeach;
  wp_reset_postdata();//ループをリセット
?>
              </ul>
            </div>

			<p style="text-align: center;"><a href="/blog/category/info" class="button">すべてのお知らせを見る</a></p>
            	
          </div>
        </div>
      </div>
      <div id="anchor_calender" class="card--calendar">
        <div class="card__inner">
          <h2 class="card__title"> <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/h_calender.png" alt="営業日"></h2>
          <div class="card__content">
<? 
             showCardContent("cards/calender");
?>
          </div>
        </div>
      </div>
    </div>
    <div class="cardsContainer">
      <div id="anchor_access" class="card--access">
        <div class="card__inner"> 
          <h2 class="card__title"> <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/h_access.png" alt="アクセス"></h2>
          <div class="card__content"> 
            <?php showCardContent("cards/access"); ?>
          </div>
        </div>
      </div>
      <div id="anchor_menu" class="card--menu">
        <div class="card__inner">
          <h2 class="card__title"> <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/h_menu.png" alt="メニュー"></h2>
          <div class="card__content"> 
            <? showCardContent("cards/menu");?>
          </div>
        </div>
      </div>
    </div>
    <div class="cardsContainer">
      <div class="cardsContainer__vertical">
        <div id="anchor_staff" class="card--staff">
          <div class="card__inner">
            <h2 class="card__title"> <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/h_staff.png" alt="スタッフ"></h2>
            <div class="card__content article"> 
              <? showCardContent("cards/staff"); ?>
            </div>
          </div>
        </div>
        <div id="anchor_blog" class="card--blog">
          <div class="card__inner">
            <h2 class="card__title"> <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/h_blog.png" alt="ブログ"></h2>
            <div class="card__content blogAbstract">
              <ul class="blogAbstract">

<?
  $first_flag = true;
  $category_id = get_cat_ID('お知らせ');
  $myposts = get_posts("posts_per_page=3&cat=-$category_id");
  foreach($myposts as $post) :
    setup_postdata($post);
?>


<? if($first_flag):?>
                <li class="blogAbstract__item--latest">
                  <a href="/blog/" class="blogAbstract__link">
                  <?//!!!!!!!!!!!!!!! 正しいアドレスを！！！！   ?>
                    <section class="blogAbstract__article--latest">
                      <header class="blogAbstract__latestHeader">
                        <h3 class="blogAbstract__title--latest">
                          <? the_title();?>
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/latest_post.png" alt="最近の記事"></h3>
                        <date class="blogAbstract__date--latest">
                          <? the_time('Y年m月d日');?>
                        </date>
                      </header >
                      <div class="blogAbstract__latestIcon">
                        <? if(has_post_thumbnail()){
                          $attr = array(
                            "class"=>"blogAbstract__icon",
                            "alt"=>"最新のブログ記事",
                          );
                          the_post_thumbnail('sidebar_size',$attr);
                        } ?>
                      </div>
                    </section></a></li>

<? else://not first?>
                <li class="blogAbstract__item">
                  <a href="<? the_permalink();?>" class="blogAbstract__link">
                  <?//!!!!!!!!!!!!!!! 正しいアドレスを！！！！   ?>
                    <section class="blogAbstract__article">
                      <h3 class="blogAbstract__title"><? the_title();?></h3>
                      <date class="blogAbstract__date">
                        <? the_time("Y年m月d日") ?>
                      </date>
                    </section></a></li>

<? endif; //first flag?>
<?php 
  $first_flag = false;
  endforeach; 
  wp_reset_postdata();
?>

              </ul>
              <a href="/blog/" class="button--width-full">すべてのブログ記事を見る</a>
            </div>
          </div>
        </div>
      </div>
      <div class="cardsContainer__vertical">
        <div id="anchor_facebook" class="card--facebook">
          <div class="card__inner">
            <h2 class="card__title"> <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/h_facebook.png" alt="Facebookでも発信中"></h2>
            <div class="card__content"> 
              <table class="fbPageButtons">
                <tr>
                  <td class="fbPageButtons__bannerCell">
                    <div class="fbPageButtons_item"> <a href="https://www.facebook.com/pages/%E7%90%86%E9%AB%AA%E9%A4%A8%E3%81%84%E3%81%A8%E3%81%86/196932153698942"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/fb_icon_rihatsukan.png" class="fbPageButtons_icon">
                        <h3 class="fbPageButtons_title">理髪館いとう</h3></a></div>
                  </td>
                  <td class="fbPageButtons__bannerCell">
                    <div class="fbPageButtons_item"> <a href="https://www.facebook.com/riha2kan"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/fb_icon_norio.png" class="fbPageButtons_icon">
                        <h3 class="fbPageButtons_title">伊藤規雄</h3></a></div>
                  </td>
                  <td class="fbPageButtons__bannerCell">
                    <div class="fbPageButtons_item"> <a href="https://www.facebook.com/pages/%E5%A4%A2%E3%82%92%E3%81%82%E3%82%8A%E3%81%8C%E3%81%A8%E3%81%86%E5%AD%90%E3%81%A9%E3%82%82%E3%81%AE%E5%A4%A2%E5%BF%9C%E6%8F%B4%E3%82%AF%E3%83%AA%E3%82%B9%E3%83%9E%E3%82%B9%E4%BC%81%E7%94%BB/441898389213516"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/fb_icon_yumeari.png" class="fbPageButtons_icon">
                        <h3 class="fbPageButtons_title">夢をありがとう</h3></a></div>
                  </td>
                </tr>
                <tr>
                  <td class="fbPageButtons__likeCell">
                    <div class="fb-like" data-href="https://www.facebook.com/%E7%90%86%E9%AB%AA%E9%A4%A8%E3%81%84%E3%81%A8%E3%81%86-196932153698942/" data-layout="button_count" data-action="like" data-show-faces="false" data-share="false"></div></td>
                  <td>
                    <div class="fb-like" data-href="https://www.facebook.com/riha2kan" data-layout="button_count" data-action="like" data-show-faces="false" data-share="false"></div></td>
                  <td>
                    <div class="fb-like" data-href="https://www.facebook.com/pages/%E5%A4%A2%E3%82%92%E3%81%82%E3%82%8A%E3%81%8C%E3%81%A8%E3%81%86%E5%AD%90%E3%81%A9%E3%82%82%E3%81%AE%E5%A4%A2%E5%BF%9C%E6%8F%B4%E3%82%AF%E3%83%AA%E3%82%B9%E3%83%9E%E3%82%B9%E4%BC%81%E7%94%BB/441898389213516" data-layout="button_count" data-action="like" data-show-faces="false" data-share="false"></div>
                  </td>
                </tr>
              </table>
            </div>
          </div>
        </div>
        <div id="anchor_yumeAri" class="card--yumeAri">
          <div class="card__inner yumeAri article">
            <h2 class="card__title"> <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/h_yumeari.png" alt="夢をありがとう"></h2>
              <? showCardContent("cards/yumeari"); ?>

          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<!-- ▲▲▲▲▲▲▲▲▲▲▲front-page.php ▲▲▲▲▲▲▲▲▲▲▲-->
<?php get_footer(); ?>
