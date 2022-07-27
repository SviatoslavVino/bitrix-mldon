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

<nav class="navbar navbar-expand-lg navbar-dark bg-dark text-white py-3 mb-4 navbar--box-shadow">
    <div class="container-fluid">
        <a class="navbar-brand "
           href="/"
        >
            <?=GetMessage('DAILY_TRIPS')?>
        </a>
        <button class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarTogglerDemo01"
                aria-controls="navbarTogglerDemo01"
                aria-expanded="true"
                aria-label="Toggle navigation"
        >
<!--            <span class="navbar-toggler-icon">

            </span>-->
        </button>
        <div class="collapse navbar-collapse"
            id="navbarTogglerDemo01"
        >
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0"
                style="gap: 20px;"
            >

                <?foreach ($arResult['ITEMS'] as $arItem):
                $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
                ?>
                    <li class="nav-item"
                        id="<?=$this->GetEditAreaId($arItem['ID']);?>"
                    >
                        <a href="<?=$arItem['CODE']?>"
                           class="nav-link text-center text-white  fs-4"
                        >
                            <?=$arItem['PROPERTIES']['SVG']['~VALUE']['TEXT']?>
                            <?=$arItem['NAME']?>
                        </a>
                    </li>


                <?endforeach;?>
            </ul>
        </div>
    </div>
</nav>
