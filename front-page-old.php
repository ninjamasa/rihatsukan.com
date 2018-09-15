<?php get_header(); ?>
<!-- ▼▼▼▼▼▼▼▼▼▼front-page.php ▼▼▼▼▼▼▼▼▼▼▼-->

<?php //showCardContent('cards/basic-info') あとで積極的に使っていこう?>

<div class="document__content">
  <div class="document__inner">
    <div id="anchor_tokushoku" class="topSlider">
      <div class="topSlider__item">
        <a href="" class="topSlider__link"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/slide_hotspot.png" alt=""></a></div>
      <div class="topSlider__item">
        <a href="" class="topSlider__link"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/slide_yume.jpg" alt=""></a></div>
      <div class="topSlider__item">
        <a href="" class="topSlider__link"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/slide_egao.jpg" alt=""></a></div>
      <div class="topSlider__item">
        <a href="" class="topSlider__link"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/slide_arigato_basho.jpg" alt=""></a></div>
      <div class="topSlider__item">
        <a href="#anchor_yumeAri" class="topSlider__link"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/slide_yumeari.png" alt=""> </a></div>

      <div class="topSlider__item fudemoji">
        <a href="" class="topSlider__link">
          <div class="fudemoji">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/slide_fude.png" alt="">
            <img class="fudemoji__title" src="<?php echo get_stylesheet_directory_uri(); ?>/images/slide_fude_head.png" alt="今日の筆文字">
            <div class="fudemoji__container">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/fude1.jpg" alt="つらいときほど笑っていたい">
            </div>
          </div>
        </a>
      </div>
    </div>
  </div><!-- .document__inner -->

  <div class="tokushoku">
    <div class="cardsContainer tokushoku__container">
      <div class="card--tokushoku">
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

<?/*
  fixed がまだできてないから
                <li class="info__item--fixed"><a href="" class="info__link"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/latest_post.png" alt="新着" class="info__latestIcon">
                    <header class="info__header">
                      <h3 class="info__title--new">
                         
                        新年の営業
                      </h3>
                      <time class="info__publishDate">2015/11/9</time>
                    </header>
                    <p class="info__content">あけましておめでとうございます。 昨年は理髪館いとうをご愛顧いただき感謝しています！ 本年もよろしくお願い致します。 新年は １日〜３日　正月休み ４日（日）営業 ５日（月）お休み ６日（火）〜通常営業 となります。どう […]</p></a></li>
                    */?>

<?
  $theposts = get_posts("numberposts=3&category_name=info");
  $first_flag = true;
  foreach($theposts as $post):
    setup_postdata($post);
?>
                <li class="info__item">
                  <a href="<? the_permalink();?>" class="info__link">
<? if($first_flag):?>
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/latest_post.png" alt="新着" class="info__latestIcon">
<? 
  endif;?>
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
?>
              </ul>
            </div>

			<p style="text-align: center;"><a href="/category/info" class="button">すべてのお知らせを見る</a></p>
            	
          </div>
        </div>
      </div>
      <div id="anchor_calender" class="card--calendar">
        <div class="card__inner">
          <h2 class="card__title"> <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/h_calender.png" alt="営業日"></h2>
          <div class="card__content">
            <div class="cal_wrapper">
              <div class="googlecal">
                <iframe src="https://calendar.google.com/calendar/embed?showPrint=0&amp;showTabs=0&amp;showCalendars=0&amp;showTz=0&amp;height=600&amp;wkst=1&amp;bgcolor=%23FFFFFF&amp;src=43u0ehs0h8hhc34t3lh0n14ejo%40group.calendar.google.com&amp;color=%23A32929&amp;ctz=Asia%2FTokyo" style="border-width:0" width="600" height="800" frameborder="0" scrolling="no"></iframe>
                
                
                
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="cardsContainer">
      <div id="anchor_access" class="card--access">
        <div class="card__inner"> 
          <h2 class="card__title"> <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/h_access.png" alt="アクセス"></h2>
          <div class="card__content"> 
            <div class="widgetHelper__accessMap">
              <iframe style="border: 0;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1564.4736700268322!2d140.36406652875232!3d38.350200859566414!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x61f570e2422604ce!2z55CG6auq6aSo44GE44Go44GG!5e0!3m2!1sja!2s!4v1420505565914" width="600" height="450" frameborder="0"></iframe>
              
              
            </div><a href="https://maps.google.com/maps?ll=38.34843,140.371279&amp;z=17&amp;t=m&amp;hl=ja&amp;gl=US&amp;mapclient=embed&amp;cid=7058672108047828174" class="button--width-full">アプリで見る</a>
          </div>
        </div>
      </div>
      <div id="anchor_menu" class="card--menu">
        <div class="card__inner">
          <h2 class="card__title"> <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/h_menu.png" alt="メニュー"></h2>
          <div class="card__content"> 
            <ul class="menuAbstract">
              <li class="menuAbstract__item"> 
                <h3 class="menuAbstract__title">メンズカット</h3>
                <div class="menuAbstract__price">￥4,200</div>
              </li>
              <li class="menuAbstract__item"> 
                <h3 class="menuAbstract__title">ヘッドスパ</h3>
                <div class="menuAbstract__price">￥2,000～</div>
              </li>
              <li class="menuAbstract__item"> 
                <h3 class="menuAbstract__title">レディスシェービング</h3>
                <div class="menuAbstract__price">￥3,000～</div>
              </li>
            </ul>
            <p>その他メニュー多数!</p><a href="menu" class="button--width-full">詳しいメニューを見る</a>
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
              <p><a href="/staff/" class="button--width-full">スタッフを見る</a></p>
              <p><a href="/staff/norio/"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/ikigomi.png" alt="僕の意気込み" class="img-fullsize"></a></p>
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
  $myposts = get_posts("posts_per_page=3&category=-$category_id");
  foreach($myposts as $post) :
    setup_postdata($post);
?>


<? if($first_flag):?>
                <li class="blogAbstract__item--latest">
                  <a href="./blog/" class="blogAbstract__link">
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
              <? showCardContent("cards/yumeari");?>
            <div class="card__content--margin-zero">
              <a class="yumeAri__link" href="<? echo home_url()?>/yumeari/">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/card_yumeari.png" class="yumeAri__image">
                <div class="yumeAri__playButton"></div>


              </a>
            </div>
            <div class="card__content">
              <p> <a href="/category/blog/thanksfordream/" class="button--width-full">最近の様子を見てみる</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<!-- ▲▲▲▲▲▲▲▲▲▲▲front-page.php ▲▲▲▲▲▲▲▲▲▲▲-->
<?php get_footer(); ?>
