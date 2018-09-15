<?php
/**
* Template Name: 意気込みページためのテンプレート
* ブログのカードのようなデザインで表示されます。
* ブログのヘッダーフッターになるわけではありません。
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
          <article class="card__inner pageEntry article">
<? //article クラスは消すようなテンプレが必要 ?>
            <h2 class="pageEntry__title">

            
<?  //画像の場合どうするかは考えなくてはならない。カスタムフィールドか？
/*<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/h_staff.png" alt="スタッフ"> */?>

            </h2>
            <div class="pageEntry__content">

<p>理髪館いとうの開店記念日は</p>
<p> ７月２５日です。</p>
<p> 毎年の周年を迎えるにあたって、</p>
<p> 僕の意気込み、感謝をお手紙に託し</p>
<p> お客様へとお渡ししております。</p>

<a class="card nocolor" href="/" >
  <article class="card__inner blogEntry">
    <header class="blogEntry__header">
      <h2 class="blogEntry__title">
        ２００８　ありがとうと言って店を出る
      </h2>
      <hr class="blogEntry__separator">
      <div class="blogEntry__timeBox">
        <p class="blogEntry__time--float">
          <? the_time('Y年m月d日');?>
        </p>
      </div>
    </header>
    <div class="blogEntry__content article">
      なかみなかみ なかみなかみ なかみなかみ なかみなかみ
      なかみなかみ なかみなかみ なかみなかみ なかみなかみ
    </div>
  </article>
</a>

<a href="http://rihatsukan.com/info/staff/norio/2008-2/">２００８　ありがとうと言って店を出る</a>

<a href="http://rihatsukan.com/info/staff/norio/2009-2/">２００９　優しい空気</a>

<a href="http://rihatsukan.com/info/staff/norio/2010-2/">２０１０　立志</a>

<a href="http://rihatsukan.com/info/staff/norio/２０１０心に花を/">２０１１　心に花を</a>

<a title="仕事のベクトル" href="http://rihatsukan.com/2012/07/仕事のベクトル/">２０１２　仕事のベクトル</a>

‎

&nbsp;

&nbsp; 

            </div>
          </article>
        </div>
      </div>
      <? get_sidebar(); ?>
    </div>
  </div>
</div>

<!-- ▲▲▲▲▲▲▲▲▲▲▲menu.php ▲▲▲▲▲▲▲▲▲▲▲-->
<?php get_footer(); ?>