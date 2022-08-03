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
<h1>
    <?=GetMessage('SERVICES')?>
</h1>

<div class="row service">
    <?foreach ($arResult['ITEMS'] as $arItem):
    $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
    $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
        if($arItem['ID']):
    ?>
        <div class="col-md"
             id="<?=$this->GetEditAreaId($arItem['ID']);?>"
        >
            <p>
                <b>
                    <?=$arItem['PROPERTIES']['TITLE']['~VALUE']['TEXT']?>
                </b>
            </p>
            <hr>
            <p class="label">
                <?=$arItem['PROPERTIES']['DESCRIPTION']['~VALUE']['TEXT']?>
            </p>
            <hr>
            <p>
                <?foreach ($arItem['PROPERTIES']['IMAGE']['VALUE'] as $ownPhoto):?>
                    <img src="<?=CFile::GetPath($ownPhoto)?>"
                         class="img-fluid"
                    >
                <?endforeach;?>
            </p>
            <?=$arItem['PROPERTIES']['MORE_DESCRIPTION']['~VALUE']['TEXT']?>
        </div>



    <?  endif;
    endforeach;?>
</div>

