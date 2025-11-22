<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

use Bitrix\Main\Localization\Loc;
use Bitrix\Catalog\ProductTable;

/**
 * @global CMain $APPLICATION
 * @var array $arParams
 * @var array $arResult
 * @var CatalogSectionComponent $component
 * @var CBitrixComponentTemplate $this
 * @var string $templateName
 * @var string $componentPath
 *
 *  _________________________________________________________________________
 * |    Attention!
 * |    The following comments are for system use
 * |    and are required for the component to work correctly in ajax mode:
 * |    <!-- items-container -->
 * |    <!-- pagination-container -->
 * |    <!-- component-end -->
 */

$this->setFrameMode(true);

$elementEdit = CIBlock::GetArrayByID($arParams['IBLOCK_ID'], 'ELEMENT_EDIT');
$elementDelete = CIBlock::GetArrayByID($arParams['IBLOCK_ID'], 'ELEMENT_DELETE');
$elementDeleteParams = ['CONFIRM' => GetMessage('CT_BCS_TPL_ELEMENT_DELETE_CONFIRM')];

?>




<?
if (!empty($arResult['ITEMS'])) :?>
    <?php foreach ($arResult['ITEMS'] as $item): ?>
        <?php $uniqueId = $item['ID'] . '_' . md5($this->randString() . $component->getAction());
        $this->AddEditAction($uniqueId, $item['EDIT_LINK'], $elementEdit);
        $this->AddDeleteAction($uniqueId, $item['DELETE_LINK'], $elementDelete, $elementDeleteParams);

        ?>

        <article class="hm-cat--article__CARD __C-SCRL DOWN" href="<?= $item['DETAIL_PAGE_URL'] ?>"
                 id="<?= $this->GetEditAreaId($uniqueId); ?>">

            <div class="hm-cat--div__CARD_IMAGE">
                <div class="hm-cat--div__SWIPER swiper">
                    <div class="hm-cat--div__SWIPER_WRAPPER swiper-wrapper">
                        <? foreach ($item['SLIDER'] as $image): ?>
                            <div class="hm-cat--div__SWIPER_SLIDE swiper-slide">
                                <div class="hm-cat--div__SWIPER_SLIDE_CONT">
                                    <img class="hm-cat--img__SWIPER_SLIDE"
                                         src="<?= $image['src'] ?>"
                                         alt="" loading="lazy">
                                </div>
                            </div>
                        <? endforeach; ?>
                    </div>
                    <div class="hm-cat--div__SWIPER_PAGINATION swiper-pagination"></div>
                </div>


                <div class="hm-cat--div__CARD_SENSOR"></div>


                <a class="hm-cat--a__CARD_TAG" href="#">
                    <?= $item['PROPERTIES']['CATEGORY']['VALUE'] ?>

                </a>
                <div class="hm-cat--div__CARD_BTNS">
                    <button class="hm-cat--button__CARD_COMPARISON">
                        <svg class="hm-cat--svg__CARD_COMPARISON" width="23" height="28"
                             viewBox="0 0 23 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M22.2508 14H19.582V27.5H22.2508V14Z" fill="#BFBFBF"/>
                            <path d="M2.66878 9.23438H0V27.5H2.66878V9.23438Z" fill="#BFBFBF"/>
                            <path d="M12.4617 0.5H9.79297V27.5H12.4617V0.5Z" fill="#BFBFBF"/>
                        </svg>
                    </button>

                    <button class="hm-cat--button__CARD_FAVOURITES">
                        <svg class="hm-cat--svg__CARD_FAVOURITES" width="28" height="28"
                             viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M21.8609 14.3162C20.7753 14.3162 19.8168 13.7066 19.3539 12.771H15.7222V8.12534C14.5322 7.79933 13.6553 6.71046 13.6553 5.41947C13.6553 4.12847 14.5322 3.03961 15.7222 2.7136V0.5H27.9996V12.771H24.3679C23.9017 13.7066 22.9465 14.3162 21.8609 14.3162ZM17.3522 11.1409H20.5699L20.7133 11.7734C20.8372 12.3113 21.3067 12.6862 21.8576 12.6862C22.4086 12.6862 22.8813 12.3113 23.0019 11.7734L23.1453 11.1409H26.363V2.13004H17.3457V4.24584H16.4524C15.8037 4.24584 15.2788 4.77397 15.2788 5.41947C15.2788 6.06496 15.8069 6.5931 16.4524 6.5931H17.3457V11.1409H17.3522Z"
                                  fill="#BFBFBF"/>
                            <path d="M23.5017 27.4935H11.2275V22.6457L11.86 22.5023C12.3979 22.3784 12.7728 21.909 12.7728 21.358C12.7728 20.8071 12.3979 20.3343 11.86 20.2137L11.2275 20.0703V15.2225H15.3515V16.5559C15.3515 16.8298 15.4167 17.7295 16.2383 17.7295C17.0598 17.7295 17.125 16.8298 17.125 16.5559V15.2225H23.5017V27.5V27.4935ZM12.8576 25.8634H21.8717V16.8493H18.7453C18.6279 18.3392 17.6303 19.3531 16.2383 19.3531C14.8462 19.3531 13.8486 18.3359 13.7345 16.8461H12.8576V18.8477C13.7932 19.3139 14.4028 20.2691 14.4028 21.3548C14.4028 22.4404 13.7932 23.3988 12.8576 23.8618V25.8634Z"
                                  fill="#BFBFBF"/>
                            <path d="M12.8601 27.4869H0.585938V15.2127H4.70666V16.5461C4.70666 16.8199 4.77187 17.7197 5.5934 17.7197C6.41494 17.7197 6.48014 16.8232 6.48014 16.5461V15.2127H12.8601V18.8444C13.7925 19.3106 14.4054 20.2626 14.4054 21.3482C14.4054 22.4371 13.7925 23.3923 12.8601 23.8552V27.4869ZM2.21597 25.8569H11.2301V22.6392L11.8625 22.4957C12.4004 22.3719 12.7721 21.9024 12.7753 21.3514C12.7753 20.8103 12.3906 20.3278 11.8625 20.2072L11.2301 20.0605V16.8427H8.1004C7.98303 18.3326 6.98545 19.3498 5.5934 19.3498C4.20135 19.3498 3.20377 18.3326 3.08967 16.8427H2.21597V25.8569Z"
                                  fill="#BFBFBF"/>
                            <path d="M5.59666 19.353C4.20461 19.353 3.20703 18.3359 3.08967 16.846H0.585938V4.72504H12.8634V8.84904H11.53C11.2561 8.84904 10.3564 8.91425 10.3564 9.73579C10.3564 10.5573 11.2561 10.6225 11.53 10.6225H12.8634V16.846H8.1004C7.98303 18.3359 6.98545 19.353 5.59666 19.353ZM2.21597 15.216H4.70992V16.5494C4.70992 16.8232 4.77513 17.723 5.59666 17.723C6.4182 17.723 6.4834 16.8232 6.4834 16.5494V15.216H11.2333V12.2428C9.74347 12.1254 8.72633 11.1278 8.72633 9.73579C8.72633 8.34373 9.74347 7.34614 11.2333 7.23204V6.35508H2.21597V15.216Z"
                                  fill="#BFBFBF"/>
                        </svg>
                    </button>
                </div>
                <img class="hm-cat--img__CARD_GISP"
                     src="<?= SITE_TEMPLATE_PATH ?>/assets/images/home/hm-cat_icon.svg" alt="ГИСП">
            </div>

            <a class="hm-cat--a__CARD_NAME" href="#">
                <p class="hm-cat--p__CARD_NAME1">
                    <?= $item['NAME'] ?>
                </p>
                <p class="hm-cat--p__CARD_NAME2">
                    <?= $item['PROPERTIES']['NAME_2']['VALUE'] ?>
                </p>
            </a>

            <p class="hm-cat--p__CARD_TEXT">
                <?= mb_substr($item['PREVIEW_TEXT'], 0, 273) ?>
            </p>
            <ul class="hm-cat--ul__CARD_PARAMS">
                <li class="hm-cat--li__CARD_PARAM">
                    Надо доделать
                </li>
                <li class="hm-cat--li__CARD_PARAM">
                    Надо доделать
                </li>
                <li class="hm-cat--li__CARD_PARAM">
                    Надо доделать
                </li>
            </ul>
            <div class="hm-cat--div__CARD_PRICE">
                <p class="hm-cat--p__CARD_PRICE_CUR">
                                <span class="hm-cat--span__CARD_PRICE_CUR">

                                       <?= $item['PROPERTIES']['PRICE_NEW']['VALUE'] ?>
                                </span>
                    <span class="hm-cat--span__CARD_PRICE_CUR">
                                    ₽
                                </span>
                </p>
                <p class="hm-cat--p__CARD_PRICE_OLD">
                                <span class="hm-cat--span__CARD_PRICE_OLD">
                                    <?= $item['PROPERTIES']['PRICE_OLD']['VALUE'] ?>
                                </span>
                    <span class="hm-cat--span__CARD_PRICE_OLD">
                                    ₽
                                </span>
                </p>
                <button class="hm-cat--button__CARD_PRICE">
                    %
                </button>
            </div>
            <a class="hm-cat--a__CARD" href="<?= $item['DETAIL_PAGE_URL'] ?>">
                <span>ПОДРОБНЕЕ</span>
                <svg width="28" height="22" viewBox="0 0 28 22" fill="none"
                     xmlns="http://www.w3.org/2000/svg">
                    <path d="M0.166992 11H27.667M27.667 11L17.167 0.5M27.667 11L17.167 21.5"
                          stroke="#C82121" stroke-width="0.25"/>
                </svg>
            </a>
        </article>


    <?
    endforeach;
    ?>

    <script>
        const elements = document.querySelectorAll('.hm-cat--article__CARD.__C-SCRL');

        elements.forEach(function (v) {
            console.log(v)
            v.classList.remove("__C-SCRL");
            if (v.classList.contains("hm-cat--article__CARD")) {
                setTimeout(() => {
                    v.classList.add("__hm-cat--article__CARD");
                }, 700);
            }
        });
    </script>

<?php endif; ?>




