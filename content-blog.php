<article class="card__inner blogEntry">
<? //article クラスは消すようなテンプレが必要 ?>
  <header class="blogEntry__header">
    <h2 class="blogEntry__title">
      <a href="<? the_permalink(); ?>" class="nocolor">
       <? the_title() ?> 
      </a>
    </h2>
    <hr class="blogEntry__separator">
    <div class="blogEntry__timeBox" style="background:red;position:relative;">
      <p class="blogEntry__time" style="position:absolute;right:0;">
        <? the_time('Y年m月d日');?>
      </p>
    </div>
  </header>

<?  //画像の場合どうするかは考えなくてはならない。カスタムフィールドか？
/*<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/h_staff.png" alt="スタッフ"> */?>

  <div class="blogEntry__content article">
    <? the_content() ?>
  </div>
  <footer class="blogEntry__footer">
    <div class="fb-like" data-href="https://www.facebook.com/riha2kan" data-layout="button_count" data-action="like" data-show-faces="false" data-share="false"></div>

    <a class="nocolor" href="<? the_permalink(); ?>">最終編集日<?= get_the_date('Y/n/j/H:i');?></a> | <wbr> カテゴリー:<?php the_category(','); ?>
        
  </footer>
</article>
