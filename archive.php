<?php 
  get_header("blog"); ?>

<!-- ▼▼▼▼▼▼▼▼▼▼archive.php ▼▼▼▼▼▼▼▼▼▼▼-->
<div class="document__content--blog">
  <div class="document__inner--width-blog">
    <div class="cardsContainer">
      <div class="cardsContainer__vertical--main">
        <div class="card">

<? 
  $cat_obj =get_category_by_slug('info');
  $cat_id = $cat_obj->cat_ID;
  
  global $query_string;
  query_posts($query_string . "&category__not_in=$cat_id");


                    
  if(have_posts())while(have_posts()): the_post();
?>
            <? get_template_part("content", "blog") ?>


<? endwhile; ?>
<div style="height:50px;margin:20px auto; text-align:center">
<?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?>
</div>
        </div>
      </div>
      <? get_sidebar("blog"); ?>
    </div>
  </div>
</div>

<!-- ▲▲▲▲▲▲▲▲▲▲▲archive.php ▲▲▲▲▲▲▲▲▲▲▲-->
<? get_footer("blog"); ?>
