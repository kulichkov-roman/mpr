<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

$arCatElemParams = array(
	'TEMPLATE_THEME'                  => 'blue',
    'PRODUCT_DISPLAY_MODE'            => 'Y',
    'ADD_PICT_PROP'                   => 'MORE_PHOTO',
    'LABEL_PROP'                      => 'NEWPRODUCT',
    'OFFER_ADD_PICT_PROP'             => 'MORE_PHOTO',
    'OFFER_TREE_PROPS'                => array(
	    0 => 'TSVET',
	    1 => 'SIZES_SHOES',
	),
    'PRODUCT_SUBSCRIPTION'            => 'N',
    'SHOW_DISCOUNT_PERCENT'           => 'Y',
    'SHOW_OLD_PRICE'                  => 'Y',
    'ADD_TO_BASKET_ACTION'            => 'ADD',
    'SHOW_CLOSE_POPUP'                => 'Y',
    'MESS_BTN_BUY'                    => 'Купить',
    'MESS_BTN_ADD_TO_BASKET'          => 'В корзину',
    'MESS_BTN_SUBSCRIBE'              => '',
    'MESS_BTN_DETAIL'                 => 'Подробнее',
    'MESS_NOT_AVAILABLE'              => 'Нет в наличии',
    'MESS_BTN_COMPARE'                => '',
    'IBLOCK_TYPE'                     => 'catalog_kosmetika',
    'IBLOCK_ID'                       => 8,
    'ELEMENT_SORT_FIELD'              => 'NAME',
    'ELEMENT_SORT_ORDER'              => 'asc',
    'ELEMENT_SORT_FIELD2'             => 'id',
    'ELEMENT_SORT_ORDER2'             => 'desc',
    'PROPERTY_CODE'                   => array(
	    0 => 'NEWPRODUCT',
        1 => 'SALELEADER',
        2 => 'SPECIALOFFER'
    ),
    'META_KEYWORDS'                   => 'UF_KEYWORDS',
    'META_DESCRIPTION'                => 'UF_META_DESCRIPTION',
    'BROWSER_TITLE'                   => 'UF_BROWSER_TITLE',
    'SET_LAST_MODIFIED'               => false,
    'INCLUDE_SUBSECTIONS'             => 'Y',
    'BASKET_URL'                      => '/personal/cart/',
    'ACTION_VARIABLE'                 => 'action_catalog',
    'PRODUCT_ID_VARIABLE'             => 'id_catalog',
    'SECTION_ID_VARIABLE'             => 'SECTION_ID',
    'PRODUCT_QUANTITY_VARIABLE'       => 'quantity_catalog',
    'PRODUCT_PROPS_VARIABLE'          => 'prop_catalog',
    'FILTER_NAME'                     => 'arrFilter',
    'CACHE_TYPE'                      => 'N',
    'CACHE_TIME'                      => '36000000',
    'CACHE_FILTER'                    => false,
    'CACHE_GROUPS'                    => 'Y',
    'SET_TITLE'                       => true,
    'MESSAGE_404'                     => '',
    'SET_STATUS_404'                  => 'Y',
    'SHOW_404'                        => 'N',
    'FILE_404'                        => null,
    'DISPLAY_COMPARE'                 => true,
    'PAGE_ELEMENT_COUNT'              => 15,
    'LINE_ELEMENT_COUNT'              => 3,
    'PRICE_CODE'                      => array(
	    0 => 'Цена для сайта'
    ),
    'USE_PRICE_COUNT'                 => false,
    'SHOW_PRICE_COUNT'                => 1,
    'PRICE_VAT_INCLUDE'               => true,
    'USE_PRODUCT_QUANTITY'            => false,
    'ADD_PROPERTIES_TO_BASKET'        => 'N',
    'PARTIAL_PRODUCT_PROPERTIES'      => 'N',
    'PRODUCT_PROPERTIES'              => array(),
    'DISPLAY_TOP_PAGER'               => true,
    'DISPLAY_BOTTOM_PAGER'            => true,
    'PAGER_TITLE'                     => 'Товары',
    'PAGER_SHOW_ALWAYS'               => false,
    'PAGER_TEMPLATE'                  => 'round',
    'PAGER_DESC_NUMBERING'            => false,
    'PAGER_DESC_NUMBERING_CACHE_TIME' => 36000000,
    'PAGER_SHOW_ALL'                  => false,
    'PAGER_BASE_LINK_ENABLE'          => 'N',
    'PAGER_BASE_LINK'                 => null,
    'PAGER_PARAMS_NAME'               => null,
    'OFFERS_CART_PROPERTIES'          => array(),
    'OFFERS_FIELD_CODE'               => array(
	    0 => 'NAME',
        1 => 'PREVIEW_PICTURE',
        2 => 'DETAIL_PICTURE',
	),
    'OFFERS_PROPERTY_CODE'            => array(
	    0 => 'TSVET',
        1 => 'SIZES_SHOES',
        2 => 'SIZES_CLOTHES',
	),
    'OFFERS_SORT_FIELD'               => 'sort',
    'OFFERS_SORT_ORDER'               => 'desc',
    'OFFERS_SORT_FIELD2'              => 'id',
    'OFFERS_SORT_ORDER2'              => 'desc',
    'OFFERS_LIMIT'                    => 0,
    'SECTION_ID'                      => 113,
    'SECTION_CODE'                    => 'dlya_litsa_1',
    'SECTION_URL'                     => '/catalog/#SECTION_CODE_PATH#/',
    'DETAIL_URL'                      => '/catalog/#SECTION_CODE_PATH#/#ELEMENT_CODE#/',
    'USE_MAIN_ELEMENT_SECTION'        => false,
    'CONVERT_CURRENCY'                => 'Y',
    'CURRENCY_ID'                     => 'RUB',
    'HIDE_NOT_AVAILABLE'              => 'N',
    'ADD_SECTIONS_CHAIN'              => false,
    'COMPARE_PATH'                    => '/catalog/compare/?action_catalog=COMPARE',
    '~IBLOCK_TYPE'                    => 'catalog_kosmetika',
    '~IBLOCK_ID'                      => '8',
    '~ELEMENT_SORT_FIELD'             => 'NAME',
    '~ELEMENT_SORT_ORDER'             => 'asc',
    '~ELEMENT_SORT_FIELD2'            => 'id',
    '~ELEMENT_SORT_ORDER2'            => 'desc',
    '~PROPERTY_CODE'                  => array(
	    0 => 'NEWPRODUCT',
        1 => 'SALELEADER',
        2 => 'SPECIALOFFER',
        3 => ''
    ),
    '~META_KEYWORDS'                  => 'UF_KEYWORDS',
    '~META_DESCRIPTION'               => 'UF_META_DESCRIPTION',
    '~BROWSER_TITLE'                  => 'UF_BROWSER_TITLE',
    '~SET_LAST_MODIFIED'              => 'N',
    '~INCLUDE_SUBSECTIONS'            => 'Y',
    '~BASKET_URL'                     => '/personal/cart/',
    '~ACTION_VARIABLE'                => 'action_catalog',
    '~PRODUCT_ID_VARIABLE'            => 'id_catalog',
    '~SECTION_ID_VARIABLE'            => 'SECTION_ID',
    '~PRODUCT_QUANTITY_VARIABLE'      => 'quantity_catalog',
    '~PRODUCT_PROPS_VARIABLE'         => 'prop_catalog',
    '~FILTER_NAME'                    => 'arrFilter',
    '~CACHE_TYPE'                     => 'N',
    '~CACHE_TIME'                     => '36000000',
    '~CACHE_FILTER'                   => 'N',
    '~CACHE_GROUPS'                   => 'Y',
    '~SET_TITLE'                      => 'Y',
    '~MESSAGE_404'                    => '',
    '~SET_STATUS_404'                 => 'Y',
    '~SHOW_404'                       => 'N',
    '~FILE_404'                       => null,
    '~DISPLAY_COMPARE'                => 'Y',
    '~PAGE_ELEMENT_COUNT'             => '15',
    '~LINE_ELEMENT_COUNT'             => '3',
    '~PRICE_CODE'                     => array(0 => 'Цена для сайта',),
    '~USE_PRICE_COUNT'                => 'N',
    '~SHOW_PRICE_COUNT'               => '1',
    '~PRICE_VAT_INCLUDE'              => 'Y',
    '~USE_PRODUCT_QUANTITY'           => 'N',
    '~ADD_PROPERTIES_TO_BASKET'       => 'N',
    '~PARTIAL_PRODUCT_PROPERTIES'     => 'N',
    '~PRODUCT_PROPERTIES'             => array(),
    '~DISPLAY_TOP_PAGER'              => 'Y',
    '~DISPLAY_BOTTOM_PAGER'           => 'Y',
    '~PAGER_TITLE'                    => 'Товары',
    '~PAGER_SHOW_ALWAYS'              => 'N',
    '~PAGER_TEMPLATE'                 => 'round',
    '~PAGER_DESC_NUMBERING'           => 'N',
    '~PAGER_DESC_NUMBERING_CACHE_TIME'=> '36000000',
    '~PAGER_SHOW_ALL'                 => 'N',
    '~PAGER_BASE_LINK_ENABLE'         => 'N',
    '~PAGER_BASE_LINK'                => null,
    '~PAGER_PARAMS_NAME'              => null,
    '~OFFERS_CART_PROPERTIES'         => array(0 => 'COLOR_REF,SIZES_SHOES,SIZES_CLOTHES',),
    '~OFFERS_FIELD_CODE'              => array(
	    0 => 'NAME',
        1 => 'PREVIEW_PICTURE',
        2 => 'DETAIL_PICTURE',
        3 => ''
    ),
    '~OFFERS_PROPERTY_CODE'           => array(
	    0 => 'TSVET',
        1 => 'SIZES_SHOES',
        2 => 'SIZES_CLOTHES',
        3 => ''
    ),
    '~OFFERS_SORT_FIELD'              => 'sort',
    '~OFFERS_SORT_ORDER'              => 'desc',
    '~OFFERS_SORT_FIELD2'             => 'id',
    '~OFFERS_SORT_ORDER2'             => 'desc',
    '~OFFERS_LIMIT'                   => '0',
    '~SECTION_ID'                     => '113',
    '~SECTION_CODE'                   => 'dlya_litsa_1',
    '~SECTION_URL'                    => '/catalog/#SECTION_CODE_PATH#/',
    '~DETAIL_URL'                     => '/catalog/#SECTION_CODE_PATH#/#ELEMENT_CODE#/',
    '~USE_MAIN_ELEMENT_SECTION'       => 'N',
    '~CONVERT_CURRENCY'               => 'Y',
    '~CURRENCY_ID'                    => 'RUB',
    '~HIDE_NOT_AVAILABLE'             => 'N',
    '~LABEL_PROP'                     => 'NEWPRODUCT',
    '~ADD_PICT_PROP'                  => 'MORE_PHOTO',
    '~PRODUCT_DISPLAY_MODE'           => 'Y',
    '~OFFER_ADD_PICT_PROP'            => 'MORE_PHOTO',
    '~OFFER_TREE_PROPS'               => array(0 => 'TSVET',
                                               1 => 'SIZES_SHOES',),
    '~PRODUCT_SUBSCRIPTION'           => null,
    '~SHOW_DISCOUNT_PERCENT'          => 'Y',
    '~SHOW_OLD_PRICE'                 => 'Y',
    '~MESS_BTN_BUY'                   => 'Купить',
    '~MESS_BTN_ADD_TO_BASKET'         => 'В корзину',
    '~MESS_BTN_SUBSCRIBE'             => null,
    '~MESS_BTN_DETAIL'                => 'Подробнее',
    '~MESS_NOT_AVAILABLE'             => 'Нет в наличии',
    '~TEMPLATE_THEME'                 => 'site',
    '~ADD_SECTIONS_CHAIN'             => 'N',
    '~ADD_TO_BASKET_ACTION'           => 'ADD',
    '~SHOW_CLOSE_POPUP'               => 'Y',
    '~COMPARE_PATH'                   => '/catalog/compare/',
    'SHOW_ALL_WO_SECTION'             => false,
    'SET_BROWSER_TITLE'               => 'Y',
    'SET_META_KEYWORDS'               => 'Y',
    'SET_META_DESCRIPTION'            => 'Y',
    'BACKGROUND_IMAGE'                => '',
    'DISABLE_INIT_JS_IN_COMPONENT'    => 'N',
    'CUSTOM_CURRENT_PAGE'             => ''
);

$arParams = array_merge($arCatElemParams,$arParams);

$arItemIds = array();
if(!empty($arResult['SEARCH']))
{
	foreach($arResult['SEARCH'] as &$arItem)
	{
		$arItemIds[] = ['ITEMS_ID'];
	}
	if(!empty($arItemIds))
	{
		$arCatElemSort = array();
		$arCatElemSelect = array();
		$arCatElemFilter = array(
			'IBLOCK_ID' => $arParams['IBLOCK_ID'],
			'ID' => $arItemIds
		);
		$rsCatElemElements = CIBlockElement::GetList(
			$arCatElemSort,
			$arFilter,
			false,
			false,
			$arSelect
		);

		$arCatElemElement = array();
		while ($arItem = $rsCatElemElements->Fetch())
		{
			$arCatElemElement[] = $arItem;
		}
	}
}
unset($arItem);

$arResult['ITEMS'] = $arCatElemElement;

echo "<pre>"; var_dump($arResult['ITEMS']); echo "</pre>";

unset($arCatElemElement);

$arDefaultParams = array(
	'TEMPLATE_THEME' => 'blue',
	'PRODUCT_DISPLAY_MODE' => 'N',
	'ADD_PICT_PROP' => '-',
	'LABEL_PROP' => '-',
	'OFFER_ADD_PICT_PROP' => '-',
	'OFFER_TREE_PROPS' => array('-'),
	'PRODUCT_SUBSCRIPTION' => 'N',
	'SHOW_DISCOUNT_PERCENT' => 'N',
	'SHOW_OLD_PRICE' => 'N',
	'ADD_TO_BASKET_ACTION' => 'ADD',
	'SHOW_CLOSE_POPUP' => 'N',
	'MESS_BTN_BUY' => '',
	'MESS_BTN_ADD_TO_BASKET' => '',
	'MESS_BTN_SUBSCRIBE' => '',
	'MESS_BTN_DETAIL' => '',
	'MESS_NOT_AVAILABLE' => '',
	'MESS_BTN_COMPARE' => ''
);
$arParams = array_merge($arDefaultParams, $arParams);

if (!isset($arParams['LINE_ELEMENT_COUNT']))
	$arParams['LINE_ELEMENT_COUNT'] = 3;
$arParams['LINE_ELEMENT_COUNT'] = intval($arParams['LINE_ELEMENT_COUNT']);
if (2 > $arParams['LINE_ELEMENT_COUNT'] || 5 < $arParams['LINE_ELEMENT_COUNT'])
	$arParams['LINE_ELEMENT_COUNT'] = 3;

$arParams['TEMPLATE_THEME'] = (string)($arParams['TEMPLATE_THEME']);
if ('' != $arParams['TEMPLATE_THEME'])
{
	$arParams['TEMPLATE_THEME'] = preg_replace('/[^a-zA-Z0-9_\-\(\)\!]/', '', $arParams['TEMPLATE_THEME']);
	if ('site' == $arParams['TEMPLATE_THEME'])
	{
		$arParams['TEMPLATE_THEME'] = COption::GetOptionString('main', 'wizard_eshop_adapt_theme_id', 'blue', SITE_ID);
	}
	if ('' != $arParams['TEMPLATE_THEME'])
	{
		if (!is_file($_SERVER['DOCUMENT_ROOT'].$this->GetFolder().'/themes/'.$arParams['TEMPLATE_THEME'].'/style.css'))
			$arParams['TEMPLATE_THEME'] = '';
	}
}
if ('' == $arParams['TEMPLATE_THEME'])
	$arParams['TEMPLATE_THEME'] = 'blue';

if ('Y' != $arParams['PRODUCT_DISPLAY_MODE'])
	$arParams['PRODUCT_DISPLAY_MODE'] = 'N';

$arParams['ADD_PICT_PROP'] = trim($arParams['ADD_PICT_PROP']);
if ('-' == $arParams['ADD_PICT_PROP'])
	$arParams['ADD_PICT_PROP'] = '';
$arParams['LABEL_PROP'] = trim($arParams['LABEL_PROP']);
if ('-' == $arParams['LABEL_PROP'])
	$arParams['LABEL_PROP'] = '';
$arParams['OFFER_ADD_PICT_PROP'] = trim($arParams['OFFER_ADD_PICT_PROP']);
if ('-' == $arParams['OFFER_ADD_PICT_PROP'])
	$arParams['OFFER_ADD_PICT_PROP'] = '';
if ('Y' == $arParams['PRODUCT_DISPLAY_MODE'])
{
	if (!is_array($arParams['OFFER_TREE_PROPS']))
		$arParams['OFFER_TREE_PROPS'] = array($arParams['OFFER_TREE_PROPS']);
	foreach ($arParams['OFFER_TREE_PROPS'] as $key => $value)
	{
		$value = (string)$value;
		if ('' == $value || '-' == $value)
			unset($arParams['OFFER_TREE_PROPS'][$key]);
	}
	if (empty($arParams['OFFER_TREE_PROPS']) && isset($arParams['OFFERS_CART_PROPERTIES']) && is_array($arParams['OFFERS_CART_PROPERTIES']))
	{
		$arParams['OFFER_TREE_PROPS'] = $arParams['OFFERS_CART_PROPERTIES'];
		foreach ($arParams['OFFER_TREE_PROPS'] as $key => $value)
		{
			$value = (string)$value;
			if ('' == $value || '-' == $value)
				unset($arParams['OFFER_TREE_PROPS'][$key]);
		}
	}
}
else
{
	$arParams['OFFER_TREE_PROPS'] = array();
}
if ('Y' != $arParams['PRODUCT_SUBSCRIPTION'])
	$arParams['PRODUCT_SUBSCRIPTION'] = 'N';
if ('Y' != $arParams['SHOW_DISCOUNT_PERCENT'])
	$arParams['SHOW_DISCOUNT_PERCENT'] = 'N';
if ('Y' != $arParams['SHOW_OLD_PRICE'])
	$arParams['SHOW_OLD_PRICE'] = 'N';
if ($arParams['ADD_TO_BASKET_ACTION'] != 'BUY')
	$arParams['ADD_TO_BASKET_ACTION'] = 'ADD';
if ($arParams['SHOW_CLOSE_POPUP'] != 'Y')
	$arParams['SHOW_CLOSE_POPUP'] = 'N';
$arParams['MESS_BTN_BUY'] = trim($arParams['MESS_BTN_BUY']);
$arParams['MESS_BTN_ADD_TO_BASKET'] = trim($arParams['MESS_BTN_ADD_TO_BASKET']);
$arParams['MESS_BTN_SUBSCRIBE'] = trim($arParams['MESS_BTN_SUBSCRIBE']);
$arParams['MESS_BTN_DETAIL'] = trim($arParams['MESS_BTN_DETAIL']);
$arParams['MESS_NOT_AVAILABLE'] = trim($arParams['MESS_NOT_AVAILABLE']);
$arParams['MESS_BTN_COMPARE'] = trim($arParams['MESS_BTN_COMPARE']);

if (!empty($arResult['ITEMS']))
{
	$arEmptyPreview = false;
	$strEmptyPreview = $this->GetFolder().'/images/no_photo.png';
	if (file_exists($_SERVER['DOCUMENT_ROOT'].$strEmptyPreview))
	{
		$arSizes = getimagesize($_SERVER['DOCUMENT_ROOT'].$strEmptyPreview);
		if (!empty($arSizes))
		{
			$arEmptyPreview = array(
				'SRC' => $strEmptyPreview,
				'WIDTH' => intval($arSizes[0]),
				'HEIGHT' => intval($arSizes[1])
			);
		}
		unset($arSizes);
	}
	unset($strEmptyPreview);

	$arSKUPropList = array();
	$arSKUPropIDs = array();
	$arSKUPropKeys = array();
	$boolSKU = false;
	$strBaseCurrency = '';
	$boolConvert = isset($arResult['CONVERT_CURRENCY']['CURRENCY_ID']);

	if ($arResult['MODULES']['catalog'])
	{
		if (!$boolConvert)
			$strBaseCurrency = CCurrency::GetBaseCurrency();

		$arSKU = CCatalogSKU::GetInfoByProductIBlock($arParams['IBLOCK_ID']);
		$boolSKU = !empty($arSKU) && is_array($arSKU);
		if ($boolSKU && !empty($arParams['OFFER_TREE_PROPS']) && 'Y' == $arParams['PRODUCT_DISPLAY_MODE'])
		{
			$arSKUPropList = CIBlockPriceTools::getTreeProperties(
				$arSKU,
				$arParams['OFFER_TREE_PROPS'],
				array(
					'PICT' => $arEmptyPreview,
					'NAME' => '-'
				)
			);

			$arNeedValues = array();
			CIBlockPriceTools::getTreePropertyValues($arSKUPropList, $arNeedValues);
			$arSKUPropIDs = array_keys($arSKUPropList);
			if (empty($arSKUPropIDs))
				$arParams['PRODUCT_DISPLAY_MODE'] = 'N';
			else
				$arSKUPropKeys = array_fill_keys($arSKUPropIDs, false);
		}
	}

	$arNewItemsList = array();
	foreach ($arResult['ITEMS'] as $key => $arItem)
	{
		$arItem['CHECK_QUANTITY'] = false;
		if (!isset($arItem['CATALOG_MEASURE_RATIO']))
			$arItem['CATALOG_MEASURE_RATIO'] = 1;
		if (!isset($arItem['CATALOG_QUANTITY']))
			$arItem['CATALOG_QUANTITY'] = 0;
		$arItem['CATALOG_QUANTITY'] = (
		0 < $arItem['CATALOG_QUANTITY'] && is_float($arItem['CATALOG_MEASURE_RATIO'])
			? floatval($arItem['CATALOG_QUANTITY'])
			: intval($arItem['CATALOG_QUANTITY'])
		);
		$arItem['CATALOG'] = false;
		if (!isset($arItem['CATALOG_SUBSCRIPTION']) || 'Y' != $arItem['CATALOG_SUBSCRIPTION'])
			$arItem['CATALOG_SUBSCRIPTION'] = 'N';

		CIBlockPriceTools::getLabel($arItem, $arParams['LABEL_PROP']);

		$productPictures = CIBlockPriceTools::getDoublePicturesForItem($arItem, $arParams['ADD_PICT_PROP']);
		if (empty($productPictures['PICT']))
			$productPictures['PICT'] = $arEmptyPreview;
		if (empty($productPictures['SECOND_PICT']))
			$productPictures['SECOND_PICT'] = $productPictures['PICT'];

		$arItem['PREVIEW_PICTURE'] = $productPictures['PICT'];
		$arItem['PREVIEW_PICTURE_SECOND'] = $productPictures['SECOND_PICT'];
		$arItem['SECOND_PICT'] = true;
		$arItem['PRODUCT_PREVIEW'] = $productPictures['PICT'];
		$arItem['PRODUCT_PREVIEW_SECOND'] = $productPictures['SECOND_PICT'];

		if ($arResult['MODULES']['catalog'])
		{
			$arItem['CATALOG'] = true;
			if (!isset($arItem['CATALOG_TYPE']))
				$arItem['CATALOG_TYPE'] = CCatalogProduct::TYPE_PRODUCT;
			if (
				(CCatalogProduct::TYPE_PRODUCT == $arItem['CATALOG_TYPE'] || CCatalogProduct::TYPE_SKU == $arItem['CATALOG_TYPE'])
				&& !empty($arItem['OFFERS'])
			)
			{
				$arItem['CATALOG_TYPE'] = CCatalogProduct::TYPE_SKU;
			}
			switch ($arItem['CATALOG_TYPE'])
			{
				case CCatalogProduct::TYPE_SET:
					$arItem['OFFERS'] = array();
					$arItem['CHECK_QUANTITY'] = ('Y' == $arItem['CATALOG_QUANTITY_TRACE'] && 'N' == $arItem['CATALOG_CAN_BUY_ZERO']);
					break;
				case CCatalogProduct::TYPE_SKU:
					break;
				case CCatalogProduct::TYPE_PRODUCT:
				default:
					$arItem['CHECK_QUANTITY'] = ('Y' == $arItem['CATALOG_QUANTITY_TRACE'] && 'N' == $arItem['CATALOG_CAN_BUY_ZERO']);
					break;
			}
		}
		else
		{
			$arItem['CATALOG_TYPE'] = 0;
			$arItem['OFFERS'] = array();
		}

		if ($arItem['CATALOG'] && isset($arItem['OFFERS']) && !empty($arItem['OFFERS']))
		{
			if ('Y' == $arParams['PRODUCT_DISPLAY_MODE'])
			{
				$arMatrixFields = $arSKUPropKeys;
				$arMatrix = array();

				$arNewOffers = array();
				$boolSKUDisplayProperties = false;
				$arItem['OFFERS_PROP'] = false;

				$arDouble = array();
				foreach ($arItem['OFFERS'] as $keyOffer => $arOffer)
				{
					$arOffer['ID'] = intval($arOffer['ID']);
					if (isset($arDouble[$arOffer['ID']]))
						continue;
					$arRow = array();
					foreach ($arSKUPropIDs as $propkey => $strOneCode)
					{
						$arCell = array(
							'VALUE' => 0,
							'SORT' => PHP_INT_MAX,
							'NA' => true
						);
						if (isset($arOffer['DISPLAY_PROPERTIES'][$strOneCode]))
						{
							$arMatrixFields[$strOneCode] = true;
							$arCell['NA'] = false;
							if ('directory' == $arSKUPropList[$strOneCode]['USER_TYPE'])
							{
								$intValue = $arSKUPropList[$strOneCode]['XML_MAP'][$arOffer['DISPLAY_PROPERTIES'][$strOneCode]['VALUE']];
								$arCell['VALUE'] = $intValue;
							}
							elseif ('L' == $arSKUPropList[$strOneCode]['PROPERTY_TYPE'])
							{
								$arCell['VALUE'] = intval($arOffer['DISPLAY_PROPERTIES'][$strOneCode]['VALUE_ENUM_ID']);
							}
							elseif ('E' == $arSKUPropList[$strOneCode]['PROPERTY_TYPE'])
							{
								$arCell['VALUE'] = intval($arOffer['DISPLAY_PROPERTIES'][$strOneCode]['VALUE']);
							}
							$arCell['SORT'] = $arSKUPropList[$strOneCode]['VALUES'][$arCell['VALUE']]['SORT'];
						}
						$arRow[$strOneCode] = $arCell;
					}
					$arMatrix[$keyOffer] = $arRow;

					CIBlockPriceTools::clearProperties($arOffer['DISPLAY_PROPERTIES'], $arParams['OFFER_TREE_PROPS']);

					CIBlockPriceTools::setRatioMinPrice($arOffer, false);

					$offerPictures = CIBlockPriceTools::getDoublePicturesForItem($arOffer, $arParams['OFFER_ADD_PICT_PROP']);
					$arOffer['OWNER_PICT'] = empty($offerPictures['PICT']);
					$arOffer['PREVIEW_PICTURE'] = false;
					$arOffer['PREVIEW_PICTURE_SECOND'] = false;
					$arOffer['SECOND_PICT'] = true;
					if (!$arOffer['OWNER_PICT'])
					{
						if (empty($offerPictures['SECOND_PICT']))
							$offerPictures['SECOND_PICT'] = $offerPictures['PICT'];
						$arOffer['PREVIEW_PICTURE'] = $offerPictures['PICT'];
						$arOffer['PREVIEW_PICTURE_SECOND'] = $offerPictures['SECOND_PICT'];
					}
					if ('' != $arParams['OFFER_ADD_PICT_PROP'] && isset($arOffer['DISPLAY_PROPERTIES'][$arParams['OFFER_ADD_PICT_PROP']]))
						unset($arOffer['DISPLAY_PROPERTIES'][$arParams['OFFER_ADD_PICT_PROP']]);

					$arDouble[$arOffer['ID']] = true;
					$arNewOffers[$keyOffer] = $arOffer;
				}
				$arItem['OFFERS'] = $arNewOffers;

				$arUsedFields = array();
				$arSortFields = array();

				foreach ($arSKUPropIDs as $propkey => $strOneCode)
				{
					$boolExist = $arMatrixFields[$strOneCode];
					foreach ($arMatrix as $keyOffer => $arRow)
					{
						if ($boolExist)
						{
							if (!isset($arItem['OFFERS'][$keyOffer]['TREE']))
								$arItem['OFFERS'][$keyOffer]['TREE'] = array();
							$arItem['OFFERS'][$keyOffer]['TREE']['PROP_'.$arSKUPropList[$strOneCode]['ID']] = $arMatrix[$keyOffer][$strOneCode]['VALUE'];
							$arItem['OFFERS'][$keyOffer]['SKU_SORT_'.$strOneCode] = $arMatrix[$keyOffer][$strOneCode]['SORT'];
							$arUsedFields[$strOneCode] = true;
							$arSortFields['SKU_SORT_'.$strOneCode] = SORT_NUMERIC;
						}
						else
						{
							unset($arMatrix[$keyOffer][$strOneCode]);
						}
					}
				}
				$arItem['OFFERS_PROP'] = $arUsedFields;
				$arItem['OFFERS_PROP_CODES'] = (!empty($arUsedFields) ? base64_encode(serialize(array_keys($arUsedFields))) : '');

				Collection::sortByColumn($arItem['OFFERS'], $arSortFields);

				$arMatrix = array();
				$intSelected = -1;
				$arItem['MIN_PRICE'] = false;
				$arItem['MIN_BASIS_PRICE'] = false;
				foreach ($arItem['OFFERS'] as $keyOffer => $arOffer)
				{
					if (empty($arItem['MIN_PRICE']) && $arOffer['CAN_BUY'])
					{
						$intSelected = $keyOffer;
						$arItem['MIN_PRICE'] = (isset($arOffer['RATIO_PRICE']) ? $arOffer['RATIO_PRICE'] : $arOffer['MIN_PRICE']);
						$arItem['MIN_BASIS_PRICE'] = $arOffer['MIN_PRICE'];
					}
					$arSKUProps = false;
					if (!empty($arOffer['DISPLAY_PROPERTIES']))
					{
						$boolSKUDisplayProperties = true;
						$arSKUProps = array();
						foreach ($arOffer['DISPLAY_PROPERTIES'] as &$arOneProp)
						{
							if ('F' == $arOneProp['PROPERTY_TYPE'])
								continue;
							$arSKUProps[] = array(
								'NAME' => $arOneProp['NAME'],
								'VALUE' => $arOneProp['DISPLAY_VALUE']
							);
						}
						unset($arOneProp);
					}

					$arOneRow = array(
						'ID' => $arOffer['ID'],
						'NAME' => $arOffer['~NAME'],
						'TREE' => $arOffer['TREE'],
						'DISPLAY_PROPERTIES' => $arSKUProps,
						'PRICE' => (isset($arOffer['RATIO_PRICE']) ? $arOffer['RATIO_PRICE'] : $arOffer['MIN_PRICE']),
						'BASIS_PRICE' => $arOffer['MIN_PRICE'],
						'SECOND_PICT' => $arOffer['SECOND_PICT'],
						'OWNER_PICT' => $arOffer['OWNER_PICT'],
						'PREVIEW_PICTURE' => $arOffer['PREVIEW_PICTURE'],
						'PREVIEW_PICTURE_SECOND' => $arOffer['PREVIEW_PICTURE_SECOND'],
						'CHECK_QUANTITY' => $arOffer['CHECK_QUANTITY'],
						'MAX_QUANTITY' => $arOffer['CATALOG_QUANTITY'],
						'STEP_QUANTITY' => $arOffer['CATALOG_MEASURE_RATIO'],
						'QUANTITY_FLOAT' => is_double($arOffer['CATALOG_MEASURE_RATIO']),
						'MEASURE' => $arOffer['~CATALOG_MEASURE_NAME'],
						'CAN_BUY' => $arOffer['CAN_BUY'],
					);
					$arMatrix[$keyOffer] = $arOneRow;
				}
				if (-1 == $intSelected)
					$intSelected = 0;
				if (!$arMatrix[$intSelected]['OWNER_PICT'])
				{
					$arItem['PREVIEW_PICTURE'] = $arMatrix[$intSelected]['PREVIEW_PICTURE'];
					$arItem['PREVIEW_PICTURE_SECOND'] = $arMatrix[$intSelected]['PREVIEW_PICTURE_SECOND'];
				}
				$arItem['JS_OFFERS'] = $arMatrix;
				$arItem['OFFERS_SELECTED'] = $intSelected;
				$arItem['OFFERS_PROPS_DISPLAY'] = $boolSKUDisplayProperties;
			}
			else
			{
				$arItem['MIN_PRICE'] = CIBlockPriceTools::getMinPriceFromOffers(
					$arItem['OFFERS'],
					$boolConvert ? $arResult['CONVERT_CURRENCY']['CURRENCY_ID'] : $strBaseCurrency
				);
			}
		}

		if (
			$arResult['MODULES']['catalog']
			&& $arItem['CATALOG']
			&&
			($arItem['CATALOG_TYPE'] == CCatalogProduct::TYPE_PRODUCT
				|| $arItem['CATALOG_TYPE'] == CCatalogProduct::TYPE_SET)
		)
		{
			CIBlockPriceTools::setRatioMinPrice($arItem, false);
			$arItem['MIN_BASIS_PRICE'] = $arItem['MIN_PRICE'];
		}

		if (!empty($arItem['DISPLAY_PROPERTIES']))
		{
			foreach ($arItem['DISPLAY_PROPERTIES'] as $propKey => $arDispProp)
			{
				if ('F' == $arDispProp['PROPERTY_TYPE'])
					unset($arItem['DISPLAY_PROPERTIES'][$propKey]);
			}
		}
		$arItem['LAST_ELEMENT'] = 'N';
		$arNewItemsList[$key] = $arItem;
	}
	$arNewItemsList[$key]['LAST_ELEMENT'] = 'Y';
	$arResult['ITEMS'] = $arNewItemsList;
	$arResult['SKU_PROPS'] = $arSKUPropList;
	$arResult['DEFAULT_PICTURE'] = $arEmptyPreview;

	$arResult['CURRENCIES'] = array();
	if ($arResult['MODULES']['currency'])
	{
		if ($boolConvert)
		{
			$currencyFormat = CCurrencyLang::GetFormatDescription($arResult['CONVERT_CURRENCY']['CURRENCY_ID']);
			$arResult['CURRENCIES'] = array(
				array(
					'CURRENCY' => $arResult['CONVERT_CURRENCY']['CURRENCY_ID'],
					'FORMAT' => array(
						'FORMAT_STRING' => $currencyFormat['FORMAT_STRING'],
						'DEC_POINT' => $currencyFormat['DEC_POINT'],
						'THOUSANDS_SEP' => $currencyFormat['THOUSANDS_SEP'],
						'DECIMALS' => $currencyFormat['DECIMALS'],
						'THOUSANDS_VARIANT' => $currencyFormat['THOUSANDS_VARIANT'],
						'HIDE_ZERO' => $currencyFormat['HIDE_ZERO']
					)
				)
			);
			unset($currencyFormat);
		}
		else
		{
			$currencyIterator = CurrencyTable::getList(array(
				'select' => array('CURRENCY')
			));
			while ($currency = $currencyIterator->fetch())
			{
				$currencyFormat = CCurrencyLang::GetFormatDescription($currency['CURRENCY']);
				$arResult['CURRENCIES'][] = array(
					'CURRENCY' => $currency['CURRENCY'],
					'FORMAT' => array(
						'FORMAT_STRING' => $currencyFormat['FORMAT_STRING'],
						'DEC_POINT' => $currencyFormat['DEC_POINT'],
						'THOUSANDS_SEP' => $currencyFormat['THOUSANDS_SEP'],
						'DECIMALS' => $currencyFormat['DECIMALS'],
						'THOUSANDS_VARIANT' => $currencyFormat['THOUSANDS_VARIANT'],
						'HIDE_ZERO' => $currencyFormat['HIDE_ZERO']
					)
				);
			}
			unset($currencyFormat, $currency, $currencyIterator);
		}
	}
}
?>
