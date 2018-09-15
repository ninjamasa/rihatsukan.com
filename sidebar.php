<div class="cardsContainer__vertical--side">
<div class="card--sidebar">
  <div class="card__inner">
    <h2 class="card__title--sidebar"> <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/h_calender.png" alt="営業日"></h2>
    <div class="card__content">
      <div class="cal_wrapper">
        <div class="googlecal">
          <iframe src="https://calendar.google.com/calendar/embed?showPrint=0&amp;showTabs=0&amp;showCalendars=0&amp;showTz=0&amp;height=600&amp;wkst=1&amp;bgcolor=%23FFFFFF&amp;src=43u0ehs0h8hhc34t3lh0n14ejo%40group.calendar.google.com&amp;color=%23A32929&amp;ctz=Asia%2FTokyo" style="border-width:0" width="800" height="600" frameborder="0" scrolling="no"></iframe>
        </div>
      </div>
    </div>
  </div>
</div>

<? dynamic_sidebar('page-sidebar');?>
<div class="card--sidebar">
  <div class="card__inner">
    <h2 class="card__title--sidebar"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/h_info.png" alt="お知らせ"></h2>
    <div class="card__content--margin-zero">
      <div class="info">
        <ul class="info__list">

<?
  $theposts = get_posts("numberposts=3&category_name=info");
  $first_flag = true;
  foreach($theposts as $post):
    setup_postdata($post);
?>
        <li class="info__item">
          <a href="<? the_permalink();?>" class="info__link">
          
          <?//!!!!!!!!!!!!!!! 正しいアドレスを！！！！   ?>
<? if($first_flag):?>
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/latest_post.png" alt="新着" class="info__latestIcon">
<? endif;?>
            <header class="info__header">
              <h3 class="info__title<? echo $first_flag ? '--new': ''?>">
                <? the_title(); ?>
              </h3>
              <time class="info__publishDate"><? the_time('Y年n月j日'); ?></time>
            </header> </a></li>
<?
  $first_flag=false;
  endforeach;
  wp_reset_postdata();
?>
        </ul>
      </div>
    </div>
  </div>
</div>
<div class="card--blog--sidebar">
  <div class="card__inner">
    <h2 class="card__title--sidebar"> <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/h_blog.png" alt="ブログ"></h2>
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
          <a href="<? the_permalink(); ?>" class="blogAbstract__link">
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

      </ul><a href="/blog/" class="button--width-full">すべてのブログ記事を見る</a>
    </div>
  </div>
</div>
</div>
