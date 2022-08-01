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
    <?=GetMessage('REVIEWS')?>
</h1>

<?$countElemAr = count($arResult['ITEMS']);
for ($i = 0; $i < $countElemAr; $i=$i+2):
$arItem = $arResult['ITEMS'][$i];
$arItem1 = $arResult['ITEMS'][$i+1];
$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
$this->AddEditAction($arItem1['ID'], $arItem1['EDIT_LINK'], CIBlock::GetArrayByID($arItem1["IBLOCK_ID"], "ELEMENT_EDIT"));
$this->AddDeleteAction($arItem1['ID'], $arItem1['DELETE_LINK'], CIBlock::GetArrayByID($arItem1["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
?>
    <div class="row">
        <?if($arItem['ID']):?>
                <div class="col-md"
                     id="<?=$this->GetEditAreaId($arItem['ID']);?>"
                >
                    <div class="quote dark">
                        <blockquote>
                            <p>
                                <?=$arItem['PROPERTIES']['TEXT']['~VALUE']['TEXT']?>
                            </p>
                        </blockquote>
                    </div>
                    <div class="quote-footer text-right">
                        <div class="quote-author-img">
                            <img src="<?=CFile::GetPath($arItem['PROPERTIES']['IMAGE']['VALUE'])?>"
                                 alt="Аватар пользователя <?=$arItem['PROPERTIES']['NAME']['VALUE']?>"
                            >
                        </div>
                        <h4>
                            <?=$arItem['PROPERTIES']['NAME']['VALUE']?>
                        </h4>
                    </div>
                </div>
        <?endif;?>

        <?if($arItem1['ID']):?>
                <div class="col-md"
                     id="<?=$this->GetEditAreaId($arItem1['ID']);?>"
                >
                    <div class="quote dark">
                        <blockquote>
                            <p>
                                <?=$arItem1['PROPERTIES']['TEXT']['~VALUE']['TEXT']?>
                            </p>
                        </blockquote>
                    </div>
                    <div class="quote-footer text-right">
                        <div class="quote-author-img">
                            <img src="<?=CFile::GetPath($arItem1['PROPERTIES']['IMAGE']['VALUE'])?>"
                                 alt="Аватар пользователя <?=$arItem1['PROPERTIES']['NAME']['VALUE']?>"
                            >
                        </div>
                        <h4>
                            <?=$arItem1['PROPERTIES']['NAME']['VALUE']?>
                        </h4>
                    </div>
                </div>
        <?endif;?>
    </div>
<?endfor;?>

