<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Book");

CJSCore::Init(array("jquery"));

?>



<div class="content">
    <h1>Онлайн-бронирование билетов</h1>
    <h3 align="center">Заказы обрабатываются в рабочее время с 9:00 до 21:00</h3>



    <form class="row g-3">
        <div class="col-md-4">
            <label for="lastname"
                   class="form-label"
            >
                <?=GetMessage('SURNAME')?>
            </label>
            <input type="text"
                   class="form-control"
                   id="lastname"
            >
        </div>
        <div class="col-md-4">
            <label for="firstname"
                   class="form-label"
            >
                <?=GetMessage('NAME')?>
            </label>
            <input type="text"
                   class="form-control"
                   id="firstname"
            >
        </div>
        <div class="col-md-4">
            <label for="patronymic"
                   class="form-label"
            >
                <?=GetMessage('MIDDLE_NAME')?>
            </label>
            <input type="text"
                   class="form-control"
                   id="patronymic"
            >
        </div>
        <div class="col-md-4">
            <label for="date"
                   class="form-label"
            >
                <?=GetMessage('DATE')?>
            </label>
            <input type="text"
                   class="form-control"
                   id="date"
                   placeholder="<?=GetMessage('CLICK_TO_CHOOSE_DATE')?>"
                   name="date"
            >
        </div>
        <div class="col-md-4">
            <label for="patronymic"
                   class="form-label"
            >
                <?=GetMessage('PHONE')?>
            </label>
            <input type="tel"
                   class="form-control"
                   id="patronymic"
            >
        </div>
        <div class="col-md-2">
            <label for="patronymic"
                   class="form-label"
            >
                <?=GetMessage('MESSENGER')?>
            </label>
            <select id="messenger"
                    class="form-select"
            >
                <option value="Нет мессенджера"
                        selected
                >
                    <?=GetMessage('MESSENGER_NULL')?>
                </option>
                <option value="<?=GetMessage('TELEGRAM')?>">
                    <svg xmlns="http://www.w3.org/2000/svg"
                         width="35"
                         height="35"
                         fill="#fff"
                         class="bi bi-telegram"
                         viewBox="0 0 18 18"
                    >
                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.287 5.906c-.778.324-2.334.994-4.666 2.01-.378.15-.577.298-.595.442-.03.243.275.339.69.47l.175.055c.408.133.958.288 1.243.294.26.006.549-.1.868-.32 2.179-1.471 3.304-2.214 3.374-2.23.05-.012.12-.026.166.016.047.041.042.12.037.141-.03.129-1.227 1.241-1.846 1.817-.193.18-.33.307-.358.336a8.154 8.154 0 0 1-.188.186c-.38.366-.664.64.015 1.088.327.216.589.393.85.571.284.194.568.387.936.629.093.06.183.125.27.187.331.236.63.448.997.414.214-.02.435-.22.547-.82.265-1.417.786-4.486.906-5.751a1.426 1.426 0 0 0-.013-.315.337.337 0 0 0-.114-.217.526.526 0 0 0-.31-.093c-.3.005-.763.166-2.984 1.09z"/>
                    </svg>
                    <?=GetMessage('TELEGRAM')?>
                </option>
                <option value="<?=GetMessage('WHATSAPP')?>">
                    <svg xmlns="http://www.w3.org/2000/svg"
                         width="35"
                         height="35"
                         fill="#fff"
                         class="bi bi-whatsapp"
                         viewBox="0 0 18 18"
                    >
                        <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/>
                    </svg>
                    <?=GetMessage('WHATSAPP')?>
                </option>
                <option value="<?=GetMessage('VIBER')?>">
                    <svg xmlns="http://www.w3.org/2000/svg"
                         aria-hidden="true"
                         role="img"
                         width="1em"
                         height="1em"
                         preserveAspectRatio="xMidYMid meet"
                         viewBox="0 0 24 24"
                    >
                        <path fill="currentColor" d="M11.4 0C9.473.028 5.333.344 3.02 2.467C1.302 4.187.696 6.7.633 9.817C.57 12.933.488 18.776 6.12 20.36h.003l-.004 2.416s-.037.977.61 1.177c.777.242 1.234-.5 1.98-1.302c.407-.44.972-1.084 1.397-1.58c3.85.326 6.812-.416 7.15-.525c.776-.252 5.176-.816 5.892-6.657c.74-6.02-.36-9.83-2.34-11.546c-.596-.55-3.006-2.3-8.375-2.323c0 0-.395-.025-1.037-.017zm.058 1.693c.545-.004.88.017.88.017c4.542.02 6.717 1.388 7.222 1.846c1.675 1.435 2.53 4.868 1.906 9.897v.002c-.604 4.878-4.174 5.184-4.832 5.395c-.28.09-2.882.737-6.153.524c0 0-2.436 2.94-3.197 3.704c-.12.12-.26.167-.352.144c-.13-.033-.166-.188-.165-.414l.02-4.018c-4.762-1.32-4.485-6.292-4.43-8.895c.054-2.604.543-4.738 1.996-6.173c1.96-1.773 5.474-2.018 7.11-2.03zm.38 2.602a.304.304 0 0 0-.004.607c1.624.01 2.946.537 4.028 1.592c1.073 1.046 1.62 2.468 1.633 4.334c.002.167.14.3.307.3a.304.304 0 0 0 .3-.304c-.014-1.984-.618-3.596-1.816-4.764c-1.19-1.16-2.692-1.753-4.447-1.765zm-3.96.695a.981.981 0 0 0-.616.117l-.01.002c-.43.247-.816.562-1.146.932c-.002.004-.006.004-.008.008c-.267.323-.42.638-.46.948a.596.596 0 0 0-.007.14c0 .136.022.27.065.4l.013.01c.135.48.473 1.276 1.205 2.604c.42.768.903 1.5 1.446 2.186c.27.344.56.673.87.984l.132.132c.31.308.64.6.984.87a15.524 15.524 0 0 0 2.186 1.447c1.328.733 2.126 1.07 2.604 1.206l.01.014a1.275 1.275 0 0 0 .54.055c.31-.036.627-.19.948-.46c.004 0 .003-.002.008-.005c.37-.33.683-.72.93-1.148l.003-.01c.225-.432.15-.842-.18-1.12c-.004 0-.698-.58-1.037-.83c-.36-.255-.73-.492-1.113-.71c-.51-.285-1.032-.106-1.248.174l-.447.564c-.23.283-.657.246-.657.246c-3.12-.796-3.955-3.955-3.955-3.955s-.037-.426.248-.656l.563-.448c.277-.215.456-.737.17-1.248a12.73 12.73 0 0 0-.71-1.115a28.35 28.35 0 0 0-.83-1.035a.822.822 0 0 0-.502-.297zm4.49.88a.303.303 0 0 0-.018.606c1.16.085 2.017.466 2.645 1.15c.63.688.93 1.524.906 2.57a.306.306 0 0 0 .61.013c.025-1.175-.334-2.193-1.067-2.994c-.74-.81-1.777-1.253-3.05-1.346h-.024zm.463 1.63a.305.305 0 0 0-.3.287c-.008.167.12.31.288.32c.523.028.875.175 1.113.422c.24.245.388.62.416 1.164a.304.304 0 0 0 .605-.03c-.03-.644-.215-1.178-.58-1.557c-.367-.378-.893-.574-1.52-.607h-.018z"/>
                    </svg>
                    <?=GetMessage('VIBER')?>
                </option>
            </select>
        </div>

        <span class="d-block fs-2">
            <?=GetMessage('FROM')?>
        </span>
        <div class="col-md-5">
            <label for="country_from"
                   class="form-label"
            >
                <?=GetMessage('COUNTRY')?>
            </label>
            <select id="country_from"
                    class="form-select"
            >
                <option value="1"
                        selected
                >
                    <?=GetMessage('CHOOSE_COUNTRY')?>
                </option>
                <option value="<?=GetMessage('COUNTRY_LATVIA')?>">
                    <?=GetMessage('COUNTRY_LATVIA')?>
                </option>
                <option value="<?=GetMessage('COUNTRY_LITHUANIA')?>">
                    <?=GetMessage('COUNTRY_LITHUANIA')?>
                </option>
                <option value="<?=GetMessage('COUNTRY_POLAND')?>">
                    <?=GetMessage('COUNTRY_POLAND')?>
                </option>
                <option value="<?=GetMessage('COUNTRY_DPR')?>">
                    <?=GetMessage('COUNTRY_DPR')?>
                </option>
                <option value="<?=GetMessage('COUNTRY_RUSSIA')?>">
                    <?=GetMessage('COUNTRY_RUSSIA')?>
                </option>
                <option value="<?=GetMessage('COUNTRY_CRIMEA')?>">
                    <?=GetMessage('COUNTRY_CRIMEA')?>
                </option>
            </select>
        </div>

        <div class="col-md-5">
            <label for="city_from"
                   class="form-label"
            >
                <?=GetMessage('CITY')?>
            </label>
            <select id="city_from"
                    class="form-select"
                    disabled
            >
            </select>
        </div>

        <span class="d-block fs-2">
            <?=GetMessage('AT')?>
        </span>

        <div class="col-md-5">
            <label for="country_input"
                   class="form-label"
            >
                <?=GetMessage('COUNTRY')?>
            </label>
            <select id="country_input"
                    class="form-select"
            >
                <option value=""
                        selected
                >
                    <?=GetMessage('CHOOSE_COUNTRY')?>
                </option>
                <option value="<?=GetMessage('COUNTRY_LATVIA')?>">
                    <?=GetMessage('COUNTRY_LATVIA')?>
                </option>
                <option value="<?=GetMessage('COUNTRY_LITHUANIA')?>">
                    <?=GetMessage('COUNTRY_LITHUANIA')?>
                </option>
                <option value="<?=GetMessage('COUNTRY_POLAND')?>">
                    <?=GetMessage('COUNTRY_POLAND')?>
                </option>
                <option value="<?=GetMessage('COUNTRY_DPR')?>">
                    <?=GetMessage('COUNTRY_DPR')?>
                </option>
                <option value="<?=GetMessage('COUNTRY_RUSSIA')?>">
                    <?=GetMessage('COUNTRY_RUSSIA')?>
                </option>
                <option value="<?=GetMessage('COUNTRY_CRIMEA')?>">
                    <?=GetMessage('COUNTRY_CRIMEA')?>
                </option>
            </select>
        </div>

        <div class="col-md-5">
            <label for="city_input"
                   class="form-label"
            >
                <?=GetMessage('CITY')?>
            </label>
            <select id="city_input"
                    class="form-select"
                    disabled
            >
            </select>
        </div>


        <div class="col-md-4">
            <label for="patronymic"
                   class="form-label"
            >
                <?=GetMessage('NUMBER_OF_SEATS')?>
            </label>
            <select class="form-control"
                    id="places"
                    name="places"
                    required
            >
                <option value="">#</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
            </select>
        </div>


        <div class="col-12">
            <button type="submit"
                    class="btn btn-primary fs-3 w-100"
            >
                <?=GetMessage('BOOK')?>
            </button>
        </div>
    </form>


    <br>
    <h3>
        <?=GetMessage('WHY_CHOOSE_OUR_COMPANY')?>
    </h3>
    <?$APPLICATION->IncludeComponent(
        "bitrix:news.list",
        "book_reasons_to_choose_us",
        array(
            "IBLOCK_ID" => "6",
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
            "IBLOCK_TYPE" => "book_page",
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
            "COMPONENT_TEMPLATE" => "book_reasons_to_choose_us"
        ),
        false
    );?>

    <br>
    <?$APPLICATION->IncludeComponent(
        "bitrix:news.list",
        "book_reviews",
        array(
            "IBLOCK_ID" => "7",
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
            "IBLOCK_TYPE" => "service",
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
            "COMPONENT_TEMPLATE" => "info_at_bottom"
        ),
        false
    );?>

</div>


<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>



<!-- <form id="buy" action="./scripts/php/buy.php" method="POST" name="form" onsubmit="return validate()">
     <p><b>Оформление заказа:</b></p>
     <div class="form-row align-items-center">
       <div class="col-md">
         <div class="input-group mb-2">
         <div class="input-group-prepend">
           <div class="input-group-text">Фамилия:</div>
         </div>
         <input type="text" class="form-control" id="surname" name="surname">
       </div>
       </div>

       <div class="col-md">
           <div class="input-group mb-2">
           <div class="input-group-prepend">
           <div class="input-group-text">Имя*:</div>
           </div>
           <input type="text" class="form-control" id="name" name="name" minlength="2" required>
         </div>
       </div>

       <div class="col-md">
         <div class="input-group mb-2">
           <div class="input-group-prepend">
             <div class="input-group-text">Отчество:</div>
           </div>
           <input type="text" class="form-control" id="patronymic" name="patronymic">
         </div>
       </div>
     </div>

     <div class="form-row align-items-center">
       <div class="col-md-4">
         <div class="input-group mb-2">
           <div class="input-group-prepend">
             <div class="input-group-text">Дата:</div>
           </div>
           <input type="text" class="form-control" id="date" readonly placeholder="Кликните, чтобы выбрать дату" name="date">
         </div><p><span style="color: red;" id="datef"></span></p>
       </div>
     </div>

       <div class="form-row align-items-center">
       <div class="col-md-4">
         <div class="input-group mb-2">
           <div class="input-group-prepend">
             <div class="input-group-text">Телефон*:</div>
           </div>
           <input type="text" class="chek_phone" id="phone" name="phone" required>

           <p><span style="color: red;" class="chow_error_tel" id="chow_error_tel" ></span></p>
         </div>
       </div>
    </div>

    <div class="form-row align-items-center">
       <div class="col-md-5">
         <div class="input-group mb-2">
           <div class="input-group-prepend">
             <div class="input-group-text">Направление*:</div>
           </div>
           <select class="form-control" id="directions" name="directions" required>
             <option value="">Выберите навравление</option>
             <option value="ДНР→Москва"><h1>ДНР→Москва</h1></option>
             <option value="Москва→ДНР"><h1>Москва→ДНР</h1></option>
             <option value="ДНР→Крым">ДНР→Крым</option>
             <option value="Крым→ДНР">Крым→ДНР</option>
             <option value="ДНР→Ростов-на-Дону (ЖД)">ДНР→Ростов-на-Дону (ЖД)</option>
             <option value="Ростов-на-Дону→ДНР (ЖД)">Ростов-на-Дону→ДНР (ЖД)</option>
             <option value="ДНР→Ростов-на-Дону (Платов)">ДНР→Ростов-на-Дону (Платов)</option>
             <option value="Ростов-на-Дону→ДНР (Платов)">Ростов-на-Дону→ДНР (Платов)</option>
             <option value="ДНР→Воронеж">ДНР→Воронеж</option>
             <option value="Воронеж→ДНР">Воронеж→ДНР</option>
             <option value="ДНР→Анапа">ДНР→Анапа</option>
             <option value="Анапа→ДНР">Анапа→ДНР</option>
             <option value="ДНР→Новороссийск">ДНР→Новороссийск</option>
             <option value="Новороссийск→ДНР">Новороссийск→ДНР</option>
             <option value="ДНР→Геленджик">ДНР→Геленджик</option>
             <option value="Геленджик→ДНР">Геленджик→ДНР</option>
             <option value="ДНР→Сочи">ДНР→Сочи</option>
             <option value="Сочи→ДНР">Сочи→ДНР</option>
           </select>
         </div>
       </div>
    </div>


    <div class="form-row align-items-center">
       <div class="col-md-5">
         <div class="input-group mb-2">
           <div class="input-group-prepend">
             <div class="input-group-text">Город ДНР*:</div>
           </div>
           <select class="form-control" id="city" name="city" required>
             <option value="">Выберите Город ДНР</option>
             <option value="Донецк">Донецк</option>
             <option value="Горловка">Горловка</option>
             <option value="Макеевка">Макеевка</option>
             <option value="Енакиево">Енакиево</option>
             <option value="Харцызск">Харцызск</option>
             <option value="Снежное">Снежное</option>
             <option value="Торез">Торез</option>
             <option value="Иловайск">Иловайск</option>
             <option value="Амвросиевка">Амвросиевка</option>
             <option value="Успенка">Успенка</option>
           </select>
         </div>
       </div>
    </div>

    <div class="form-row align-items-center">
       <div class="col-md-3">
         <div class="input-group mb-2">
           <div class="input-group-prepend">
             <div class="input-group-text">Количество мест*:</div>
           </div>
           <select class="form-control" id="places" name="places" required>
             <option value="">#</option>
             <option value="1">1</option>
             <option value="2">2</option>
             <option value="3">3</option>
             <option value="4">4</option>
             <option value="5">5</option>
             <option value="6">6</option>
             <option value="7">7</option>
             <option value="8">8</option>
             <option value="9">9</option>
             <option value="10">10</option>
             <option value="11">11</option>
             <option value="12">12</option>
             <option value="13">13</option>
             <option value="14">14</option>
             <option value="15">15</option>
           </select>
         </div>
       </div>
       </div>
       <div class="form-row">
         <div class="col-md-3"><button type="submit" class="btn btn-primary"  onclick="valiphone()">Забронировать <i class="fas fa-car-side"></i></button></div>
         </div>
         <hr>
         <div class="label">Поля, отмеченные звездочкой (*) обязательны к заполнению</div>
     </form>
     <div class="alert alert-info"><p>Уважаемые клиенты! <br> Рекомендуем Вам бронировать места заранее!</p>
     <p>Пожалуйста, ознакомьтесь с <a href="rules.html">правилами и требованиями</a>.<br>
     Если у Вас возникли какие-то вопросы, Вы можете задать их <a href="contact.html">диспетчеру</a>.</p>

    </div> -->
