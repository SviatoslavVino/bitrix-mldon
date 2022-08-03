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
<script defer src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script defer src="https://kit.fontawesome.com/af360f57dd.js" crossorigin="anonymous"></script>
<script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

<h1>
    <?=$arResult['Name']?>
</h1>

<div id="carousel"
     class="carousel slide"
     data-ride="carousel"
>
    <div class="carousel-inner"
         align="center"
    >
        <?$arItem = $arResult['ITEMS'][0];
        $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
        $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
            if($arItem['ID']):
        foreach ($arItem['PROPERTIES']['IMAGE']['VALUE'] as $ownImage):?>
            <div class="carousel-item active"
                 id="<?=$this->GetEditAreaId($arItem['ID']);?>"
            >
                <img class="d-block mw-100"
                     src="<?=CFile::GetPath($ownImage)?>"
                     alt="Первый слайд"
                >
            </div>
            <?endforeach;
            endif; ?>
    </div>
    <a class="carousel-control-prev"
       href="#carousel"
       role="button"
       data-slide="prev"
    >
        <span class="carousel-control-prev-icon"
              aria-hidden="true"
        ></span>
        <span class="sr-only">
            <?=GetMessage('PREVIOUS')?>
        </span>
    </a>
    <a class="carousel-control-next"
       href="#carousel"
       role="button"
       data-slide="next"
    >
        <span class="carousel-control-next-icon"
              aria-hidden="true"
        ></span>
        <span class="sr-only">
            <?=GetMessage('NEXT')?>
        </span>
    </a>
</div>

