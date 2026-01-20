<?php
add_filter( 'wp_sitemaps_enabled', '__return_false' );

/*■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■
 * 環境設定
 ■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■*/
function customize_admin_manage_posts_columns($columns) {
    $columns['thumbnail'] = __('Thumbnail');
    return $columns;
}
function customize_admin_add_column($column_name, $post_id) {
    if ( 'thumbnail' == $column_name) {
        //テーマで設定されているサムネイルを利用する場合
        $thum = get_the_post_thumbnail($post_id, 'thumb100', array( 'style'=>'width:75px;height:auto;' ));
        //Wordpressで設定されているサムネイル（小）を利用する場合
        //$thum = get_the_post_thumbnail($post_id, 'small', array( 'style'=>'width:75px;height:auto;' ));
    }
    if ( isset($thum) && $thum ) {
        echo $thum;
    }
}
//アイキャッチ画像の列の幅をCSSで調整
function customize_admin_css_list() {
    echo '<style TYPE="text/css">.column-thumbnail{width:80px;}</style>';
}
//カラムの挿入
add_filter( 'manage_posts_columns', 'customize_admin_manage_posts_columns' );
//サムネイルの挿入
add_action( 'manage_posts_custom_column', 'customize_admin_add_column', 10, 2 );
//投稿一覧のカラムの幅のスタイル調整
add_action('admin_print_styles', 'customize_admin_css_list', 21);

add_theme_support( 'post-thumbnails' ); //サムネイルをサポートさせる。

/*■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■
 * カスタム投稿用
 ■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■*/
//header表示項目の設定
add_action( 'init', 'shoplist_init' );
function shoplist_init() {
	$labels = array(
		'name'               => _x( '求人情報（スタッフ紹介）', 'post type general name', 'your-plugin-textdomain' ),
		'singular_name'      => _x( '求人情報（スタッフ紹介）', 'post type singular name', 'your-plugin-textdomain' ),
		'menu_name'          => _x( 'スタッフ情報', 'admin menu', 'your-plugin-textdomain' ),
		'name_admin_bar'     => _x( '求人情報（スタッフ紹介）', 'add new on admin bar', 'your-plugin-textdomain' ),
		'add_new'            => _x( 'スタッフを新規登録', 'blog', 'your-plugin-textdomain' ),
		'add_new_item'       => __( 'スタッフを新規登録', 'your-plugin-textdomain' ),
		'new_item'           => __( 'スタッフを新規登録', 'your-plugin-textdomain' ),
		'edit_item'          => __( 'スタッフを編集', 'your-plugin-textdomain' ),
		'view_item'          => __( 'スタッフを見る', 'your-plugin-textdomain' ),
		'all_items'          => __( 'すべてのスタッフ', 'your-plugin-textdomain' ),
		'search_items'       => __( 'Search blog', 'your-plugin-textdomain' ),
		'parent_item_colon'  => __( 'Parent blog:', 'your-plugin-textdomain' ),
		'not_found'          => __( 'No books found.', 'your-plugin-textdomain' ),
		'not_found_in_trash' => __( 'No books found in Trash.', 'your-plugin-textdomain' )
	);
	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'staff' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 4,
                'menu_icon' =>          get_stylesheet_directory_uri().'/img/icon/header.png',
		'supports'           => array( 'title','slug','thumbnail','exmeta_sectionid' )
	);
        register_taxonomy(
          'staff-info',  /* タクソノミーのslug */
          'staff',           /* 属する投稿タイプ */
          array(
            'hierarchical' => true,
           'update_count_callback' => '_update_post_term_count',
            'label' => '店舗の選択',
           'singular_label' => '店舗の登録',
            'public' => true,
            'show_ui' => true
          )
        );        
	register_post_type( 'staff', $args );    
}


//■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■
//コンタクトフォームに関する関数
//■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■

// 【MW MW Form】エラーメッセージをカスタマイズ
function my_error_message( $error, $key, $rule ) {
    if ( $key === 'ご希望のドコモショップ' && $rule === 'noempty' ) {
        return 'ご希望のドコモショップが選択されていません';
    }elseif ( $key === '氏名（姓）' && $rule === 'noempty' ) {
        return '氏名（姓）が入力されていません';
    }elseif ( $key === '氏名（名）' && $rule === 'noempty' ) {
        return '氏名（名）が入力されていません';
    }elseif ( $key === '氏名（せい）' && $rule === 'noempty' ) {
        return '氏名（せい）';
    }elseif ( $key === '氏名（めい）' && $rule === 'noempty' ) {
        return '氏名（めい）';
    }elseif ( $key === '生年' && $rule === 'noempty' ) {
        return '生年月日の年が入力されていません';
    }elseif ( $key === '生月' && $rule === 'noempty' ) {
        return '生年月日の月が選択されていません';
    }elseif ( $key === '生日' && $rule === 'noempty' ) {
        return '生年月日の日が選択されていません';
    }elseif ( $key === '郵便番号' && $rule === 'noempty' ) {
        return '郵便番号が入力されていません';
    }elseif ( $key === '都道府県' && $rule === 'noempty' ) {
        return '都道府県が選択されていません';
    }elseif ( $key === '市区町村番地' && $rule === 'noempty' ) {
        return '市区町村番地が入力されていません';
    }elseif ( $key === 'ビル・マンション名' && $rule === 'noempty' ) {
        return 'ビル・マンション名が入力されていません';
    }elseif ( $key === 'メールアドレス' && $rule === 'noempty' ) {
        return 'メールアドレスが入力されていません';
    }elseif ( $key === 'メールアドレス（確認）' && $rule === 'noempty' ) {
        return 'メールアドレスが入力されていません';
    }elseif ( $key === '電話番号' && $rule === 'noempty' ) {
        return '電話番号が入力されていません';
    }elseif ( $key === '自己PR' && $rule === 'noempty' ) {
        return '自己PRが入力されていません';
    }      
    return $error;
}
add_filter( 'mwform_error_message_mw-wp-form-39', 'my_error_message', 10, 3 );

/*
//  ┏━━━━━━━━━━━━━━━━━━━━━━━━━━━━━┓
//  ┃	投稿情報のバックアップ／原状復帰
//  ┗━━━━━━━━━━━━━━━━━━━━━━━━━━━━━┛
// 引  数 ／ $buposts : 投稿情報 [def:空配列　(この場合、バックアップモードとなる。)]
// 返り値 ／ バックアップモード⇒WordPressが保持している投稿情報　($postsと$postを格納した配列)
//           原状復帰モード⇒何も返さない。
*/
function backupposts($buposts = array()) {
	global $posts, $post;
	if(empty($buposts)) {
		$bu['posts'] = $posts;
		$bu['post'] = $post;
		return $bu;
	} else {
		$posts = $buposts['posts'];
		$post = $buposts['post'];
		setup_postdata($post);
	}
}
//  ┏━━━━━━━━━━━━━━━━━━━━━━━━━━━━━┓
//  ┃	新着画像設定
//  ┗━━━━━━━━━━━━━━━━━━━━━━━━━━━━━┛
function topoics($catname) {
    $catid = get_cat_ID($catname);
    $posts = get_posts("numberposts=2&category=$catid&orderby=date&order=desc");
    $posts_bu = backupposts();
    if(!empty($posts)):
        ?><ul><?php
        foreach($posts as $post): 
            ?>
            <li class="mintyou">
                <a href="<?php echo get_the_permalink($post->ID); ?>">
                    <p>
                        <span class="tenponame"><?php if($catname=="峯山店") { echo "峰山店";} else {echo $catname; }?></span>
                        <?php echo get_the_date('Y.m.d',$post->ID); ?>
                    </p>
                    <p>
                        <?php echo get_the_title($post->ID); ?>
                    </p>
                </a>
            </li>
            <?php
        endforeach;
        ?></ul><?php
    endif;
    backupposts($posts_bu);
}
?>