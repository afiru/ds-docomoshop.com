<!DOCTYPE html>
<html>
<head>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-PZVQ6LC');</script>
<!-- End Google Tag Manager -->
<?php wp_head(); ?>
<meta charset="UTF-8">
<?php if(is_home()): ?>
    <title>ドコモショップ福知山店・峰山店</title>
<?php elseif(is_page() or is_single()): ?>
    <title><?php echo get_the_title(get_the_ID()); ?>|ドコモショップ福知山店・峰山店</title>
<?php elseif(is_category()): ?>
    <title>新着情報-<?php echo single_cat_title( '', false ); ?>|ドコモショップ福知山店・峰山店</title>
<?php elseif(is_post_type_archive('staff') or is_singular('staff')): ?>
    <title>求人情報（スタッフ紹介）|ドコモショップ福知山店・峰山店</title>
<?php elseif(is_404()): ?>
    <title>エラーページ|ドコモショップ福知山店・峰山店</title>
<?php else: ?>
<?php endif; ?>
<meta name=”Keywords” content="ドコモショップ,求人,採用,福知山,峰山,京丹後"> 
<meta name=”description” content="ドコモショップ福知山店・峰山店の最新携帯・スマホ情報や求人情報、お店へのアクセス方法などを掲載しております。ドコモショップで働きたいスタッフも募集中です。"> 
<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo get_bloginfo('template_url'); ?>/js/afiru_setting.js"></script>
<?php //各ページごとに使用するcssを切り替える ?>
<?php if(is_home()): ?>
<link rel="stylesheet" href="<?php echo get_bloginfo('template_url'); ?>/css/index.css" />
<?php elseif(is_post_type_archive('staff') or is_singular('staff')): ?>
<link rel="stylesheet" href="<?php echo get_bloginfo('template_url'); ?>/css/staff.css" />
<?php elseif(is_page()): ?>
<?php $page = get_page(get_the_ID()); ?>
<link rel="stylesheet" href="<?php echo get_bloginfo('template_url'); ?>/css/<?php $slug = $page->post_name; echo $slug; ?>.css" />
<?php if(is_page('entry')): ?>
<script type="text/javascript">
jQuery(function($) {
	$( '#mw_wp_form_mw-wp-form-18 select#pref option[value=""]' ) 
		.html( '都道府県を選択してください' ); 
</script>
<script src="<?php echo get_bloginfo('template_url'); ?>/js/jquery-git.js"></script>
<script src="<?php echo get_bloginfo('template_url'); ?>/js/jquery.jpostal.js"></script>
<script src="<?php echo get_bloginfo('template_url'); ?>/js/postread.js"></script>
<?php endif; ?>
<?php elseif(is_single() or is_category()): ?>
<link rel="stylesheet" href="<?php echo get_bloginfo('template_url'); ?>/css/topics.css" />

<?php else: ?>
<link rel="stylesheet" href="<?php echo get_bloginfo('template_url'); ?>/css/topics.css" />
<?php endif; ?>
</head>
<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PZVQ6LC"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<header class="pc_only header">
    <div class="had">
        <?php if(is_home()): ?>
            <h1>ドコモショップ福知山店、ドコモショップ峰山店のお得情報、求人情報を掲載しています。</h1>
        <?php elseif(is_page() or is_single()): ?>
            <h1><?php echo get_the_title(get_the_ID()); ?>|ドコモショップ福知山店、ドコモショップ峰山店のお得情報、求人情報を掲載しています。</h1>
        <?php elseif(is_category()): ?>
            <h1>新着情報-<?php echo single_cat_title( '', false ); ?>|ドコモショップ福知山店、ドコモショップ峰山店のお得情報、求人情報を掲載しています。</h1>
        <?php elseif(is_archive()): ?>
            <h1>スタッフ紹介|ドコモショップ福知山店、ドコモショップ峰山店のお得情報、求人情報を掲載しています。</h1>
        <?php elseif(is_404()): ?>
            <h1>エラーページ|ドコモショップ福知山店、ドコモショップ峰山店のお得情報、求人情報を掲載しています。</h1>
        <?php else: ?>
        <?php endif; ?>
    </div>
    <div class="head_wapper">    
        <div class="head_waku">
            <ul>
                <li>
                    <a href="<?php echo home_url('/access/'); ?>"><img src="<?php echo get_bloginfo('template_url'); ?>/img/botton_access_off.png" alt="アクセス"></a>
                </li>
                <li>
                    <a href="<?php echo home_url('/recruit/'); ?>"><img src="<?php echo get_bloginfo('template_url'); ?>/img/botton_contact_off.png" alt="アクセス"></a>
                </li>
            </ul>
        </div>
    </div>
    <div class="logo">
        <a href="<?php echo home_url('/'); ?>">
            <img src="<?php echo get_bloginfo('template_url'); ?>/img/logo_pc.png" alt="ドコモショップ福知山・峯山店">
        </a>
    </div>
</header>
<header class="sps sp_only">
    <div class="logo">
        <a href="<?php echo home_url('/'); ?>">
            <img src="<?php echo get_bloginfo('template_url'); ?>/img/logo_sp.png" alt="ドコモショップ福知山・峯山店">
        </a>
    </div>
    <div id="botton" class="open">
        <div id="open" class="on">
            <img id="off" src="<?php echo get_bloginfo('template_url'); ?>/img/bottom_sp_menu_open.png">
            <img id="on" src="<?php echo get_bloginfo('template_url'); ?>/img/lbottom_sp_menu_close.png">
        </div>
    </div>
</header>
<nav id="spmenubox" class="sp_only">
    <ul class="clearfix">        
        <li><a href="<?php echo home_url('/staff/'); ?>">スタッフ紹介</a></li>
        <li><a href="<?php echo home_url('/recruit/'); ?>">募集要項</a></li>
        <li><a href="<?php echo home_url('/entry/'); ?>">エントリー</a></li>
        <li><a href="<?php echo home_url('/topics/fukuchiyama/'); ?>">福知山店新着情報</a></li>
        <li><a href="<?php echo home_url('/topics/mineyama/'); ?>">峰山店新着情報</a></li>        
        <li><a href="<?php echo home_url('/'); ?>">トップ</a></li>
    </ul>
</nav>