<!DOCTYPE html>
<html class="page" lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- og -->
    <meta property="og:type" content="website">
    <meta property="og:title" content="<?$APPLICATION->ShowTitle()?>">
    <meta property="og:site_name" content="Inzare">
    <meta property="og:description" content="<?$APPLICATION->ShowProperty('description');?>">
    <meta property="og:url" content="<?=$APPLICATION->GetCurPage(false)?>">
    <meta property="og:image" content="<?=SITE_TEMPLATE_PATH?>/images/social-share-cover.jpg">

    <!-- twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?$APPLICATION->ShowTitle()?>">
    <meta name="twitter:description" content="<?$APPLICATION->ShowProperty('description');?>">
    <meta name="twitter:site" content="<?=$APPLICATION->GetCurPage(false)?>">
    <meta name="twitter:image" content="<?=SITE_TEMPLATE_PATH?>/images/social-share-cover.jpg">

    <!-- meta SEO -->
    <title><?$APPLICATION->ShowTitle()?></title>
    <?
    $APPLICATION->ShowCSS();
    $APPLICATION->ShowHeadStrings();
    $APPLICATION->ShowHeadScripts();
    $APPLICATION->ShowMeta('keywords');
    $APPLICATION->ShowMeta('description');
    ?>
    <meta name="yandex-verification" content="79cc564f7649c489" />
    <meta name="google-site-verification" content="Z6x3xq_Xe4LRkJmVQF041Q0gLPmysKND9XoPNKl4cZ8" />

    <!-- icons -->
    <link rel="icon" type="image/png" sizes="160x160" href="<?=SITE_TEMPLATE_PATH?>/images/icons/favicons/160-160.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?=SITE_TEMPLATE_PATH?>/images/icons/favicons/32-32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?=SITE_TEMPLATE_PATH?>/images/icons/favicons/16-16.png">
    <link rel="icon" type="image/svg+xml" sizes="any" href="<?=SITE_TEMPLATE_PATH?>/images/icons/favicon.svg">
    <link rel="apple-touch-icon" href="<?=SITE_TEMPLATE_PATH?>/images/icons/favicons/160-160.png">

    <!-- styles -->
    <script defer src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/stylesheets/mainstyle.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap" rel="stylesheet">
    <script defer src="https://kit.fontawesome.com/af360f57dd.js" crossorigin="anonymous"></script>
        <!-- bootstrap -->
        <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <!-- bootstrap-icons -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

</head>


<body style="background-color: #ccc;" onload="GetPar();">
<?$APPLICATION->ShowPanel();?>
    <div class="mn-cnt" style="background-color: #f9ebc8;">
        <?$APPLICATION->IncludeComponent(
            "bitrix:news.list",
            "header_menu",
            Array(
                "ACTIVE_DATE_FORMAT" => "d.m.Y",
                "ADD_SECTIONS_CHAIN" => "Y",
                "AJAX_MODE" => "N",
                "AJAX_OPTION_ADDITIONAL" => "",
                "AJAX_OPTION_HISTORY" => "N",
                "AJAX_OPTION_JUMP" => "N",
                "AJAX_OPTION_STYLE" => "Y",
                "CACHE_FILTER" => "N",
                "CACHE_GROUPS" => "Y",
                "CACHE_TIME" => "36000000",
                "CACHE_TYPE" => "A",
                "CHECK_DATES" => "Y",
                "DETAIL_URL" => "",
                "DISPLAY_BOTTOM_PAGER" => "Y",
                "DISPLAY_DATE" => "Y",
                "DISPLAY_NAME" => "Y",
                "DISPLAY_PICTURE" => "Y",
                "DISPLAY_PREVIEW_TEXT" => "Y",
                "DISPLAY_TOP_PAGER" => "N",
                "FIELD_CODE" => array("",""),
                "FILTER_NAME" => "",
                "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                "IBLOCK_ID" => $_REQUEST["ID"],
                "IBLOCK_TYPE" => "-",
                "INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
                "INCLUDE_SUBSECTIONS" => "Y",
                "MESSAGE_404" => "",
                "NEWS_COUNT" => "20",
                "PAGER_BASE_LINK_ENABLE" => "N",
                "PAGER_DESC_NUMBERING" => "N",
                "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                "PAGER_SHOW_ALL" => "N",
                "PAGER_SHOW_ALWAYS" => "N",
                "PAGER_TEMPLATE" => ".default",
                "PAGER_TITLE" => "Новости",
                "PARENT_SECTION" => "",
                "PARENT_SECTION_CODE" => "",
                "PREVIEW_TRUNCATE_LEN" => "",

                "SET_BROWSER_TITLE" => "Y",
                "SET_LAST_MODIFIED" => "N",
                "SET_META_DESCRIPTION" => "Y",
                "SET_META_KEYWORDS" => "Y",
                "SET_STATUS_404" => "N",
                "SET_TITLE" => "Y",
                "SHOW_404" => "N",
                "SORT_BY1" => "ACTIVE_FROM",
                "SORT_BY2" => "SORT",
                "SORT_ORDER1" => "DESC",
                "SORT_ORDER2" => "ASC",
                "STRICT_SECTION_CHECK" => "N",
                "PROPERTY_CODE" => array(
                    0 => "LINK",
                    1 => "",
                ),
                "PROPERTY_CODE" => array('LINK'),
            )
        );?>

        <div class="header container ">
            <img src="<?=SITE_TEMPLATE_PATH?>/images/hdr.webp">
        </div>
        <div class="content container">
