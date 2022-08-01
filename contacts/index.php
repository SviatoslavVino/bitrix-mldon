<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Contacts");
?>

    <div class="row">
        <?$APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"contacts_contacts", 
	array(
		"IBLOCK_ID" => "9",
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
		"FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_TYPE" => "contacts_page",
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
			0 => "",
			1 => "LINK",
			2 => "",
		),
		"COMPONENT_TEMPLATE" => "contacts_contacts"
	),
	false
);?>
        <div class="col-md">
            <h1>Обратная связь</h1>
            <p class="label">Можете оставить свое обращение, и наш диспетчер с вами свяжется</p>
            <form action="./scripts/php/send.php" method="POST">
                <div class="form-group row">
                    <label for="fio" class="col-sm-3 col-form-label">Имя*: </label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="fio" placeholder="Например, Сергей" name="fio" required>
                        <small id="fioHelp" class="form-text text-muted">Пожалуйста, введите ваше имя</small>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="phoneNum" class="col-sm-3 col-form-label">Телефон*: </label>
                    <div class="col-sm-9">
                        <input type="tel" class="form-control" id="phoneNum" placeholder="Например, +79969999999" name="phoneNum" required>
                        <small id="numHelp" class="form-text text-muted">Пожалуйста, укажите номер телефона для связи</small>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="mail" class="col-sm-3 col-form-label">E-mail: </label>
                    <div class="col-sm-9">
                        <input type="email" class="form-control" id="mail" placeholder="Например, gmail@gmail.com" name="mail">
                        <small id="mailHelp" class="form-text text-muted">Пожалуйста, укажите email</small>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-9">
                        <label for="txt" align="center">Текст обращения*:</label>
                        <textarea class="form-control" placeholder="Пожалуйста, свяжитесь со мной" id="txt" rows="8" name="txt" required></textarea>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Отправить</button>
            </form>
            <hr>
            <div class="label">Поля, отмеченные звездочкой (*) обязательны к заполнению</div>
        </div>
    </div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
