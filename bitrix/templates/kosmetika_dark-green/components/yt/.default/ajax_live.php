<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");?>
<?/*if (CModule::IncludeModule("sale"))
{
	$rubric = new CSaleBasket;
  $arFields = array(
    "PRODUCT_ID" => $_GET['PRODUCT_ID'],
    "PRICE" => 100,//$_GET['PRICE'],
    "CURRENCY" => $_GET['CURRENCY'],
    "LID" => $_GET['LID'],
    "NAME" => "test",//$_GET['NAME'],
	"PREVIEW_PICTURE" => $_GET['IMG'],
	"DISCOUNT_PRICE" => $_GET['DISCOUNT'],
	"DISCOUNT_VALUE" => $_GET['DISCOUNT_PROC'],
	"DETAIL_PAGE_URL" => $_GET['DETAIL_PAGE_URL'],
	"DELAY" => "Y",
  );


  $ID = $rubric->Add($arFields);
if($ID == false)
    echo $rubric->LAST_ERROR;
}*/?>




<?
if (CModule::IncludeModule("sale") && CModule::IncludeModule("iblock"))
{


    $arSelect = Array("ID", "IBLOCK_ID", "NAME", "DATE_ACTIVE_FROM","PROPERTY_*");//IBLOCK_ID и ID обязательно должны быть указаны, см. описание arSelectFields выше
    $arFilter = Array("IBLOCK_ID"=>8, "ACTIVE"=>"Y", "ID"=>$_GET['PRODUCT_ID']);

    $res = CIBlockElement::GetList(Array(), $arFilter, false, false, $arSelect);
    if($ob = $res->GetNextElement()){
        $arFields = $ob->GetFields();
        $arProps = $ob->GetProperties();

        $name = htmlspecialchars_decode($arFields["NAME"]);
        $id = $arFields["ID"];


    }
    $ar_res = CCatalogProduct::GetByID($id); // свойства товара как такового

    $arFields = array(
        "PRODUCT_ID" => $id,
        "PRODUCT_PRICE_ID" => 0,
        "PRICE" => $_GET["PRICE"],
        "CURRENCY" => 'RUB',
        "LID" => SITE_ID,
        "NAME" => $name,
        "CAN_BUY" => "Y",
        //"QUANTITY" => 1,
        "CALLBACK_FUNC" => "",
        "ORDER_CALLBACK_FUNC" => "",
        "MODULE" => "catalog",
        "FUSER_ID" => \CSaleBasket::GetBasketUserID(),
        "PREVIEW_PICTURE" => $_GET['IMG'],
        "DISCOUNT_PRICE" => $_GET['DISCOUNT'],
        "DISCOUNT_VALUE" => $_GET['DISCOUNT_PROC'],
        "DETAIL_PAGE_URL" => $_GET['DETAIL_PAGE_URL'],
        "DELAY" => "Y"
    );


    CSaleBasket::Add($arFields);
}


?>












<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/epilog_after.php");?>