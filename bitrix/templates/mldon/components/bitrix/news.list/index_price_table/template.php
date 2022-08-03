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
<div class="table-responsive">
    <table class="table table-striped" style="background: #dae5d0; border-radius: 13px;">
        <thead>
        <tr class="text-center">
            <th scope="col"><?=GetMessage('DIRECTION')?></th>
            <th scope="col"><?=GetMessage('TIME')?></th>
            <th scope="col"><?=GetMessage('PRICE')?></th>
            <th scope="col"></th>
        </tr>
        </thead>
        <tbody>
            <?foreach ($arResult['ITEMS'] as $arItem):
            $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
            $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
            ?>
                <tr class="text-center"
                    id="<?=$this->GetEditAreaId($arItem['ID']);?>"
                >
                    <th scope="row">
                        <?=$arItem['PROPERTIES']['DIRECTION']['~VALUE']?>
                    </th>
                    <td>
                        <?=$arItem['PROPERTIES']['TIME']['~VALUE']?>
                    </td>
                    <td>
                        <?=$arItem['PROPERTIES']['PRICE']['~VALUE']?>
                    </td>
                    <td class="text-center">
                        <a href="<?=$arItem['PROPERTIES']['LINK']['~VALUE']?>"
                           class="text-nowrap btn btn-primary"
                           id="btn5"
                        >
                            <?=GetMessage('TO_BOOK')?>
                            <svg xmlns="http://www.w3.org/2000/svg"
                                 width="28"
                                 height="26"
                                 fill="currentColor"
                                 class="bi bi-arrow-bar-left"
                                 viewBox="0 0 18 18"
                            >
                                <path fill-rule="evenodd" d="M12.5 15a.5.5 0 0 1-.5-.5v-13a.5.5 0 0 1 1 0v13a.5.5 0 0 1-.5.5zM10 8a.5.5 0 0 1-.5.5H3.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L3.707 7.5H9.5a.5.5 0 0 1 .5.5z"/>
                            </svg>
                        </a>
                    </td>
                </tr>
            <?endforeach;?>
        </tbody>
    </table>
</div>

