<?php get_header(); ?>
<!-- ▼▼▼▼▼▼▼▼▼▼category-info.php ▼▼▼▼▼▼▼▼▼▼▼-->
<div class="document__content">
  <div class="document__inner">
    <div class="cardsContainer">
      <div class="cardsContainer__vertical--main">
        <div class="card">

<? 
  if(have_posts()){
    while(have_posts()){ 
      the_post();
      $info_cat_obj = get_category_by_slug("info");
      $info_cat_id = $info_cat_obj->term_id;
      get_template_part("content","blog");
    }
  }
  else{
    get_template_part("content","404");
  }
?>

<div style="height:50px;margin:20px auto; text-align:center">
<?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?>
</div>

        </div>
      </div>
      <? get_sidebar(); ?>
    </div>
  </div>
</div>

<!-- ▲▲▲▲▲▲▲▲▲▲▲index.php ▲▲▲▲▲▲▲▲▲▲▲-->
<?php get_footer(); ?>