          <article class="card__inner pageEntry article">
<? //article クラスは消すようなテンプレが必要 ?>
            <h2 class="pageEntry__title">
              <? the_title() ?>

            
<?  //画像の場合どうするかは考えなくてはならない。カスタムフィールドか？
/*<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/h_staff.png" alt="スタッフ"> */?>

            </h2>
            <div class="pageEntry__content">

              <? the_content() ?>

            </div>
          </article>