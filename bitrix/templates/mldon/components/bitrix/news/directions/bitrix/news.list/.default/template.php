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

<?
$countElemAr = count($arResult['ITEMS']);
for ($i = 0; $i < $countElemAr; $i=$i+2):
$arItem = $arResult['ITEMS'][$i];
$arItem1 = $arResult['ITEMS'][$i+1];
$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
$this->AddEditAction($arItem1['ID'], $arItem1['EDIT_LINK'], CIBlock::GetArrayByID($arItem1["IBLOCK_ID"], "ELEMENT_EDIT"));
$this->AddDeleteAction($arItem1['ID'], $arItem1['DELETE_LINK'], CIBlock::GetArrayByID($arItem1["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
?>


    <div class="row">
        <per><?var_dump($arItem)?></per>
        <?if($arItem['ID']):?>
        <div class="col-12 col-md-6"
             id="<?=$this->GetEditAreaId($arItem['ID']);?>"
        >
            <div class="card bg-brimary card-city">
                <img src="<?=CFile::GetPath($arItem['PREVIEW_PICTURE']['ID'])?>"
                     class="card-img-top"
                     alt="<?=$arItem['NAME']?>"
                >
                <div class="card-body item">
                    <h3 class="card-title cr-ttl">
                        <?=$arItem['NAME']?>
                    </h3>
                    <a href="<?=$arItem["DETAIL_PAGE_URL"]?>"
                       class="btn btn-primary"
                    >
                        <?=GetMessage('MORE')?>
                    </a>
                    <a href="<?=$arItem['PROPERTIES']['LINK_BOOK']['~VALUE']?>"
                       class="btn btn-primary"
                    >
                        <?=GetMessage('BOOK')?>
                    </a>
                </div>
            </div>
        </div>
        <?endif?>
        <?if($arItem1['ID']):?>
        <div class="col-12 col-md-6"
             id="<?=$this->GetEditAreaId($arItem1['ID']);?>"
        >
            <div class="card bg-brimary card-city">
                <img src="<?=CFile::GetPath($arItem1['PREVIEW_PICTURE']['ID'])?>"
                     class="card-img-top"
                     alt="<?=$arItem1['NAME']?>"
                >
                <div class="card-body item">
                    <h3 class="card-title cr-ttl">
                        <?=$arItem1['NAME']?>
                    </h3>
                    <a href="<?=$arItem1["DETAIL_PAGE_URL"]?>"
                       class="btn btn-primary"
                    >
                        <?=GetMessage('MORE')?>
                    </a>
                    <a href="<?=$arItem1['PROPERTIES']['LINK_BOOK']['~VALUE']?>"
                       class="btn btn-primary"
                    >
                        <?=GetMessage('BOOK')?>
                    </a>
                </div>
            </div>
        </div>
        <?endif?>
    </div>
<?endfor;?>
