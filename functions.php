<?php


// 管理バーを編集
add_action('admin_bar_menu', 'customize_admin_bar_menu', 9999);//9999???

function customize_admin_bar_menu($wp_admin_bar){

    global $wp_the_query;

    $queried_obj = $wp_the_query->get_queried_object();

    $id = $queried_obj->ID;

    /*
    echo "$wp_query";
    echo $wp_query;
    echo "$post";
    echo $post;
    */

    $edit_button = $wp_admin_bar->get_node('edit');

    if($edit_button){
      $title = $edit_button->title;
      echo "title is $title";
      $splited = preg_split('/を/', $title);
      $edit_button->title =  $splited[0]. "[ $id ]を". $splited[1];
      $wp_admin_bar->add_node($edit_button);


      $title = sprintf(
          '<span class="ab-label">%s<span contenteditable="true" class="adminBarPageId__textbox">[pagelink id=%s]</span></span>',
            "埋め込みショートコード",
            $id
      );

      $wp_admin_bar->add_menu(array(
          'id'    => 'page_id',
          'class'    => 'adminBarPageId',
          'meta'  => array(),
          'title' => $title
          //'href'  => home_url('/app/') divになった
      )); 
    }



}

add_action( 'after_setup_theme', 'rihatsukan_setup' );

function rihatsukan_setup() {
  
  add_theme_support( 'post-thumbnails' ,array('post','page','fudemoji2'));
  
  set_post_thumbnail_size( 300, 157, true );
  
  //add_image_size( 'fudemoji_size', 170,243,true);
  add_image_size( 'fudemoji2_size', 800, 270, true);
  add_image_size( 'sidebar_size', 216,162,true);
}







/* after_setup_theme */


// カスタム投稿タイプを作成
// create custom post type

add_action('init', 'rihatsukan_custom_post_type');

function rihatsukan_custom_post_type(){
  $labels = array(
    'name' => '今日の筆文字',
    'singular_name' => '今日の筆文字',
    'add_new' => '新規追加',
    'add_new_item' => '新しい筆文字を追加',
    'edit_item' => '筆文字を編集',
    'new_item' => '新しい筆文字',
    'view_item' => '筆文字を表示',
    'search_items' => '筆文字を探す',
    'not_found' =>  '筆文字はありません',
    'not_found_in_trash' => 'ゴミ箱に筆文字はありません', 
    'parent_item_colon' => ''
  );
  $args = array(
    'labels' => $labels,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true, 
    'query_var' => true,
    'rewrite' => true,
    'capability_type' => 'post',
    'hierarchical' => false,
    'menu_position' => 2,
    'supports' => array('title','thumbnail')
  ); 
  register_post_type('fudemoji2',$args);
}


function showCardContent($slug){
  //スラッグからページidを取得
  $this_post = get_page_by_path($slug);
  echo $this_post->post_content;

  if(current_user_can("edit_pages")){
    //ページを編集可能な場合、ぼたんを表示
    $url = get_edit_post_link($this_post->ID,"no encode");
    echo "<p style='text-align:right'><a href='$url'>[このカードを編集する]</a></p>";
  }
}

// 画像のパスを置き換える
/*
function replaceImagePath($arg) {
  $content = str_replace('"images/', '"' . get_bloginfo('template_directory') . '/images/', $arg);
  return $content;
}  
add_action('the_content', 'replaceImagePath');
*/


/* widgets_init */
add_action( 'widgets_init', 'rihatsukan_widgets_init' );

function rihatsukan_widgets_init() {
	register_sidebar( array(
		'name' => '通常ページ（ブログ以外）のサイドバー',
		'id' => 'page-sidebar',

		'before_widget' => '<div class="card--sidebar"><div class="card__inner article">',
			'before_title' => '<h2 class="card__title--sidebar">',
			'after_title' => '</h2>',
		'after_widget' => '</div><!--card__inner--></div><!--card-->',

	) );


	/*
	  <div class="card--sidebar">
	    <div class="card__inner">
	      <h2 class="card__title">タイトル</h2>
	      <div class="card__content">
	        konntennto

	      </div>
	    </div>
	  </div>
	*/
	register_sidebar( array(
		'name' => 'ブログ用サイドバー',
		'id' => 'blog-sidebar',
		'before_widget' => '<div class="card--sidebar"><div class="card__inner article">',
			'before_title' => '<h2 class="card__title--sidebar">',
			'after_title' => '</h2>',
		'after_widget' => '</div><!--card__inner--></div><!--card-->',
  
	) );
}

add_action( 'init', 'my_add_excerpts_to_pages' );
function my_add_excerpts_to_pages() {
     add_post_type_support( 'page', 'excerpt' );
}

add_editor_style('editor-style.css');
function custom_editor_settings( $initArray ){
  //var_dump($initArray);

	$initArray['body_class'] = 'body_class';
	return $initArray;
}
add_filter( 'tiny_mce_before_init', 'custom_editor_settings' );

function pagelink_shortcode_func($arg){
  extract(shortcode_atts(array (
        'id' => 0,
        'open' => 'close'
    ), $arg, 'pagelink'));

  $id; //page id 

  $page_obj = get_post($id);


  $link = get_permalink($page_obj);

  $title = $page_obj->post_title;

  //the_timeをさかのぼったらいきついた関数
  $the_time = get_post_time('Y年m月d日', false, $page_obj, true);

  //$excerpt = apply_filters( 'get_the_excerpt', $page_obj->post_excerpt );

  if($open == 'open'){
    $excerpt = $page_obj->post_content;
  }
  else{
    $excerpt = wp_trim_words($page_obj->post_content);
  }

  $floatoption = $open == 'open' ? "":"--float";

  $html = <<< END

<div class="card">
  <a href="$link" class="nocolor">
    <article class="card__inner blogEntry">
      <header class="blogEntry__header">
        <h2 class="blogEntry__title">
          $title
        </h2>
        <hr class="blogEntry__separator">
        <div class="blogEntry__timeBox">
          <p class="blogEntry__time$floatoption">$the_time</p>
        </div>
      </header>
      <div class="blogEntry__content article">
        $excerpt
      </div>
    </article>
  </a>
</div>
END;

  return $html;
}

add_shortcode("pagelink", "pagelink_shortcode_func");


/*
  <h3 class="staffs__title">代表　伊藤規雄</h3>
  <div class="staffs__item">
    <div class="staffs__icon"><img src="/images/member_norio.jpg"></div>
    <div class="staffs__desc">
      <p>
        昭和４９・５・２８生まれ舞鶴保育園→天童南部小→天童一中<br>
        →山形商業高校卒。<br>
        東京での10年間の修行を終え帰京。<br>
        オーナー店主として顔晴ってます！<br>
        平成１０年、管理理容師の資格を取りました。<br>
        平成15年、理髪館いとう新規オープン！<br>
        平成１６年11月、ケア理容師の認定を受けました。<br>
        ７歳と５歳、１歳の３人の男の子の父親でもあります。<br>
        平成２５年チャイルドコーチングアドバイザー資格認定<br>
        子どもたちが夢を持ち、目をキラキラさせながら暮らせるよう、<br>
        クリスマスにはサンタの格好をして子どもたちに夢を与える<br>
        【ワクワクさん】に変身！人とお話するのが大好きな僕に会いにきてくださいね！<br>
      </p><a href=""><img src="/images/ikigomi.png"></a>
    </div>
  </div>
*/

function member_shortcode_func($arg, $content = null){
	extract(shortcode_atts(array (
        'name' => 'メンバーの名前を入れてください',
    ), $arg, 'member'));

	//contentから最初のimgを抜き出す
	$m;
	preg_match('/<img.*?>/', $content, $m); 
	$img = $m[0]; //最初の画像
	$quoted_img = preg_quote($img,"{}");//正規表現エスケープ

	//その最初の画像をかこむpで検索
	$pattern = "{<p>.*?$quoted_img.*?</p>}s";


	preg_match($pattern, $content,$m);

	if(count($m) > 0){
		$icon = $m[0];
		$content = str_replace($icon, "", $content);
	}

	$content = str_replace(array("{<p></p>}","{<br>}"), "", $content);


	//$content = str_replace(array($icon,"<p></p>","<br>"), "", $content);

	$html = <<< END

<h3 class="staffs__title">$name</h3>
<div class="staffs__item">
	<div class="staffs__icon">$img</div>
	<div class="staffs__desc">
		$content
	</div>
</div>

END;
	return $html;
}

add_shortcode("member", "member_shortcode_func");



/*
[menu_category title=カット id=cut]
[menu title=メンズカット kakaku=\4,200 setsumei=男性の標準的なカットです]
[menu title=レディースカット kakaku=”\4,200 setsumei=女性の標準的なカットです]

  <div id="menu_cut_header" class="pageMenu__catHeader">
    <h2 class="pageMenu__catTitle">カットまｎ</h2>
    <div class="pageMenu__foldButton"><span class="pageMenu__open">くわしく見る</span></div>
  </div>
  <div id="menu_cut_body" class="pageMenu__catBody">
    <ul>


      <li class="pageMenu__item">
        <div class="pageMenu__header">
          <h3 class="pageMenu__title">メンズカット</h3>
          <div class="pageMenu__price">￥4200</div>
        </div>
        <p class="pageMenu__desc">男性の標準的なコースです。</p>
      </li>

    </ul>
  </div>



*/
function menu_category_shortcode_func($arg, $content = null){
	extract(shortcode_atts(array (
        'title' => 'メニュータイトルを入れてください',
        'open' => ''
    ), $arg, 'menu_category'));

    if($open=="open"){
    	$hidden_class = "";
    }
    else{
    	$hidden_class = "hidden";
    }



	if($content){
		//$content_shortcoded = do_shortcode(strip_tags($content));
    //すべてのタグを排除すればいいとおもってたけど、書式が入る可能性もあるので、<br>だけぬくことにします。

    $content_shortcoded = do_shortcode(preg_replace("/<br.*?>/", "", $content));
	}

	$id = base64_encode($title);

	$html = <<< END
  <div id="menu_${id}_header" class="pageMenu__catHeader">
    <h2 class="pageMenu__catTitle">$title</h2>
    <div class="pageMenu__foldButton"><span class="pageMenu__open">くわしく見る</span></div>
  </div>
  <div id="menu_${id}_body" class="pageMenu__catBody $hidden_class">
    <ul>
      $content_shortcoded
    </ul>
  </div>
END;

	return $html;

}

add_shortcode("menu_category", "menu_category_shortcode_func");

function menu_shortcode_func($arg , $content = null){
	extract(shortcode_atts(array (
        'title' => 'メニュータイトルを入れてください',
        'kakaku' => '',
        'setsumei' => '',
    ), $arg, 'menu'));
  if($content != null){
    $setsumei .= $content;
  }

	$desc = $setsumei ? "<p class='pageMenu__desc'>$setsumei</p>":"";

	$html = <<< END
<li class="pageMenu__item">
  <div class="pageMenu__header">
    <h3 class="pageMenu__title">$title</h3>
    <div class="pageMenu__price">$kakaku</div>
  </div>
  $desc
</li>
END;

	return $html;
}

add_shortcode("menu", "menu_shortcode_func");

