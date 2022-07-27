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
?>

<?$arItem = $arResult['ITEMS'][0];
$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
?>

<div class="container-fluid"
     id="<?=$this->GetEditAreaId($arItem['ID']);?>"
>
    <div class="fixed-bottom data-blk p-2">
        <div class="row align-items-center">
            <div>
                <?
                $countElemArr = count($arItem['PROPERTIES']['TELEPHONE']['VALUE']);
                for ($i = 0; $i < $countElemArr; $i++):?>
                    <?=$arItem['PROPERTIES']['SVG']['~VALUE']['TEXT']?>
                    <a class="ref" href="tel:<?=$arItem['PROPERTIES']['TELEPHONE']['DESCRIPTION'][$i]?>">
                        <?=$arItem['PROPERTIES']['TELEPHONE']['~VALUE'][$i]?>
                    </a>
                <?endfor?>
            </div>
        </div>
        <div class="row align-items-center">
            <div class="col-lg col-xl">
                <?=$arItem['PROPERTIES']['TEXT']['~VALUE']['TEXT']?>
            </div>
        </div>
    </div>
</div>
