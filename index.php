<?php get_header(); ?>
<!-- ▼▼▼▼▼▼▼▼▼▼index.php ▼▼▼▼▼▼▼▼▼▼▼-->
<div class="document__content">
  <div class="document__inner">
    <div class="cardsContainer">
      <div class="cardsContainer__vertical--main">
        <div class="card">

<? 
  if(have_posts()){
    while(have_posts()){ 
      the_post();
      get_template_part("content");
    }
  }
  else{
    get_template_part("content","404");
  }

?>

        </div>
      </div>
      <? get_sidebar(); ?>
    </div>
  </div>
</div>

<!-- ▲▲▲▲▲▲▲▲▲▲▲index.php ▲▲▲▲▲▲▲▲▲▲▲-->
<?php get_footer(); ?>