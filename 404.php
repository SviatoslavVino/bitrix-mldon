<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
?>
    <main class="main">
        <div class="container error">
            <h1 class="error__title">
                <span>404</span>
                <?$APPLICATION->IncludeComponent("bitrix:main.include","",Array(
                    "AREA_FILE_SHOW" => "file",
                    "PATH" => SITE_TEMPLATE_PATH."/include_areas/404_page_title_text.php",
                ));?>
            </h1>
            <?$APPLICATION->IncludeComponent("bitrix:main.include","",Array(
                "AREA_FILE_SHOW" => "file",
                "PATH" => SITE_TEMPLATE_PATH."/include_areas/404_page_text.php",
            ));?>
        </div>
    </main>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
