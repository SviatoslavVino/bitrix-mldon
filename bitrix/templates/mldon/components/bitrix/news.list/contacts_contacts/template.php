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

<?foreach ($arResult['ITEMS'] as $arItem):
$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
?>

    <?if($arItem['ID']):?>
        <div class="list-group-item list-group-item-action list-group-item-info flex-column align-items-start"
             id="<?=$this->GetEditAreaId($arItem['ID']);?>"
        >
            <div class="d-flex w-100 justify-content-between">
                <small>
                    <b>
                        <?=$arItem['PROPERTIES']['TITLE']['~VALUE']?>
                    </b>
                </small>
            </div>
            <?$countElemAr = count($arItem['PROPERTIES']['TEXT']['VALUE']);
            for($i = 0; $i < $countElemAr; $i++):?>
                <p class="mb-1">
                    <a href="<?=$arItem['PROPERTIES']['LINK']['VALUE'][$i]?>"
                        style="text-decoration: none;color: #2d2d2d;">
                        <img src="<?=CFile::GetPath($arItem['PROPERTIES']['IMAGE']['VALUE'])?>"
                             class="img-fluid"
                        >
                        <?=$arItem['PROPERTIES']['TEXT']['DESCRIPTION'][$i]?>
                    </a>

                </p>
            <?endfor;?>
        </div>
    <?endif;
endforeach;?>

</div>
