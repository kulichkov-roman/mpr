<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
IncludeTemplateLangFile($_SERVER["DOCUMENT_ROOT"]."/bitrix/templates/".SITE_TEMPLATE_ID."/header.php");
CJSCore::Init(array("fx"));
$curPage = $APPLICATION->GetCurPage(true);
global $USER;
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?=LANGUAGE_ID?>" lang="<?=LANGUAGE_ID?>">
<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
	<link rel="shortcut icon" type="image/x-icon" href="<?=SITE_DIR?>favicon.ico" />
	<?$APPLICATION->ShowHead();?>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<?
	$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/assets/css/bootstrap.min.css"); 
	$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/assets/css/main.css");
	$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/assets/css/owl.carousel.css");
	$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/assets/css/owl.transitions.css");
	$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/assets/css/lightbox.css");
	$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/assets/css/animate.css");
	$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/assets/css/rateit.css");
	$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/assets/css/bootstrap-select.min.css");
	$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/assets/css/config.css");
	$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/assets/css/font-awesome.min.css");
	$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/assets/css/core_fileinput.css");
	$APPLICATION->SetAdditionalCSS("https://fonts.googleapis.com/css?family=Roboto:300,400,500,700");
	$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/assets/css/color.css");
	$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/assets/css/basket.css");
	$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/assets/css/slick.css");
	$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/assets/css/fancybox/jquery.fancybox.css");
	$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/assets/css/fancybox/helpers/jquery.fancybox-buttons.css");
	$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/assets/css/fancybox/helpers/jquery.fancybox-thumbs.css");
	$APPLICATION->SetTitle("PopUp");
	CJSCore::Init(array("popup"));



	?>
	<title><?$APPLICATION->ShowTitle()?></title>
<script type="text/javascript">(window.Image ? (new Image()) : document.createElement('img')).src = location.protocol + '//vk.com/rtrg?r=QG3o6ivayND24fOf1b2YUM3r7ASH9KJ7huHCArQHrfM9B50vC5oggDX/GQZBIQ6Nm07QtQnWYdUUFXeHGXF88akAnrdyAq6r0HnzXVqcWotfBKT79YhJ*7e5gxCYCiGOWiiuSoidvOM60MxMuZQXknc/kWNiartuEHoCtjFgDt4-&pixel_id=1000016133';</script>
<meta name="yandex-verification" content="07fb05e42345c3b7" />
	<meta name="cmsmagazine" content="f3a6695dfcc9f3ed1b584c8b48702bc0" />
</head>
	<body class="cnt-homepage">
		<div id="panel"><?=$APPLICATION->ShowPanel()?></div>
<header class="header-style-1 header-style-2">
<div class="top-bar animate-dropdown">
	<div class="container">
		<div class="header-top-inner">
			<?$APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/top_iner.php"), false);?>
			<div class="clearfix"></div>
			<div class="contact-row">
                <div class="phone inline">
                    <i class="icon fa fa-phone"></i> <?$APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/company_phone.php"), false);?>
                </div>
                <div class="contact inline">
                    <i class="icon fa fa-envelope"></i> <?$APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/company_mail.php"), false);?>
                </div>
                <div class="phone2 inline">
                    <?/*<i class="icon fa fa-phone"></i> */?><?=GetMessage("ZACAZ_ZVON")?></div>
            </div><!-- /.contact-row -->    
		</div><!-- /.header-top-inner -->
	</div><!-- /.container -->
</div><!-- /.header-top -->
	<div class="main-header">
		<div class="container">
			<div class="row">
				<div class="col-xs-6 col-sm-4 col-md-3 logo-holder">
					<div class="logo">
						<a href="<?=SITE_DIR?>">
							<?$APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/company_logo.php"), false);?>
						</a>
					</div><!-- /.logo -->
<!-- ============================================================= LOGO : END ============================================================= -->				</div><!-- /.logo-holder -->
				<div class="col-xs-2 header-toggle__wrap header-toggle__wrap_search visible-xs">
					<button class="header-toggle__btn header-toggle__btn_search js__header-toggle-search"></button>
				</div>
				<div class="col-xs-12 col-sm-5 col-md-5 col-md-offset-2 top-search-holder">
<?$APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/search.php"), false);?>
				</div>
				<div id="bascet" class="col-xs-2 col-sm-3 col-md-2 animate-dropdown top-cart-row">
					<?$APPLICATION->IncludeComponent(
	"bitrix:sale.basket.basket.line",
	"main_bascet",
	array(
		"PATH_TO_BASKET" => SITE_DIR."personal/cart/",
		"PATH_TO_PERSONAL" => SITE_DIR."personal/",
		"SHOW_PERSONAL_LINK" => "N",
		"SHOW_NUM_PRODUCTS" => "Y",
		"SHOW_TOTAL_PRICE" => "Y",
		"SHOW_PRODUCTS" => "Y",
		"POSITION_FIXED" => "N",
		"SHOW_AUTHOR" => "N",
		"PATH_TO_REGISTER" => SITE_DIR."login/",
		"PATH_TO_PROFILE" => SITE_DIR."personal/",
		"COMPONENT_TEMPLATE" => "main_bascet",
		"SHOW_EMPTY_VALUES" => "Y",
		"SHOW_DELAY" => "N",
		"SHOW_NOTAVAIL" => "N",
		"SHOW_SUBSCRIBE" => "N",
		"SHOW_IMAGE" => "Y",
		"SHOW_PRICE" => "Y",
		"SHOW_SUMMARY" => "Y",
		"PATH_TO_ORDER" => SITE_DIR."personal/order/make/",
		"HIDE_ON_BASKET_PAGES" => "N"
	),
	false,
	array(
		"ACTIVE_COMPONENT" => "Y"
	)
);?>
				</div>
				<div class="col-xs-2 header-toggle__wrap header-toggle__wrap_menu visible-xs">
					<button type="button" class="header-toggle__btn header-toggle__btn_menu js__header-toggle-menu"></button>
				</div>
			</div><!-- /.row -->
		</div><!-- /.container -->
	</div><!-- /.main-header -->
	<div class="header-nav animate-dropdown">
    <div class="container">
						<?$APPLICATION->IncludeComponent(
	"bitrix:menu", 
	"top_horizontal", 
	array(
		"ROOT_MENU_TYPE" => "top",
		"MENU_CACHE_TYPE" => "A",
		"MENU_CACHE_TIME" => "36000000",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"MENU_THEME" => "site",
		"CACHE_SELECTED_ITEMS" => "N",
		"MENU_CACHE_GET_VARS" => array(
		),
		"MAX_LEVEL" => "4",
		"CHILD_MENU_TYPE" => "left",
		"USE_EXT" => "Y",
		"DELAY" => "N",
		"ALLOW_MULTI_SELECT" => "N",
		"COMPONENT_TEMPLATE" => "top_horizontal"
	),
	false
);?>
	</div>
	</div>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-78626140-1', 'auto');
  ga('send', 'pageview');
</script>
</header>
	<?if($curPage != SITE_DIR."index.php"){?>
	<?$APPLICATION->IncludeComponent(
	"bitrix:breadcrumb", 
	"marcet", 
	array(
		"COMPONENT_TEMPLATE" => "marcet",
		"START_FROM" => "0",
		"PATH" => "",
		"SITE_ID" => "-"
	),
	false
);?>
						<?}?>
<div class="body-content <?if($curPage == SITE_DIR."index.php"){?>outer-top-xs<?}?>" id="top-banner-and-menu">
	<div class="container">
	<div class="homepage-container">
	<?if(/*($curPage != SITE_DIR."personal/cart/index.php") /*&& ($curPage != SITE_DIR."catalog/compare/index.php") && ($curPage != SITE_DIR."about/contacts/index.php") && ($curPage != SITE_DIR."about/faq/index.php") && ($curPage != SITE_DIR."personal/order/make/index.php") && */($curPage != SITE_DIR."index.php")  /*&& ($curPage != SITE_DIR."stores/index.php")*/){?>
						<?$APPLICATION->IncludeComponent(
							"bitrix:main.include",
							"",
							Array(
								"AREA_FILE_SHOW" => "sect",
								"AREA_FILE_SUFFIX" => "sidebar",
								"AREA_FILE_RECURSIVE" => "Y",
								"EDIT_MODE" => "html",
							),
							false,
							Array('HIDE_ICONS' => 'Y')
						);?>
	<?}?>
	<div class="col-xs-12 col-sm-12 col-md-<?if(($curPage != SITE_DIR."index.php")){?>9<?}else{?>12<?}?> homebanner-holder">

<?if(($curPage == SITE_DIR."index.php")){?>
<style>
	@media (min-width: 992px) {
		.col-md-12 {
			width: 100% !important;
		}
	}
</style>
<?}?>
