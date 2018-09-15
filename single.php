<?php 
if(in_category(array("info","info-fixed"))): //カテゴリーページだった場合index.phpを使う

  include(TEMPLATEPATH . "/index.php");

else:

  get_header("blog"); 
?>
<!-- ▼▼▼▼▼▼▼▼▼▼single.php ▼▼▼▼▼▼▼▼▼▼▼-->
<div class="document__content--blog">
  <div class="document__inner--width-blog">
    <div class="cardsContainer">
      <div class="cardsContainer__vertical--main">
        <div class="card">
<?
  if(have_posts()){
    while(have_posts()){ 
      the_post();
      get_template_part("content","blog");
    }
  }
  else{
    get_template_part("content","404");
  }
?>


        </div>
      </div>
      <? get_sidebar("blog"); ?>
    </div>
  </div>
</div>

<!-- ▲▲▲▲▲▲▲▲▲▲▲single.php ▲▲▲▲▲▲▲▲▲▲▲-->
<?php get_footer("blog"); ?>

<? endif; ?>