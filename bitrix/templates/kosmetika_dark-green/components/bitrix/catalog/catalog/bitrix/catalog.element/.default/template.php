 <?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
$templateLibrary = array('popup');
CJSCore::Init(Array("viewer"));
$currencyList = '';
if (!empty($arResult['CURRENCIES']))
{
	$templateLibrary[] = 'currency';
	$currencyList = CUtil::PhpToJSObject($arResult['CURRENCIES'], false, true, true);
}
$templateData = array(
	'TEMPLATE_THEME' => $this->GetFolder().'/themes/'.$arParams['TEMPLATE_THEME'].'/style.css',
	'TEMPLATE_CLASS' => 'bx_'.$arParams['TEMPLATE_THEME'],
	'TEMPLATE_LIBRARY' => $templateLibrary,
	'CURRENCIES' => $currencyList
);
unset($currencyList, $templateLibrary);

$strMainID = $this->GetEditAreaId($arResult['ID']);
$arItemIDs = array(
	'ID' => $strMainID,
	'PICT' => $strMainID.'_pict',
	'DISCOUNT_PICT_ID' => $strMainID.'_dsc_pict',
	'STICKER_ID' => $strMainID.'_sticker',
	'BIG_SLIDER_ID' => $strMainID.'_big_slider',
	'BIG_IMG_CONT_ID' => $strMainID.'_bigimg_cont',
	'SLIDER_CONT_ID' => $strMainID.'_slider_cont',
	'SLIDER_LIST' => $strMainID.'_slider_list',
	'SLIDER_LEFT' => $strMainID.'_slider_left',
	'SLIDER_RIGHT' => $strMainID.'_slider_right',
	'OLD_PRICE' => $strMainID.'_old_price',
	'PRICE' => $strMainID.'_price',
	'DISCOUNT_PRICE' => $strMainID.'_price_discount',
	'SLIDER_CONT_OF_ID' => $strMainID.'_slider_cont_',
	'SLIDER_LIST_OF_ID' => $strMainID.'_slider_list_',
	'SLIDER_LEFT_OF_ID' => $strMainID.'_slider_left_',
	'SLIDER_RIGHT_OF_ID' => $strMainID.'_slider_right_',
	'QUANTITY' => $strMainID.'_quantity',
	'QUANTITY_DOWN' => $strMainID.'_quant_down',
	'COMPARE_LIVE' => $strMainID.'_compare_live',
	'QUANTITY_UP' => $strMainID.'_quant_up',
	'QUANTITY_MEASURE' => $strMainID.'_quant_measure',
	'QUANTITY_LIMIT' => $strMainID.'_quant_limit',
	'BASIS_PRICE' => $strMainID.'_basis_price',
	'BUY_LINK' => $strMainID.'_buy_link',
	'ADD_BASKET_LINK' => $strMainID.'_add_basket_link',
	'BASKET_ACTIONS' => $strMainID.'_basket_actions',
	'NOT_AVAILABLE_MESS' => $strMainID.'_not_avail',
	'COMPARE_LINK' => $strMainID.'_compare_link',
	'PROP' => $strMainID.'_prop_',
	'PROP_DIV' => $strMainID.'_skudiv',
	'DISPLAY_PROP_DIV' => $strMainID.'_sku_prop',
	'OFFER_GROUP' => $strMainID.'_set_group_',
	'BASKET_PROP_DIV' => $strMainID.'_basket_prop',
);
$strObName = 'ob'.preg_replace("/[^a-zA-Z0-9_]/", "x", $strMainID);
$templateData['JS_OBJ'] = $strObName;

$strTitle = (
	isset($arResult["IPROPERTY_VALUES"]["ELEMENT_DETAIL_PICTURE_FILE_TITLE"]) && $arResult["IPROPERTY_VALUES"]["ELEMENT_DETAIL_PICTURE_FILE_TITLE"] != ''
	? $arResult["IPROPERTY_VALUES"]["ELEMENT_DETAIL_PICTURE_FILE_TITLE"]
	: $arResult['NAME']
);
$strAlt = (
	isset($arResult["IPROPERTY_VALUES"]["ELEMENT_DETAIL_PICTURE_FILE_ALT"]) && $arResult["IPROPERTY_VALUES"]["ELEMENT_DETAIL_PICTURE_FILE_ALT"] != ''
	? $arResult["IPROPERTY_VALUES"]["ELEMENT_DETAIL_PICTURE_FILE_ALT"]
	: $arResult['NAME']
);
?>
		<span class="single-product">	
				<div class="row  wow fadeInUp <? echo $templateData['TEMPLATE_CLASS']; ?>" id="<? echo $arItemIDs['ID']; ?>">


<div id="gallery-holder" class="col-xs-12 col-sm-6 col-md-5 gallery-holder">
<?
reset($arResult['MORE_PHOTO']);
$arFirstPhoto = current($arResult['MORE_PHOTO']);
?>
<script>
$('#<? echo $arItemIDs['PICT']; ?>').attr({'data-large': $('img', this).attr('src')});
</script>
		<div class="bx_lt">
<div class="bx_item_slider" id="<? echo $arItemIDs['BIG_SLIDER_ID']; ?>">
	<div class="bx_bigimages" id="<? echo $arItemIDs['BIG_IMG_CONT_ID']; ?>">
	<div class="bx_bigimages_imgcontainer">
	<span class="bx_bigimages_aligner"><img  class="cart-foto" id="<? echo $arItemIDs['PICT']; ?>"  src="<? echo $arFirstPhoto['SRC']; ?>" data-large="<? #echo $arFirstPhoto['SRC']; ?>" alt="<? echo $strAlt; ?>" title="<? echo $strTitle; ?>"></span>
	</div>
	</div>
	
<?
if ($arResult['SHOW_SLIDER'])
{
	if (!isset($arResult['OFFERS']) || empty($arResult['OFFERS']))
	{
		if (5 < $arResult['MORE_PHOTO_COUNT'])
		{
			$strClass = 'bx_slider_conteiner full';
			$strOneWidth = (100/$arResult['MORE_PHOTO_COUNT']).'%';
			$strWidth = (20*$arResult['MORE_PHOTO_COUNT']).'%';
			$strSlideStyle = '';
		}
		else
		{
			$strClass = 'bx_slider_conteiner';
			$strOneWidth = '20%';
			$strWidth = '100%';
			$strSlideStyle = 'display: none;';
		}
?>
	<div class="<? echo $strClass; ?>" id="<? echo $arItemIDs['SLIDER_CONT_ID']; ?>">
	<div class="bx_slider_scroller_container">
	<div class="bx_slide">
	<ul style="width: <? echo $strWidth; ?>;" id="<? echo $arItemIDs['SLIDER_LIST']; ?>">
<?		foreach ($arResult['MORE_PHOTO'] as &$arOnePhoto)
		{
?>
	<li data-value="<? echo $arOnePhoto['ID']; ?>" style="width: <? echo $strOneWidth; ?>; padding-top: <? echo $strOneWidth; ?>;"><span class="cnt"><span class="cnt_item" style="background-image:url('<? echo $arOnePhoto['SRC']; ?>');"></span></span></li>
	
<?
		}
		unset($arOnePhoto);
?>
	</ul>
	</div>
	<div class="bx_slide_left" id="<? echo $arItemIDs['SLIDER_LEFT']; ?>" style="<? echo $strSlideStyle; ?>"></div>
	<div class="bx_slide_right" id="<? echo $arItemIDs['SLIDER_RIGHT']; ?>" style="<? echo $strSlideStyle; ?>"></div>
	</div>
	</div>
<?
	}
	else
	{
		foreach ($arResult['OFFERS'] as $key => $arOneOffer)
		{
			if (!isset($arOneOffer['MORE_PHOTO_COUNT']) || 0 >= $arOneOffer['MORE_PHOTO_COUNT'])
				continue;
			$strVisible = ($key == $arResult['OFFERS_SELECTED'] ? '' : 'none');
			if (5 < $arOneOffer['MORE_PHOTO_COUNT'])
			{
				$strClass = 'bx_slider_conteiner full';
				$strOneWidth = (100/$arOneOffer['MORE_PHOTO_COUNT']).'%';
				$strWidth = (20*$arOneOffer['MORE_PHOTO_COUNT']).'%';
				$strSlideStyle = '';
			}
			else
			{
				$strClass = 'bx_slider_conteiner';
				$strOneWidth = '20%';
				$strWidth = '100%';
				$strSlideStyle = 'display: none;';
			}
?>
	<div class="<? echo $strClass; ?>" id="<? echo $arItemIDs['SLIDER_CONT_OF_ID'].$arOneOffer['ID']; ?>" style="display: <? echo $strVisible; ?>;">
	<div class="bx_slider_scroller_container">
	<div class="bx_slide">
	<ul style="width: <? echo $strWidth; ?>;" id="<? echo $arItemIDs['SLIDER_LIST_OF_ID'].$arOneOffer['ID']; ?>">
<?
			foreach ($arOneOffer['MORE_PHOTO'] as &$arOnePhoto)
			{
?>
	<li data-value="<? echo $arOneOffer['ID'].'_'.$arOnePhoto['ID']; ?>" style="width: <? echo $strOneWidth; ?>; padding-top: <? echo $strOneWidth; ?>"><span class="cnt"><span class="cnt_item" style="background-image:url('<? echo $arOnePhoto['SRC']; ?>');"></span></span></li>
<?
			}
			unset($arOnePhoto);
?>
	</ul>
	</div>
	<div class="bx_slide_left" id="<? echo $arItemIDs['SLIDER_LEFT_OF_ID'].$arOneOffer['ID'] ?>" style="<? echo $strSlideStyle; ?>" data-value="<? echo $arOneOffer['ID']; ?>"></div>
	<div class="bx_slide_right" id="<? echo $arItemIDs['SLIDER_RIGHT_OF_ID'].$arOneOffer['ID'] ?>" style="<? echo $strSlideStyle; ?>" data-value="<? echo $arOneOffer['ID']; ?>"></div>
	</div>
	</div>
<?
		}
	}
}
?>
</div>
		</div>
	</div>
	
<div class='col-sm-6 col-md-7 product-info-block'>
						<div class="product-info">
							<h1 class="name" style="line-height: 24px; width:65%"><?
	echo (
		isset($arResult["IPROPERTY_VALUES"]["ELEMENT_PAGE_TITLE"]) && $arResult["IPROPERTY_VALUES"]["ELEMENT_PAGE_TITLE"] != ''
		? $arResult["IPROPERTY_VALUES"]["ELEMENT_PAGE_TITLE"]
		: $arResult["NAME"]
	); ?></h1>
							
							<div class="rating-reviews m-t-20">
								<div class="row">
									<div class="col-sm-3">
		<?
		$useBrands = ('Y' == $arParams['BRAND_USE']);
$useVoteRating = ('Y' == $arParams['USE_VOTE_RATING']);
	if ($useVoteRating)
	{
		$APPLICATION->IncludeComponent(
			"bitrix:iblock.vote",
			"stars",
			array(
				"IBLOCK_TYPE" => $arParams['IBLOCK_TYPE'],
				"IBLOCK_ID" => $arParams['IBLOCK_ID'],
				"ELEMENT_ID" => $arResult['ID'],
				"ELEMENT_CODE" => "",
				"MAX_VOTE" => "1",
				"VOTE_NAMES" => array("1"),
				"SET_STATUS_404" => "N",
				"DISPLAY_AS_RATING" => $arParams['VOTE_DISPLAY_AS_RATING'],
				"CACHE_TYPE" => $arParams['CACHE_TYPE'],
				"CACHE_TIME" => $arParams['CACHE_TIME']
			),
			$component,
			array("HIDE_ICONS" => "Y")
		);
	}
		?>
		

									</div>
									<div class="col-sm-9">
										<div class="reviews">	
	<?if ($useBrands)
	{
		?><?$APPLICATION->IncludeComponent("h2o:brandblock", "element", array(
			"IBLOCK_TYPE" => $arParams['IBLOCK_TYPE'],
			"IBLOCK_ID" => $arParams['IBLOCK_ID'],
			"ELEMENT_ID" => $arResult['ID'],
			"ELEMENT_CODE" => "",
			"PROP_CODE" => $arParams['BRAND_PROP_CODE'],
			"CACHE_TYPE" => $arParams['CACHE_TYPE'],
			"CACHE_TIME" => $arParams['CACHE_TIME'],
			"CACHE_GROUPS" => $arParams['CACHE_GROUPS'],
			"WIDTH" => "",
			"HEIGHT" => "100"
			),
			$component,
			array("HIDE_ICONS" => "Y")
		);?><?
	}
?>	
<?
unset($useVoteRating, $useBrands);?>
										</div>
									</div>
								</div><!-- /.row -->		
							</div><!-- /.rating-reviews -->
<div class="stock-container info-container m-t-10">
								<div class="row">
									


									
								</div><!-- /.row -->	
							</div>
							<div class="description-container m-t-20">
								<?
if ('' != $arResult['PREVIEW_TEXT'])
{
	if (
		'S' == $arParams['DISPLAY_PREVIEW_TEXT_MODE']
		|| ('E' == $arParams['DISPLAY_PREVIEW_TEXT_MODE'] && '' == $arResult['DETAIL_TEXT'])
	)
	{
?>
<div class="item_info_section">
<?
		echo ('html' == $arResult['PREVIEW_TEXT_TYPE'] ? $arResult['PREVIEW_TEXT'] : '<p>'.$arResult['PREVIEW_TEXT'].'</p>');
?>

</div>
<?
	}
}
if (isset($arResult['OFFERS']) && !empty($arResult['OFFERS']) && !empty($arResult['OFFERS_PROP']))
{
	$arSkuProps = array();
?>
<div class="item_info_section" style="padding-right:150px;" id="<? echo $arItemIDs['PROP_DIV']; ?>">
<?
	foreach ($arResult['SKU_PROPS'] as &$arProp)
	{
		if (!isset($arResult['OFFERS_PROP'][$arProp['CODE']]))
			continue;
		$arSkuProps[] = array(
			'ID' => $arProp['ID'],
			'SHOW_MODE' => $arProp['SHOW_MODE'],
			'VALUES_COUNT' => $arProp['VALUES_COUNT']
		);
		if ('TEXT' == $arProp['SHOW_MODE'])
		{
			if (5 < $arProp['VALUES_COUNT'])
			{
				$strClass = 'bx_item_detail_size full';
				$strOneWidth = (100/$arProp['VALUES_COUNT']).'%';
				$strWidth = (20*$arProp['VALUES_COUNT']).'%';
				$strSlideStyle = '';
			}
			else
			{
				$strClass = 'bx_item_detail_size';
				$strOneWidth = '20%';
				$strWidth = '100%';
				$strSlideStyle = 'display: none;';
			}
?>
	<div class="<? echo $strClass; ?>" id="<? echo $arItemIDs['PROP'].$arProp['ID']; ?>_cont">
		<span class="bx_item_section_name_gray"><? echo htmlspecialcharsex($arProp['NAME']); ?></span>
		<div class="bx_size_scroller_container"><div class="bx_size">
			<ul id="<? echo $arItemIDs['PROP'].$arProp['ID']; ?>_list" style="width: <? echo $strWidth; ?>;margin-left:0%;">
<?
			foreach ($arProp['VALUES'] as $arOneValue)
			{
				$arOneValue['NAME'] = htmlspecialcharsbx($arOneValue['NAME']);
?>
<li data-treevalue="<? echo $arProp['ID'].'_'.$arOneValue['ID']; ?>" data-onevalue="<? echo $arOneValue['ID']; ?>" style="width: <? echo $strOneWidth; ?>; display: none;">
<i title="<? echo $arOneValue['NAME']; ?>"></i><span class="cnt" title="<? echo $arOneValue['NAME']; ?>"><? echo $arOneValue['NAME']; ?></span></li>
<?
			}
?>
			</ul>
			</div>
			<div class="bx_slide_left" style="<? echo $strSlideStyle; ?>" id="<? echo $arItemIDs['PROP'].$arProp['ID']; ?>_left" data-treevalue="<? echo $arProp['ID']; ?>"></div>
			<div class="bx_slide_right" style="<? echo $strSlideStyle; ?>" id="<? echo $arItemIDs['PROP'].$arProp['ID']; ?>_right" data-treevalue="<? echo $arProp['ID']; ?>"></div>
		</div>
	</div>
<?
		}
		elseif ('PICT' == $arProp['SHOW_MODE'])
		{
			if (5 < $arProp['VALUES_COUNT'])
			{
				$strClass = 'bx_item_detail_scu full';
				$strOneWidth = (100/$arProp['VALUES_COUNT']).'%';
				$strWidth = (20*$arProp['VALUES_COUNT']).'%';
				$strSlideStyle = '';
			}
			else
			{
				$strClass = 'bx_item_detail_scu';
				$strOneWidth = '20%';
				$strWidth = '100%';
				$strSlideStyle = 'display: none;';
			}
?>
	<div class="<? echo $strClass; ?>" id="<? echo $arItemIDs['PROP'].$arProp['ID']; ?>_cont">
		<span class="bx_item_section_name_gray"><? echo htmlspecialcharsex($arProp['NAME']); ?></span>
		<div class="bx_scu_scroller_container"><div class="bx_scu">
			<ul id="<? echo $arItemIDs['PROP'].$arProp['ID']; ?>_list" style="width: <? echo $strWidth; ?>;margin-left:0%;">
<?
			foreach ($arProp['VALUES'] as $arOneValue)
			{
				$arOneValue['NAME'] = htmlspecialcharsbx($arOneValue['NAME']);
?>
<li data-treevalue="<? echo $arProp['ID'].'_'.$arOneValue['ID'] ?>" data-onevalue="<? echo $arOneValue['ID']; ?>" style="width: <? echo $strOneWidth; ?>; padding-top: <? echo $strOneWidth; ?>; display: none;" >
<i title="<? echo $arOneValue['NAME']; ?>"></i>
<span class="cnt"><span class="cnt_item" style="background-image:url('<? echo $arOneValue['PICT']['SRC']; ?>');" title="<? echo $arOneValue['NAME']; ?>"></span></span></li>
<?
			}
?>
			</ul>
			</div>
			<div class="bx_slide_left" style="<? echo $strSlideStyle; ?>" id="<? echo $arItemIDs['PROP'].$arProp['ID']; ?>_left" data-treevalue="<? echo $arProp['ID']; ?>"></div>
			<div class="bx_slide_right" style="<? echo $strSlideStyle; ?>" id="<? echo $arItemIDs['PROP'].$arProp['ID']; ?>_right" data-treevalue="<? echo $arProp['ID']; ?>"></div>
		</div>
	</div>
<?
		}
	}
	unset($arProp);
?>
</div>
<?
}
?>
                                <?
                                if (isset($arResult['OFFERS']) && !empty($arResult['OFFERS']))
                                {
                                    $canBuy = $arResult['OFFERS'][$arResult['OFFERS_SELECTED']]['CAN_BUY'];
                                }
                                else
                                {
                                    $canBuy = $arResult['CAN_BUY'];
                                }
                                ?>

							</div><!-- /.description-container -->

							<div class="price-container info-container m-t-20">
								<div class="row">
									
								<?
								$minPrice = (isset($arResult['RATIO_PRICE']) ? $arResult['RATIO_PRICE'] : $arResult['MIN_PRICE']);
								$boolDiscountShow = (0 < $minPrice['DISCOUNT_DIFF']);
								?>
									<div class="col-sm-6">
										<div class="price-box">
											<span class="price" id="<? echo $arItemIDs['PRICE']; ?>" style="display: <?// echo ($canBuy ? '' : 'none'); ?>;"><? echo $minPrice['PRINT_DISCOUNT_VALUE']; ?></span><br/>
                                            <span class="price" id="<? echo $arItemIDs['NOT_AVAILABLE_MESS']; ?>" class="bx_notavailable" style="display: <? echo (!$canBuy ? '' : 'none'); ?>;font-size: 20px;font-family: 'Arial';text-transform: uppercase; color: #3C8279;">Нет в наличии</span>
											<span  id="<? echo $arItemIDs['OLD_PRICE']; ?>" class="price-strike" style="display: <? echo ($boolDiscountShow ? '' : 'none'); ?>"> <? echo ($boolDiscountShow ? $minPrice['PRINT_VALUE'] : ''); ?></span>
										</div>
									</div>

									<div class="col-sm-6">
										<div class="favorite-button m-t-10">
											<a class="btn btn-primary2 wishlist" data-toggle="tooltip" data-placement="right" id="<? echo $arItemIDs['COMPARE_LIVE']; ?>">
											    <i class="fa fa-heart"></i>


											    <strong class="detail_strong"><? echo GetMessage('CATALOG_LIVE'); ?></strong>
                                            </a></br>
                                            <span id="result"></span>


                            <script>

							BX.ready(function(){
							$(document).on("click", '#<? echo $arItemIDs['COMPARE_LIVE']; ?>', function(e){
								 BX.ajax.insertToNode('<?=$templateFolder?>/ajax_live.php?PRODUCT_ID=<? echo $arResult['ID']; ?>&PRICE=<?=$arResult["PRICES"]['Цена для сайта']["VALUE_NOVAT"]?>&NAME=<? echo $arResult['NAME']; ?>&CURRENCY=<? echo $arResult['CATALOG_CURRENCY_1']; ?>&IMG=<? echo $arResult['PREVIEW_PICTURE']['ID']; ?>&DETAIL_PAGE_URL=<? echo $arResult['DETAIL_PAGE_URL']; ?>&LID=<?=SITE_ID?>&DISCOUNT=<?=$arResult['DISCOUNT_DIFF']?>&DISCOUNT_PROC=<?=$arResult['DISCOUNT_DIFF_PERCENT']?>', 'result');
							  });
							});
							</script>
											<?
													if ($arParams['DISPLAY_COMPARE'])
													{
											?>
													<a href="javascript:void(0);" class="btn btn-primary2" id="<? echo $arItemIDs['COMPARE_LINK']; ?>" data-toggle="tooltip" data-placement="right" >
											   <i class="fa fa-user-plus"></i>
											<strong class="detail_strong"><? echo GetMessage('CT_BCE_CATALOG_COMPARE'); ?></strong></a>
											<?
													}
											?>
											
										</div>
									</div>

								</div><!-- /.row -->
							</div><!-- /.price-container -->



							<div class="quantity-container info-container" style="display: <? echo ($canBuy ? '' : 'none'); ?>;">

								<div class="row">
								<?
								$buyBtnMessage = ($arParams['MESS_BTN_BUY'] != '' ? $arParams['MESS_BTN_BUY'] : GetMessage('CT_BCE_CATALOG_BUY'));
								$addToBasketBtnMessage = ($arParams['MESS_BTN_ADD_TO_BASKET'] != '' ? $arParams['MESS_BTN_ADD_TO_BASKET'] : GetMessage('CT_BCE_CATALOG_ADD'));
								$notAvailableMessage = ($arParams['MESS_NOT_AVAILABLE'] != '' ? $arParams['MESS_NOT_AVAILABLE'] : GetMessageJS('CT_BCE_CATALOG_NOT_AVAILABLE'));
								$showBuyBtn = in_array('BUY', $arParams['ADD_TO_BASKET_ACTION']);
								$showAddBtn = in_array('ADD', $arParams['ADD_TO_BASKET_ACTION']);
								if ($arParams['USE_PRODUCT_QUANTITY'] == 'Y')
								{				
								
								?>	
									<div class="col-sm-3">
										<span class="label"><? echo GetMessage('CATALOG_QUANTITY'); ?> :</span>
									</div>


                                    <form action="<?=POST_FORM_ACTION_URI?>" method="post" class="form-order buy_form" enctype="multipart/form-data">

                                        <div class="col-sm-2">
                                            <div class="cart-quantity">
                                                <div class="quant-input">
                                                    <div class="arrows">
                                                      <a href="javascript:void(0)" class="  " id="<? echo $arItemIDs['QUANTITY_UP']; ?>"><div class="arrow plus gradient"><span class="ir"><i class="icon fa fa-sort-asc"></i></span></div></a>
                                                      <a href="javascript:void(0)" class="  " id="<? echo $arItemIDs['QUANTITY_DOWN']; ?>"><div class="arrow minus gradient"><span class="ir"><i class="icon fa fa-sort-desc"></i></span></div></a>
                                                    </div>
                                                   <input name="<?echo $arParams["PRODUCT_QUANTITY_VARIABLE"]?>" id="<? echo $arItemIDs['QUANTITY']; ?>" type="text" class="" value="<? echo (isset($arResult['OFFERS']) && !empty($arResult['OFFERS'])
                                                        ? 1
                                                        : $arResult['CATALOG_MEASURE_RATIO']
                                                    ); ?>">
                                              </div>
                                            </div>
                                        </div>



                                         <?/*
                                        <form action="<?=POST_FORM_ACTION_URI?>" method="post" class="form-order buy_form" enctype="multipart/form-data">

                                            <input type="text" name="<?echo $arParams["PRODUCT_QUANTITY_VARIABLE"]?>" value="1" size="5">

                                            <input type="hidden" name="<?echo $arParams["ACTION_VARIABLE"]?>" value="BUY">
                                            <input type="hidden" name="<?echo $arParams["PRODUCT_ID_VARIABLE"]?>" value="<?echo $arResult["ID"]?>">

                                            <input type="submit" name="<?echo $arParams["ACTION_VARIABLE"]."BUY"?>" value="Купить">
                                            <input type="hidden" name="<?echo $arParams["ACTION_VARIABLE"]."ADD2BASKET"?>" value="<?echo GetMessage("CATALOG_ADD_TO_BASKET")?>">
                                        </form>
                                        */?>



                                        <div class="col-sm-7"  id="<? echo $arItemIDs['BASKET_ACTIONS']; ?>" style="display: <? echo ($canBuy ? '' : 'none'); ?>;">
                                        <?	if ($showAddBtn)
                                            {
                                        ?>
                                                    <?/*<a href="javascript:void(0);" class="btn btn-primary" id="<? echo $arItemIDs['ADD_BASKET_LINK']; ?>"><? echo $addToBasketBtnMessage; ?></a>*/?>
                                                <input type="hidden" name="<?echo $arParams["ACTION_VARIABLE"]?>" value="BUY">
                                                <input type="hidden" name="<?echo $arParams["PRODUCT_ID_VARIABLE"]?>" value="<?echo $arResult["ID"]?>">

                                                <input type="submit" name="<?echo $arParams["ACTION_VARIABLE"]."BUY"?>" class="btn btn-primary" value="В корзину" style="position: relative; top: -3px;">
                                                <input type="hidden" name="<?echo $arParams["ACTION_VARIABLE"]."ADD2BASKET"?>" value="<?echo GetMessage("CATALOG_ADD_TO_BASKET")?>">

                                        <?
                                            }

                                                if ($showBuyBtn)
                                            {
                                        ?>
                                                    <?/*<a href="javascript:void(0);" class="btn btn-primary" id="<? echo $arItemIDs['BUY_LINK']; ?>"><? echo $buyBtnMessage; ?></a>*/?>
                                                <input type="hidden" name="<?echo $arParams["ACTION_VARIABLE"]?>" value="BUY">
                                                <input type="hidden" name="<?echo $arParams["PRODUCT_ID_VARIABLE"]?>" value="<?echo $arResult["ID"]?>">

                                                <input type="submit" name="<?echo $arParams["ACTION_VARIABLE"]."BUY"?>" class="btn btn-primary" value="Купить" style="position: relative; top: -3px;">
                                                <input type="hidden" name="<?echo $arParams["ACTION_VARIABLE"]."ADD2BASKET"?>" value="<?echo GetMessage("CATALOG_ADD_TO_BASKET")?>">
                                        <?
                                            }
                                        ?>



                                        <script>

                                            $(document).on('submit', 'form.buy_form', function (e) {
                                                e.preventDefault();


                                                $(this).bitrixAjax(
                                                    "<?=$arResult['AJAX_ID']?>",
                                                    function (data) {
                                                        update_basket_line();

                                                    }
                                                );

                                                $(this).closest(".row").append("<span style='color: #6BA220; margin-left: 15px;font-size: 20px;'>Товар добавлен в корзину</span>");

                                                //document.location.href = "/personal/cart/";

                                                /*function update_basket_line() {
                                                    $(document).bitrixAjax(
                                                        "<?=$arResult['AJAX_ID']?>",
                                                        function (data) {
                                                            console.log(data);

                                                            $('.dropdown-cart').html(data.find(".dropdown-cart").html());
                                                            //$('.basket').html(data.find(".basket").html());
                                                        }
                                                    );

                                                }*/

                                            });

                                        </script>



                                    </form>



<?$APPLICATION->IncludeComponent(
	"bit-ecommerce:oneclick", 
	".default", 
	array(
		"COMPONENT_TEMPLATE" => ".default",
		"IBLOCK_TYPE" => $arParams['IBLOCK_TYPE'],
		"IBLOCK_ID" => $arParams['IBLOCK_ID'],
		"ELEMENT_ID" => $arResult["ID"],
		"PRICE" => $arResult["PRICES"]['Цена для сайта']["VALUE_NOVAT"],
		"NAME" => $arResult['NAME'],
		"DISCOUNT_PRICE" => $arResult['DISCOUNT_DIFF'],
		"DISCOUNT_VALUE" => $arResult['DISCOUNT_DIFF_PERCENT'],
		"DETAIL_PAGE_URL" => $arResult['DETAIL_PAGE_URL'],
		"OK_TEXT" => "",
		"USE_CAPTCHA" => "N",
		"MODE_EXTENDED" => "Y",
		"USER_DATA_FIELDS" => array(
			0 => "NAME",
			1 => "PERSONAL_PHONE",
		),
		"USER_DATA_FIELDS_REQUIRED" => array(
			0 => "NAME",
			1 => "PERSONAL_PHONE",
		),
		"SEND_MAIL" => "N",
		"SHOW_QUANTITY" => "N",
		"PERSON_TYPE_ID" => "1",
		"SHOW_PROPERTIES" => "",
		"SHOW_PROPERTIES_REQUIRED" => "",
		"SHOW_PAY_SYSTEM" => "N",
		"PAY_SYSTEMS" => array(
			0 => "1",
			1 => "2",
			2 => "3",
			3 => "4",
			4 => "5",
			5 => "7",
		),
		"SHOW_DELIVERY" => "N",
		"DELIVERY" => array(
			0 => "1",
			1 => "2",
		),
		"SHOW_COMMENT" => "N",
		"CREATE_NEW_USER" => "N",
		"PRICE_CODE" => array(
			0 => "BASE",
		),
		"LIST_OFFERS_PROPERTY_CODE" => array(
			0 => "ARTNUMBER",
			1 => "COLOR_REF",
			2 => "",
		),
		"EVENT_MESSAGE_ID" => "",
		"LID" => SITE_ID,
		"PERSON_TYPE_ID" => $arParams['PAY_FIZ_ID'],
	),
	false
);?>
									</div>

								<?								
								}?>
								<script src="//yastatic.net/es5-shims/0.0.2/es5-shims.min.js"></script>
<script src="//yastatic.net/share2/share.js"></script>
<div class="ya-share2" data-services="vkontakte,facebook,odnoklassniki"></div>
								</div><!-- /.row -->
							</div><!-- /.quantity-container -->
<? /*
							<div class="product-social-link m-t-20 text-left">								
								
								<?$APPLICATION->IncludeComponent(
	"bitrix:catalog.socnets.buttons",
	"detail_catalog",
	Array(
		"COMPONENT_TEMPLATE" => ".default",
		"URL_TO_LIKE" => $arResult['DETAIL_PAGE_URL'],
		"TITLE" => $arResult['NAME'],
		"DESCRIPTION" => $arResult['PREVIEW_TEXT'],
		"IMAGE" => $arFirstPhoto['SRC'],
		"FB_USE" => "Y",
		"TW_USE" => "Y",
		"TW_VIA" => "",
		"TW_HASHTAGS" => "",
		"TW_RELATED" => "",
		"GP_USE" => "N",
		"VK_USE" => "Y"
	)
);?>
						       
							</div>
*/?>
							

							
						</div><!-- /.product-info -->
					</div><!-- /.col-sm-7 -->

						</div>
				<div class="product-tabs outer-top-smal  wow fadeInUp">					
						
							<ul id="product-tabs" class="nav nav-tabs nav-tab-cell-detail">
								<?
								if ('' != $arResult['DETAIL_TEXT'] || !empty($arResult['DISPLAY_PROPERTIES']) || $arResult['SHOW_OFFERS_PROPS'])
								{
								?>
								<li class="active"><a data-toggle="tab" href="#description"><? echo GetMessage('FULL_DESCRIPTION'); ?></a></li>
								<?
								}
								?>
								<li><a data-toggle="tab" href="#review"><? echo GetMessage('COMMENTARY'); ?></a></li>	
								<?if($arResult['PROPERTIES']['DOC']['VALUE'] == true){?>							
								<li><a data-toggle="tab" href="#doc"><?=$arResult['PROPERTIES']['DOC']['NAME']?></a></li>	
								<?}?>
								<? /*<li><a data-toggle="tab" href="#sklad"><? echo GetMessage('FULL_SKLAD'); ?></a></li>*/?>
								
								
								<?
								if($arResult['PROPERTIES']['TABL_RAZ']['VALUE'] == true){?>							
								<li><a data-toggle="tab" href="#TABL_RAZ"><?=$arResult['PROPERTIES']['TABL_RAZ']['NAME']?></a></li>	
								<?}?>								
								<li><a id="question_tab" data-toggle="tab" href="#vopros"><? echo GetMessage('FULL_VOPROS'); ?></a></li>
							</ul><!-- /.nav-tabs #product-tabs -->
							
						

							<div class="tab-content outer-top-xs">
							<?
							if ('' != $arResult['DETAIL_TEXT']  || !empty($arResult['DISPLAY_PROPERTIES']) || $arResult['SHOW_OFFERS_PROPS'])
							{
							?>
								<div id="description" class="tab-pane in active">
									<div class="product-tab">
								<?
									if ('html' == $arResult['DETAIL_TEXT_TYPE'])
									{
										echo $arResult['DETAIL_TEXT'];
									}
									else
									{
										?><p><? echo $arResult['DETAIL_TEXT']; ?></p><?
									}
								?>
								<?if (!empty($arResult['DISPLAY_PROPERTIES']) || $arResult['SHOW_OFFERS_PROPS'])
{
?>
<div class="item_info_section">
<?
	if (!empty($arResult['DISPLAY_PROPERTIES']))
	{
?>
	<table class="detail_table">
<?
		foreach ($arResult['DISPLAY_PROPERTIES'] as &$arOneProp)
		{
?><tr>
		<td class="dd"><span><? echo $arOneProp['NAME']; ?></span></td><td class="dt"><span><?
			echo (
				is_array($arOneProp['DISPLAY_VALUE'])
				? implode(' / ', $arOneProp['DISPLAY_VALUE'])
				: $arOneProp['DISPLAY_VALUE']
			); ?></span></td>
			</tr>
			<?
		}
		unset($arOneProp);
?>
</table>	
<?
	}
	if ($arResult['SHOW_OFFERS_PROPS'])
	{
?>
	<dl id="<? echo $arItemIDs['DISPLAY_PROP_DIV'] ?>" style="display: none;"></dl>
<?
	}
?>
</div>
<?
}?>
									</div>
								</div>
								<?
								}
								?>		
<? /*
									<div id="sklad" class="tab-pane">
									<div class="product-tab">
									<?$APPLICATION->IncludeComponent("bitrix:catalog.store.amount", ".default", array(
											"ELEMENT_ID" => $arResult['ID'],
											"STORE_PATH" => "/stores/#store_id#",
											"CACHE_TYPE" => "A",
											"CACHE_TIME" => "36000",
											"MAIN_TITLE" => $arParams['MAIN_TITLE'],
											"USE_MIN_AMOUNT" =>  $arParams['USE_MIN_AMOUNT'],
											"MIN_AMOUNT" => $arParams['MIN_AMOUNT'],
											"STORES" => $arParams['STORES'],
											"SHOW_EMPTY_STORE" => $arParams['SHOW_EMPTY_STORE'],
											"SHOW_GENERAL_STORE_INFORMATION" => $arParams['SHOW_GENERAL_STORE_INFORMATION'],
											"USER_FIELDS" => $arParams['USER_FIELDS'],
											"FIELDS" => array("TITLE", "ADDRESS", "PHONE", "EMAIL", "IMAGE_ID", "COORDINATES", "SCHEDULE"),
										),
										$component,
										array("HIDE_ICONS" => "Y")
									);?> 
									</div>
								</div>
*/?>
								<div id="review" class="tab-pane">
									<div class="product-tab">
									
									<?
									if ('Y' == $arParams['USE_COMMENTS'])
									{

									?>
									<?$APPLICATION->IncludeComponent(
										"bitrix:catalog.comments",
										"catalog_detail",
										array(
											"ELEMENT_ID" => $arResult['ID'],
											"ELEMENT_CODE" => "",
											"IBLOCK_ID" => $arParams['IBLOCK_ID'],
											"SHOW_DEACTIVATED" => $arParams['SHOW_DEACTIVATED'],
											"URL_TO_COMMENT" => "",
											"WIDTH" => "",
											"COMMENTS_COUNT" => "5",
											"BLOG_USE" => $arParams['BLOG_USE'],
											"FB_USE" => $arParams['FB_USE'],
											"FB_APP_ID" => $arParams['FB_APP_ID'],
											"VK_USE" => $arParams['VK_USE'],
											"VK_API_ID" => $arParams['VK_API_ID'],
											"CACHE_TYPE" => $arParams['CACHE_TYPE'],
											"CACHE_TIME" => $arParams['CACHE_TIME'],
											'CACHE_GROUPS' => $arParams['CACHE_GROUPS'],
											"BLOG_TITLE" => "",
											"BLOG_URL" => $arParams['BLOG_URL'],
											"PATH_TO_SMILE" => "",
											"EMAIL_NOTIFY" => $arParams['BLOG_EMAIL_NOTIFY'],
											"AJAX_POST" => "Y",
											"SHOW_SPAM" => "Y",
											"SHOW_RATING" => "N",
											"FB_TITLE" => "",
											"FB_USER_ADMIN_ID" => "",
											"FB_COLORSCHEME" => "light",
											"FB_ORDER_BY" => "reverse_time",
											"VK_TITLE" => "",
											"TEMPLATE_THEME" => "black"
										),
										$component,
										array("HIDE_ICONS" => "Y")
									);?>
									<?
									}
									?>
									
									</div>
								</div>
								<div id="doc" class="tab-pane">
									<div class="product-tab item_info_section">
										<table class="detail_table">
									<?
									$i = 1;
									foreach ($arResult['PROPERTIES']['DOC']['VALUE'] as &$arDocProp)
										{
										$arFile = CFile::GetFileArray($arDocProp);
										$path_parts = pathinfo($arFile['SRC']);
										$inf = $path_parts['extension'];
										?>
										<tr>
										<td class="dd"><span style=" bottom: -22px;">
										<?=$i?>. <a style="color:#000;" href="<?=$arFile['SRC']?>"><?if($arFile['DESCRIPTION']){?><?=$arFile['DESCRIPTION']?><?}else{?><?=$arFile['ORIGINAL_NAME']?><?}?></a>
										</span>
										</td>
										<td class="dt"><span>
										<a href="<?=$arFile['SRC']?>"><div class="bx-file-icon-container-medium icon-<?=$inf?> detail_cart_doc"><div class="bx-file-icon-cover"><div class="bx-file-icon-corner"><div class="bx-file-icon-corner-fix"></div></div><div class="bx-file-icon-images"></div></div><div class="bx-file-icon-label"></div></div></a>
										</span>
										</td>
										</tr>
						
										<?
										$i++;
										}
										unset($arDocProp);?>
									</table>

									</div>
								</div>
								<div id="TABL_RAZ" class="tab-pane">
								
								<div class="product-add-review">																			
												<?													
													$res = CIBlock::GetList(
														Array(), 
														Array(
															'SITE_ID'=>SITE_ID, 
															'ACTIVE'=>'Y', 
															"CNT_ACTIVE"=>"Y", 
															"CODE"=>'clothes_services_tabl_raz'
														), true
													);
													while($ar_res = $res->Fetch())
													{
														$IBLOCK_ID = $ar_res['ID'];
													}													
													?>
											
											<?
											$i = 1;
											foreach ($arResult['PROPERTIES']['TABL_RAZ']['VALUE'] as &$arTabProp)
												{?>
												<?
$res = CIBlockElement::GetByID($arTabProp);
if($ar_res = $res->GetNext())?>
  <h4 class="title"><?=$ar_res['NAME']?></h4>
  <div class="product-tab item_info_section">
	<table class="table table-bordered">

												<?
													  $r = 1;
													  
    $res = CIBlockElement::GetProperty($IBLOCK_ID, $arTabProp, "sort", "asc", array("EMPTY" => "N"));
    while ($ob = $res->GetNext())
    {
		$VALUES[$ob['CODE']][0] = $ob['NAME'];
        $VALUES[$ob['CODE']][$r] = $ob['VALUE'];
	$r++;	
    }
	
	?>
	
	
			
	<?foreach ($VALUES as $RAZ){?>
	<tr>
	<?foreach ($RAZ as $RAZ_VALUE){?>
	<td style="padding: 10px 5px;"><?=$RAZ_VALUE?></td>
	<?}?>
	</tr>
	<?}?>
		
	</table>
	</div>
												

												<?
												$i++;
												}
												unset($arDocProp);?>											
										

									</div>
								</div>
								
								<div id="vopros" class="tab-pane">
									<div class="product-tab item_info_section">
								    <p><?$APPLICATION->IncludeComponent(
	"bitrix:main.feedback_2",
	"left_form_v2",
	array(
		"COMPONENT_TEMPLATE" => "left_form_v2",
		"USE_CAPTCHA" => "N",
		"OK_TEXT" => GetMessage("TEXT_OBR_CATALOG"),
		"EMAIL_TO" => "info@mir-prirody.ru",
		"REQUIRED_FIELDS" => array(
			0 => "NAME",
			1 => "EMAIL",
			2 => "MESSAGE",
		),
		"EVENT_MESSAGE_ID" => array(
			0 => "71",
		)
	),
	false
);?></p>
									</div>
								</div>
							</div>						
							
						
		<div class="bx_md">
<div class="item_info_section">
<?
if (isset($arResult['OFFERS']) && !empty($arResult['OFFERS']))
{
	if ($arResult['OFFER_GROUP'])
	{
		foreach ($arResult['OFFER_GROUP_VALUES'] as $offerID)
		{
?>
	<span id="<? echo $arItemIDs['OFFER_GROUP'].$offerID; ?>" style="display: none;">
<?$APPLICATION->IncludeComponent("bitrix:catalog.set.constructor",
	"catalog_detail",
	array(
		"IBLOCK_ID" => $arResult["OFFERS_IBLOCK"],
		"ELEMENT_ID" => $offerID,
		"PRICE_CODE" => $arParams["PRICE_CODE"],
		"BASKET_URL" => $arParams["BASKET_URL"],
		"OFFERS_CART_PROPERTIES" => $arParams["OFFERS_CART_PROPERTIES"],
		"CACHE_TYPE" => $arParams["CACHE_TYPE"],
		"CACHE_TIME" => $arParams["CACHE_TIME"],
		"CACHE_GROUPS" => $arParams["CACHE_GROUPS"],
		"TEMPLATE_THEME" => $arParams['~TEMPLATE_THEME'],
		"CONVERT_CURRENCY" => $arParams['CONVERT_CURRENCY'],
		"CURRENCY_ID" => $arParams["CURRENCY_ID"]
	),
	$component,
	array("HIDE_ICONS" => "Y")
);?><?
?>
	</span>
<?
		}
	}
}
else
{
	if ($arResult['MODULES']['catalog'] && $arResult['OFFER_GROUP'])
	{
?><?$APPLICATION->IncludeComponent("bitrix:catalog.set.constructor",
	"catalog_detail",
	array(
		"IBLOCK_ID" => $arParams["IBLOCK_ID"],
		"ELEMENT_ID" => $arResult["ID"],
		"PRICE_CODE" => $arParams["PRICE_CODE"],
		"BASKET_URL" => $arParams["BASKET_URL"],
		"CACHE_TYPE" => $arParams["CACHE_TYPE"],
		"CACHE_TIME" => $arParams["CACHE_TIME"],
		"CACHE_GROUPS" => $arParams["CACHE_GROUPS"],
		"TEMPLATE_THEME" => $arParams['~TEMPLATE_THEME'],
		"CONVERT_CURRENCY" => $arParams['CONVERT_CURRENCY'],
		"CURRENCY_ID" => $arParams["CURRENCY_ID"]
	),
	$component,
	array("HIDE_ICONS" => "Y")
);?><?
	}
}
?>
</div>
		</div>				
				
				</div>
						
<?
if (isset($arResult['OFFERS']) && !empty($arResult['OFFERS']))
{
	foreach ($arResult['JS_OFFERS'] as &$arOneJS)
	{
		if ($arOneJS['PRICE']['DISCOUNT_VALUE'] != $arOneJS['PRICE']['VALUE'])
		{
			$arOneJS['PRICE']['DISCOUNT_DIFF_PERCENT'] = -$arOneJS['PRICE']['DISCOUNT_DIFF_PERCENT'];
			$arOneJS['BASIS_PRICE']['DISCOUNT_DIFF_PERCENT'] = -$arOneJS['BASIS_PRICE']['DISCOUNT_DIFF_PERCENT'];
		}
		$strProps = '';
		if ($arResult['SHOW_OFFERS_PROPS'])
		{
			if (!empty($arOneJS['DISPLAY_PROPERTIES']))
			{
				foreach ($arOneJS['DISPLAY_PROPERTIES'] as $arOneProp)
				{
					$strProps .= '<dt>'.$arOneProp['NAME'].'</dt><dd>'.(
						is_array($arOneProp['VALUE'])
						? implode(' / ', $arOneProp['VALUE'])
						: $arOneProp['VALUE']
					).'</dd>';
				}
			}
		}
		$arOneJS['DISPLAY_PROPERTIES'] = $strProps;
	}
	if (isset($arOneJS))
		unset($arOneJS);
	$arJSParams = array(
		'CONFIG' => array(
			'USE_CATALOG' => $arResult['CATALOG'],
			'SHOW_QUANTITY' => $arParams['USE_PRODUCT_QUANTITY'],
			'SHOW_PRICE' => true,
			'SHOW_DISCOUNT_PERCENT' => ($arParams['SHOW_DISCOUNT_PERCENT'] == 'Y'),
			'SHOW_OLD_PRICE' => ($arParams['SHOW_OLD_PRICE'] == 'Y'),
			'SHOW_SKU_PROPS' => $arResult['SHOW_OFFERS_PROPS'],
			'OFFER_GROUP' => $arResult['OFFER_GROUP'],
			'MAIN_PICTURE_MODE' => $arParams['DETAIL_PICTURE_MODE'],
			'SHOW_BASIS_PRICE' => ($arParams['SHOW_BASIS_PRICE'] == 'Y'),
			'ADD_TO_BASKET_ACTION' => $arParams['ADD_TO_BASKET_ACTION'],
			'SHOW_CLOSE_POPUP' => ($arParams['SHOW_CLOSE_POPUP'] == 'Y'),
			'DISPLAY_COMPARE' => $arParams['DISPLAY_COMPARE'],
		),
		'PRODUCT_TYPE' => $arResult['CATALOG_TYPE'],
		'VISUAL' => array(
			'ID' => $arItemIDs['ID'],
			'COMPARE_LINK_ID' => $arItemIDs['COMPARE_LINK']
		),
		'DEFAULT_PICTURE' => array(
			'PREVIEW_PICTURE' => $arResult['DEFAULT_PICTURE'],
			'DETAIL_PICTURE' => $arResult['DEFAULT_PICTURE']
		),
		'PRODUCT' => array(
			'ID' => $arResult['ID'],
			'NAME' => $arResult['~NAME']
		),
		'BASKET' => array(
			'QUANTITY' => $arParams['PRODUCT_QUANTITY_VARIABLE'],
			'BASKET_URL' => $arParams['BASKET_URL'],
			'SKU_PROPS' => $arResult['OFFERS_PROP_CODES'],
			'ADD_URL_TEMPLATE' => $arResult['~ADD_URL_TEMPLATE'],
			'BUY_URL_TEMPLATE' => $arResult['~BUY_URL_TEMPLATE']
		),
		'OFFERS' => $arResult['JS_OFFERS'],
		'OFFER_SELECTED' => $arResult['OFFERS_SELECTED'],
		'TREE_PROPS' => $arSkuProps
	);
	if ($arParams['DISPLAY_COMPARE'])
	{
		$arJSParams['COMPARE'] = array(
			'COMPARE_URL_TEMPLATE' => $arResult['~COMPARE_URL_TEMPLATE'],
			'COMPARE_PATH' => $arParams['COMPARE_PATH']
		);
	}
}
else
{
	$emptyProductProperties = empty($arResult['PRODUCT_PROPERTIES']);
	if ('Y' == $arParams['ADD_PROPERTIES_TO_BASKET'] && !$emptyProductProperties)
	{
?>
<div id="<? echo $arItemIDs['BASKET_PROP_DIV']; ?>" style="display: none;">
<?
		if (!empty($arResult['PRODUCT_PROPERTIES_FILL']))
		{
			foreach ($arResult['PRODUCT_PROPERTIES_FILL'] as $propID => $propInfo)
			{
?>
	<input type="hidden" name="<? echo $arParams['PRODUCT_PROPS_VARIABLE']; ?>[<? echo $propID; ?>]" value="<? echo htmlspecialcharsbx($propInfo['ID']); ?>">
<?
				if (isset($arResult['PRODUCT_PROPERTIES'][$propID]))
					unset($arResult['PRODUCT_PROPERTIES'][$propID]);
			}
		}
		$emptyProductProperties = empty($arResult['PRODUCT_PROPERTIES']);
		if (!$emptyProductProperties)
		{
?>
	<table>
<?
			foreach ($arResult['PRODUCT_PROPERTIES'] as $propID => $propInfo)
			{
?>
	<tr><td><? echo $arResult['PROPERTIES'][$propID]['NAME']; ?></td>
	<td>
<?
				if(
					'L' == $arResult['PROPERTIES'][$propID]['PROPERTY_TYPE']
					&& 'C' == $arResult['PROPERTIES'][$propID]['LIST_TYPE']
				)
				{
					foreach($propInfo['VALUES'] as $valueID => $value)
					{
						?><label><input type="radio" name="<? echo $arParams['PRODUCT_PROPS_VARIABLE']; ?>[<? echo $propID; ?>]" value="<? echo $valueID; ?>" <? echo ($valueID == $propInfo['SELECTED'] ? '"checked"' : ''); ?>><? echo $value; ?></label><br><?
					}
				}
				else
				{
					?><select name="<? echo $arParams['PRODUCT_PROPS_VARIABLE']; ?>[<? echo $propID; ?>]"><?
					foreach($propInfo['VALUES'] as $valueID => $value)
					{
						?><option value="<? echo $valueID; ?>" <? echo ($valueID == $propInfo['SELECTED'] ? '"selected"' : ''); ?>><? echo $value; ?></option><?
					}
					?></select><?
				}
?>
	</td></tr>
<?
			}
?>
	</table>
<?
		}
?>
</div>


<?
	}
	if ($arResult['MIN_PRICE']['DISCOUNT_VALUE'] != $arResult['MIN_PRICE']['VALUE'])
	{
		$arResult['MIN_PRICE']['DISCOUNT_DIFF_PERCENT'] = -$arResult['MIN_PRICE']['DISCOUNT_DIFF_PERCENT'];
		$arResult['MIN_BASIS_PRICE']['DISCOUNT_DIFF_PERCENT'] = -$arResult['MIN_BASIS_PRICE']['DISCOUNT_DIFF_PERCENT'];
	}
	$arJSParams = array(
		'CONFIG' => array(
			'USE_CATALOG' => $arResult['CATALOG'],
			'SHOW_QUANTITY' => $arParams['USE_PRODUCT_QUANTITY'],
			'SHOW_PRICE' => (isset($arResult['MIN_PRICE']) && !empty($arResult['MIN_PRICE']) && is_array($arResult['MIN_PRICE'])),
			'SHOW_DISCOUNT_PERCENT' => ($arParams['SHOW_DISCOUNT_PERCENT'] == 'Y'),
			'SHOW_OLD_PRICE' => ($arParams['SHOW_OLD_PRICE'] == 'Y'),
			'DISPLAY_COMPARE' => $arParams['DISPLAY_COMPARE'],
			'MAIN_PICTURE_MODE' => $arParams['DETAIL_PICTURE_MODE'],
			'SHOW_BASIS_PRICE' => ($arParams['SHOW_BASIS_PRICE'] == 'Y'),
			'ADD_TO_BASKET_ACTION' => $arParams['ADD_TO_BASKET_ACTION'],
			'SHOW_CLOSE_POPUP' => ($arParams['SHOW_CLOSE_POPUP'] == 'Y'),
			'DISPLAY_COMPARE' => $arParams['DISPLAY_COMPARE'],
		),
		'VISUAL' => array(
			'ID' => $arItemIDs['ID'],
		),
		'PRODUCT_TYPE' => $arResult['CATALOG_TYPE'],
		'PRODUCT' => array(
			'ID' => $arResult['ID'],
			'PICT' => $arFirstPhoto,
			'NAME' => $arResult['~NAME'],
			'SUBSCRIPTION' => true,
			'PRICE' => $arResult['MIN_PRICE'],
			'BASIS_PRICE' => $arResult['MIN_BASIS_PRICE'],
			'SLIDER_COUNT' => $arResult['MORE_PHOTO_COUNT'],
			'SLIDER' => $arResult['MORE_PHOTO'],
			'CAN_BUY' => $arResult['CAN_BUY'],
			'CHECK_QUANTITY' => $arResult['CHECK_QUANTITY'],
			'QUANTITY_FLOAT' => is_double($arResult['CATALOG_MEASURE_RATIO']),
			'MAX_QUANTITY' => $arResult['CATALOG_QUANTITY'],
			'STEP_QUANTITY' => $arResult['CATALOG_MEASURE_RATIO'],
		),
		'BASKET' => array(
			'ADD_PROPS' => ($arParams['ADD_PROPERTIES_TO_BASKET'] == 'Y'),
			'QUANTITY' => $arParams['PRODUCT_QUANTITY_VARIABLE'],
			'PROPS' => $arParams['PRODUCT_PROPS_VARIABLE'],
			'EMPTY_PROPS' => $emptyProductProperties,
			'BASKET_URL' => $arParams['BASKET_URL'],
			'ADD_URL_TEMPLATE' => $arResult['~ADD_URL_TEMPLATE'],
			'BUY_URL_TEMPLATE' => $arResult['~BUY_URL_TEMPLATE']
		)
	);
	if ($arParams['DISPLAY_COMPARE'])
	{
		$arJSParams['COMPARE'] = array(
			'COMPARE_URL_TEMPLATE' => $arResult['~COMPARE_URL_TEMPLATE'],
			'COMPARE_PATH' => $arParams['COMPARE_PATH']
		);
	}
	unset($emptyProductProperties);
}
?>
<script type="text/javascript">
var <? echo $strObName; ?> = new JCCatalogElement(<? echo CUtil::PhpToJSObject($arJSParams, false, true); ?>);
BX.message({
	ECONOMY_INFO_MESSAGE: '<? echo GetMessageJS('CT_BCE_CATALOG_ECONOMY_INFO'); ?>',
	BASIS_PRICE_MESSAGE: '<? echo GetMessageJS('CT_BCE_CATALOG_MESS_BASIS_PRICE') ?>',
	TITLE_ERROR: '<? echo GetMessageJS('CT_BCE_CATALOG_TITLE_ERROR') ?>',
	TITLE_BASKET_PROPS: '<? echo GetMessageJS('CT_BCE_CATALOG_TITLE_BASKET_PROPS') ?>',
	BASKET_UNKNOWN_ERROR: '<? echo GetMessageJS('CT_BCE_CATALOG_BASKET_UNKNOWN_ERROR') ?>',
	BTN_SEND_PROPS: '<? echo GetMessageJS('CT_BCE_CATALOG_BTN_SEND_PROPS'); ?>',
	BTN_MESSAGE_BASKET_REDIRECT: '<? echo GetMessageJS('CT_BCE_CATALOG_BTN_MESSAGE_BASKET_REDIRECT') ?>',
	BTN_MESSAGE_CLOSE: '<? echo GetMessageJS('CT_BCE_CATALOG_BTN_MESSAGE_CLOSE'); ?>',
	BTN_MESSAGE_CLOSE_POPUP: '<? echo GetMessageJS('CT_BCE_CATALOG_BTN_MESSAGE_CLOSE_POPUP'); ?>',
	TITLE_SUCCESSFUL: '<? echo GetMessageJS('CT_BCE_CATALOG_ADD_TO_BASKET_OK'); ?>',
	COMPARE_MESSAGE_OK: '<? echo GetMessageJS('CT_BCE_CATALOG_MESS_COMPARE_OK') ?>',
	COMPARE_UNKNOWN_ERROR: '<? echo GetMessageJS('CT_BCE_CATALOG_MESS_COMPARE_UNKNOWN_ERROR') ?>',
	COMPARE_TITLE: '<? echo GetMessageJS('CT_BCE_CATALOG_MESS_COMPARE_TITLE') ?>',
	BTN_MESSAGE_COMPARE_REDIRECT: '<? echo GetMessageJS('CT_BCE_CATALOG_BTN_MESSAGE_COMPARE_REDIRECT') ?>',
	SITE_ID: '<? echo SITE_ID; ?>'
});

BX.ready(function(){
   var obImageView = BX.viewElementBind(
      'gallery-holder',
      {showTitle: false, lockScroll: false},
      function(node){
         return BX.type.isElementNode(node) && (node.getAttribute('data-bx-viewer') || node.getAttribute('data-bx-image'));
      }
   );
});

<?if($_REQUEST["tab"]=="question"){?>
$(document).ready(function(){
    $("#question_tab").click();
});
<?}?>

</script>						
				</span>

				
