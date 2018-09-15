<?php
/**
* Template Name: 特殊なページのためのテンプレート
* articleクラスがつかないので、liなどのコーディングが楽です。
* menu や staffで使います。
*/
?>

<?php get_header(); ?>
<!-- ▼▼▼▼▼▼▼▼▼▼menu.php ▼▼▼▼▼▼▼▼▼▼▼-->
<!-- いずれショートコードにとって代わってほしいファイル-->

<div class="document__content">
  <div class="document__inner">
    <div class="cardsContainer">
      <div class="cardsContainer__vertical--main">
        <div class="card">
<? if(have_posts())while(have_posts()): the_post();?>
          <article class="card__inner pageEntry">
            <h2 class="pageEntry__title"> <? the_title() ?> </h2>

            <div class="pageEntry__content">

              <? the_content(); //ショートコード入りのものです?>

            </div>
          </article>

<? endwhile; ?>

        </div>
      </div>
      <? get_sidebar(); ?>
    </div>
  </div>
</div>

<!-- ▲▲▲▲▲▲▲▲▲▲▲menu.php ▲▲▲▲▲▲▲▲▲▲▲-->
<?php get_footer(); ?>