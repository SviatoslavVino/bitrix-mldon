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

<?$countElemAr = count($arResult['ITEMS']);
for ($i = 0; $i < $countElemAr; $i=$i+3):
?>
    <div class="row align-items-center">
        <?for ($j = 0; $j < 3; $j++):
        $arItem = $arResult['ITEMS'][$i+$j];
        $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
        $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
            if($arItem['ID']):?>
            <div class="col-md col">
                <hr>
                    <p class="label" align="center">
                        <?=$arItem['PROPERTIES']['TEXT']['~VALUE']['TEXT']?>

                    </p>
                <hr>
            </div>
        <?  endif;
        endfor;?>
    </div>

    <div class="row align-items-center">
        <?for ($j = 0; $j < 3; $j++):
        $arItem = $arResult['ITEMS'][$i+$j];
        $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
        $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
            if($arItem['ID']):?>
            <div class="col-md col"
                 id="<?=$this->GetEditAreaId($arItem['ID']);?>"
            >
                <img src="<?=CFile::GetPath($arItem['PROPERTIES']['IMAGE']['VALUE'])?>"
                     style="border-radius: 50px;"
                     class="img-fluid rounded mx-auto d-block"
                >
            </div>
        <?  endif;
        endfor;?>
    </div>
<?endfor;?>

