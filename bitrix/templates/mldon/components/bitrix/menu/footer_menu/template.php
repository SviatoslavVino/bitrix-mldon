<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>
<ul class="list-unstyled d-flex">

<?
foreach($arResult as $arItem):
	if($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1)
		continue;
?>
	<?if($arItem["SELECTED"]):?>
		<li class="ms-3">
            <a href="<?=$arItem["LINK"]?>"
               class="link-dark fw-bold fs-4 text-decoration-none text-white"
            >
                <?=$arItem["TEXT"]?>
            </a>
        </li>
	<?else:?>
		<li class="ms-3">
            <a href="<?=$arItem["LINK"]?>"
               class="link-dark fw-bold fs-4 text-decoration-none text-white"
            >
                <?=$arItem["TEXT"]?>
            </a>
        </li>
	<?endif?>

<?endforeach?>

</ul>
<?endif?>
