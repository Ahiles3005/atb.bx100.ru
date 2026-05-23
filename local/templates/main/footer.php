<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}
?>
    <!-- Кнопка UP -->
    <button class="c-common--button__UP">
        <?= \Site\Template::showSvg('/images/svg/arrow-up-red.svg') ?>
    </button>

    </main>
    <!-- FOOTER -->
    <footer class="c-footer">
        <div class="c-footer--div__CONT C-CONTAINER">
            <div class="c-footer--div__TOP">
                <div class="c-footer--div__LEFT">
                    <a class="c-footer--a__LOGO" href="/">
                        <img class="c-footer--img__LOGO"
                             src="/images/footer/c-footer_logo.svg" alt="Логотип">
                    </a>

                    <div class="c-footer--div__LEFT_BTNS">
                        <button class="c-footer--button__REQUEST _OPEN_FRM _FORM_COMMON">
                            ОТПРАВИТЬ ЗАПРОС
                        </button>
                        <button class="c-footer--button__SUBSCR _OPEN_FRM _FORM_SUBSCR">
                            ПОДПИСАТЬСЯ НА НОВОСТИ
                        </button>
                    </div>

                    <div class="c-footer--div__LEFT_CONTACTS">
                        <a class="c-footer--a__TEL" href="tel:+74994449047">
                            8 (499) 444-90-47
                        </a>
                        <a class="c-footer--a__MAIL" href="mailto:company@atbelectronica.ru">
                            company@atbelectronica.ru
                        </a>
                    </div>
                </div>


                <div class="c-footer--div__0">
                    <?php
                    $APPLICATION->IncludeComponent(
                            'bitrix:menu',
                            'footer',
                            [
                                    'ROOT_MENU_TYPE' => 'footer',
                                    'CHILD_MENU_TYPE' => 'child',
                                    'MAX_LEVEL' => '4',
                                    'USE_EXT' => 'Y',
                                    'DELAY' => 'N',
                                    'ALLOW_MULTI_SELECT' => 'N',
                                    'MENU_CACHE_TYPE' => 'N',
                                    'MENU_CACHE_TIME' => '3600',
                                    'MENU_CACHE_USE_GROUPS' => 'Y',
                            ],
                            false
                    );
                    ?>
                </div>

            </div>


            <div class="c-footer--div__BOTTOM">
                <div class="c-footer--div__BOTTOM1">
                    <div class="c-footer--div__SOCIAL">
                        <a class="c-footer--a__SOCIAL" href="#">
                            <?= \Site\Template::showSvg('/images/svg/social-1.svg') ?>
                        </a>
                        <a class="c-footer--a__SOCIAL" href="#">
                            <?= \Site\Template::showSvg('/images/svg/social-2.svg') ?>
                        </a>
                        <a class="c-footer--a__SOCIAL" href="#">
                            <?= \Site\Template::showSvg('/images/svg/social-3.svg') ?>
                        </a>
                        <a class="c-footer--a__SOCIAL" href="#">
                            <?= \Site\Template::showSvg('/images/svg/social-5.svg') ?>
                        </a>
                        <a class="c-footer--a__SOCIAL" href="#">
                            <?= \Site\Template::showSvg('/images/svg/social-4.svg') ?>
                        </a>
                    </div>

                    <div class="c-footer--div__ADDRESS">
                    <span class="c-footer--span__ADDRESS">
                        Офис и R&D Центр
                    </span>
                        <span class="c-footer--span__ADDRESS">
                        127273, Москва, ул. Отрадная, д. 2Б, стр. 6, 7 этаж. Технопарк «Отрадное»
                    </span>
                    </div>
                </div>
                <div class="c-footer--div__LINE"></div>
                <div class="c-footer--div__BOTTOM2">
                    <a class="c-footer--a__RIGHTS" href="#">
                        Правовая информация
                    </a>
                    <span class="c-footer--span__BOTTOM2">
                    © 2025, ООО «АТБ ЭЛЕКТРОНИКА»
                </span>
                    <div class="c-footer--div__EMPTY"></div>
                </div>
            </div>
        </div>
    </footer>

    </body>

    </html>

<?php


use Bitrix\Main\Page\Asset;


$mainId = $APPLICATION->GetProperty('mainid', 'other');

Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/libs/swiper/swiper-bundle.min.css');
Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/assets/common/css/common.css');
Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/assets/pages/styles/css/st-common.css');
Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/assets/common/css/form.css');
Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/assets/common/css/gallery.css');
Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/assets/header/css/header.css');
Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/assets/footer/css/footer.css');
Asset::getInstance()->addCss('https://cdn.jsdelivr.net/npm/intl-tel-input@25.12.4/build/css/intlTelInput.css');


switch ($mainId) {
    case 'home':
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/assets/pages/home/css/home1-hero.css');
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/assets/pages/home/css/home2-cat.css');
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/assets/pages/home/css/home3-ind.css');
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/assets/pages/home/css/home4-des.css');
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/assets/pages/home/css/home5-hst.css');
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/assets/pages/home/css/home6-pre.css');
        break;

    case 'catalog':
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/assets/pages/home/css/home2-cat.css');
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/assets/pages/catalog/css/catalog1-cat.css');
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/assets/pages/catalog/css/catalog2-wrt.css');
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/assets/pages/catalog/css/catalog3-abt.css');
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/assets/pages/card-n/css/card-n4-reg.css');
        break;

    case 'catalog-n':
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/assets/pages/home/css/home2-cat.css');
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/assets/pages/catalog/css/catalog1-cat.css');
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/assets/pages/catalog/css/catalog2-wrt.css');
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/assets/pages/catalog/css/catalog3-abt.css');
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/assets/pages/catalog-n/css/catalog-n1-cat.css');
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/assets/pages/card-n/css/card-n4-reg.css');
        break;


    case 'card':
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/assets/pages/home/css/home2-cat.css');
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/assets/pages/home/css/home3-ind.css');
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/assets/pages/home/css/home4-des.css');
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/assets/pages/home/css/home5-hst.css');
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/assets/pages/home/css/home6-pre.css');
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/assets/pages/card/css/card0-common.css');
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/assets/pages/card/css/card1-hero.css');
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/assets/pages/card/css/card2-adv.css');
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/assets/pages/card/css/card3-mod.css');
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/assets/pages/card/css/card4-abt.css');
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/assets/pages/card/css/card5-cnf.css');
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/assets/pages/card/css/card6-rec.css');
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/assets/pages/card/css/card7-use.css');
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/assets/pages/card/css/card8-mat.css');
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/assets/pages/card/css/card9-reg.css');
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/assets/pages/card/css/card10-med.css');
        break;

    case 'card-n':
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/assets/pages/home/css/home2-cat.css');
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/assets/pages/home/css/home3-ind.css');
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/assets/pages/home/css/home4-des.css');
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/assets/pages/home/css/home5-hst.css');
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/assets/pages/home/css/home6-pre.css');
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/assets/pages/card-n/css/card-n1-hero.css');
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/assets/pages/card-n/css/card-n1-mod.css');
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/assets/pages/card-n/css/card-n2-abt.css');
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/assets/pages/card-n/css/card-n3-mat.css');
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/assets/pages/card-n/css/card-n4-reg.css');
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/assets/pages/card-n/css/card-n5-med.css');
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/assets/pages/card-n/css/card-n5-rec.css');
        break;

    case 'ind':
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/assets/pages/home/css/home2-cat.css');
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/assets/pages/home/css/home3-ind.css');
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/assets/pages/card/css/card7-use.css');
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/assets/pages/card-n/css/card-n4-reg.css');
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/assets/pages/card-n/css/card-n5-rec.css');
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/assets/pages/ind/css/in1-hero.css');
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/assets/pages/ind/css/in2-adv.css');
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/assets/pages/ind/css/in3-tsk.css');
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/assets/pages/ind/css/in4-des.css');
        break;

    case 'des':
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/assets/pages/home/css/home2-cat.css');
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/assets/pages/home/css/home3-ind.css');
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/assets/pages/home/css/home4-des.css');
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/assets/pages/card/css/card7-use.css');
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/assets/pages/card-n/css/card-n4-reg.css');
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/assets/pages/card-n/css/card-n5-rec.css');
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/assets/pages/ind/css/in1-hero.css');
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/assets/pages/ind/css/in2-adv.css');
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/assets/pages/ind/css/in3-tsk.css');
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/assets/pages/ind/css/in4-des.css');
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/assets/pages/des/css/des5-prod.css');
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/assets/pages/des/css/des6-dss.css');
        break;

    case 'dih':
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/assets/pages/home/css/home2-cat.css');
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/assets/pages/home/css/home3-ind.css');
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/assets/pages/home/css/home4-des.css');
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/assets/pages/home/css/home5-hst.css');
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/assets/pages/catalog/css/catalog3-abt.css');
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/assets/pages/card/css/card7-use.css');
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/assets/pages/card-n/css/card-n4-reg.css');
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/assets/pages/card-n/css/card-n5-rec.css');
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/assets/pages/ind/css/in2-adv.css');
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/assets/pages/ind/css/in3-tsk.css');
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/assets/pages/ind/css/in4-des.css');
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/assets/pages/dih/css/dih1-hero.css');
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/assets/pages/dih/css/dih2-des.css');
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/assets/pages/dih/css/dih3-ind.css');
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/assets/pages/dih/css/dih4-hst.css');
        break;

    case 'hst':
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/assets/pages/home/css/home2-cat.css');
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/assets/pages/home/css/home3-ind.css');
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/assets/pages/home/css/home4-des.css');
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/assets/pages/card/css/card7-use.css');
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/assets/pages/card-n/css/card-n4-reg.css');
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/assets/pages/card-n/css/card-n5-rec.css');
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/assets/pages/ind/css/in3-tsk.css');
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/assets/pages/ind/css/in2-adv.css');
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/assets/pages/ind/css/in3-tsk.css');
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/assets/pages/ind/css/in4-des.css');
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/assets/pages/hst/css/hs1-hero.css');
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/assets/pages/hst/css/hs2-org.css');
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/assets/pages/hst/css/hs3-sit.css');
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/assets/pages/hst/css/hs4-tsk.css');
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/assets/pages/hst/css/hs5-des.css');
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/assets/pages/hst/css/hs6-res.css');
        break;

    case 'ne':
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/assets/components/share/comp-share.css');
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/assets/pages/home/css/home2-cat.css');
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/assets/pages/home/css/home3-ind.css');
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/assets/pages/home/css/home4-des.css');
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/assets/pages/card/css/card7-use.css');
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/assets/pages/card-n/css/card-n4-reg.css');
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/assets/pages/card-n/css/card-n5-rec.css');
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/assets/pages/ind/css/in4-des.css');
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/assets/pages/mc/css/mc6-pk.css');
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/assets/pages/ane/css/ane0-common.css');
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/assets/pages/ane/css/ane1-hero.css');
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/assets/pages/ane/css/ane2-main.css');
        break;

    case 'ar':
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/assets/components/share/comp-share.css');
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/assets/pages/home/css/home2-cat.css');
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/assets/pages/home/css/home3-ind.css');
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/assets/pages/home/css/home4-des.css');
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/assets/pages/card/css/card7-use.css');
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/assets/pages/card-n/css/card-n4-reg.css');
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/assets/pages/card-n/css/card-n5-rec.css');
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/assets/pages/ind/css/in4-des.css');
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/assets/pages/mc/css/mc6-pk.css');
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/assets/pages/ane/css/ane0-common.css');
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/assets/pages/ane/css/ane1-hero.css');
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/assets/pages/ane/css/ane2-main.css');
        break;

    case 'ev':
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/assets/components/share/comp-share.css');
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/assets/pages/home/css/home2-cat.css');
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/assets/pages/home/css/home3-ind.css');
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/assets/pages/home/css/home4-des.css');
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/assets/pages/card/css/card7-use.css');
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/assets/pages/card-n/css/card-n4-reg.css');
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/assets/pages/card-n/css/card-n5-rec.css');
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/assets/pages/ind/css/in4-des.css');
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/assets/pages/mc/css/mc6-pk.css');
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/assets/pages/ane/css/ane0-common.css');
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/assets/pages/ane/css/ane1-hero.css');
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/assets/pages/ane/css/ane2-main.css');
        break;

    case 'mc':
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/assets/pages/home/css/home6-pre.css');
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/assets/pages/mc/css/mc0-common.css');
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/assets/pages/mc/css/mc1-hero.css');
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/assets/pages/mc/css/mc6-pk.css');
        break;

    case 'hr':
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/assets/pages/mc/css/mc6-pk.css');
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/assets/pages/ane/css/ane2-main.css');
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/assets/pages/hr/css/hr1-hero.css');
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/assets/pages/hr/css/hr2-vals.css');
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/assets/pages/hr/css/hr3-polt.css');
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/assets/pages/hr/css/hr4-word.css');
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/assets/pages/hr/css/hr5-adv.css');
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/assets/pages/hr/css/hr6-hst.css');
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/assets/pages/hr/css/hr7-faq.css');
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/assets/pages/hr/css/hr8-blog.css');
        break;

    case 'hrv1':
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/assets/components/share/comp-share.css');
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/assets/pages/hrv1/css/hrv11-hero.css');
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/assets/pages/hrv1/css/hrv12-main.css');
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/assets/pages/hrv1/css/hrv12-main.css');
        break;

    case 'hrx':
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/assets/pages/hrv1/css/hrv11-hero.css');
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/assets/pages/hrx/css/hrx1-hero.css');
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/assets/pages/hrx/css/hrx2-vac.css');
        break;

    case 'conts':
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/assets/pages/contacts/css/conts1-main.css');
        break;

    case 'ab':
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/assets/pages/styles/css/st-common.css');
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/assets/pages/mc/css/mc6-pk.css');
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/assets/pages/about/css/ab1-hero.css');
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/assets/pages/about/css/ab2-quote.css');
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/assets/pages/about/css/ab3-adv.css');
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/assets/pages/about/css/ab4-med.css');
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/assets/pages/about/css/ab5-hst.css');
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/assets/pages/about/css/ab6-exp.css');
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/assets/pages/about/css/ab7-par.css');
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/assets/pages/about/css/ab8-cert.css');
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/assets/pages/about/css/ab9-reg.css');
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/assets/pages/about/css/ab10-doc.css');
        break;

    case 'te':
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/assets/pages/mc/css/mc6-pk.css');
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/assets/pages/tech/css/tech0-common.css');
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/assets/pages/tech/css/tech1-dev.css');
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/assets/pages/tech/css/tech2-prod.css');
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/assets/pages/tech/css/tech3-qm.css');
        break;

    case 'sup':
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/assets/pages/styles/css/st-common.css');
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/assets/pages/mc/css/mc6-pk.css');
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/assets/pages/card-n/css/card-n4-reg.css');
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/assets/pages/support/css/sup0-common.css');
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/assets/pages/support/css/sup1-sup.css');
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/assets/pages/support/css/sup2-org.css');
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/assets/pages/support/css/sup3-adp.css');
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/assets/pages/support/css/sup4-srv.css');
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/assets/pages/support/css/sup5-cent.css');
        break;

    case 'srv1':
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/assets/components/tabs/comp-tabs.css');
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/assets/pages/styles/css/st-common.css');
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/assets/pages/mc/css/mc6-pk.css');
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/assets/pages/card-n/css/card-n4-reg.css');
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/assets/pages/services1/css/srv11-hero.css');
        break;

    case 'srv2':
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/assets/components/tabs/comp-tabs.css');
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/assets/pages/styles/css/st-common.css');
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/assets/pages/card-n/css/card-n4-reg.css');
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/assets/pages/services2/css/srv21-hero.css');
        break;

    case 'srv3':
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/assets/components/tabs/comp-tabs.css');
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/assets/pages/styles/css/st-common.css');
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/assets/pages/mc/css/mc6-pk.css');
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/assets/pages/card-n/css/card-n4-reg.css');
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/assets/pages/services3/css/srv31-hero.css');
        break;

    case 'srv4':
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/assets/components/tabs/comp-tabs.css');
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/assets/pages/styles/css/st-common.css');
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/assets/pages/mc/css/mc6-pk.css');
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/assets/pages/card-n/css/card-n4-reg.css');
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/assets/pages/services4/css/srv41-hero.css');
        break;

}


Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/script.js');
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/libs/swiper/swiper-bundle.min.js');
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/assets/common/js/common.js');
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/assets/pages/styles/js/st1-common.js');
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/assets/common/js/form.js');
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/assets/header/js/header.js');
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/assets/footer/js/footer.js');
Asset::getInstance()->addJs('https://cdn.jsdelivr.net/npm/intl-tel-input@25.12.4/build/js/intlTelInput.min.js');

switch ($mainId) {
    case 'home':
        Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/assets/pages/home/js/home0-common.js');
        Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/assets/pages/home/js/home1-hero.js');
        Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/assets/pages/home/js/home2-cat.js');
        Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/assets/pages/home/js/home3-ind.js');
        Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/assets/pages/home/js/home4-des.js');
        Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/assets/pages/home/js/home5-hst.js');
        Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/assets/pages/home/js/home6-pre.js');
        break;

    case 'catalog':
        Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/assets/pages/catalog/js/catalog0-common.js');
        Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/assets/pages/catalog/js/catalog1-cat.js');
        break;

    case 'catalog-n':
        Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/assets/pages/catalog-n/js/catalog-n0-common.js');
        Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/assets/pages/catalog-n/js/catalog-n1-cat.js');
        break;

    case 'card':
        Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/assets/pages/card/js/card0-common.js');
        Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/assets/pages/card/js/card1-hero.js');
        Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/assets/pages/card/js/card2-adv.js');
        Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/assets/pages/card/js/card3-mod.js');
        Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/assets/pages/card/js/card4-abt.js');
        Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/assets/pages/card/js/card5-cnf.js');
        Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/assets/pages/card/js/card6-rec.js');
        Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/assets/pages/card/js/card7-use.js');
        Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/assets/pages/card/js/card8-mat.js');
        Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/assets/pages/card/js/card10-med.js');
        Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/libs/dragscroll/dragscroll.js');
        break;

    case 'card-n':
        Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/assets/pages/card-n/js/card-n0-common.js');
        Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/assets/pages/card-n/js/card-n1-hero.js');
        Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/assets/pages/card-n/js/card-n3-mod.js');
        Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/assets/pages/card-n/js/card-n4-abt.js');
        Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/assets/pages/card-n/js/card-n6-rec.js');
        Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/assets/pages/card-n/js/card-n8-mat.js');
        Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/libs/dragscroll/dragscroll.js');
        break;

    case 'ind':
        Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/assets/pages/ind/js/in0-common.js');
        Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/assets/pages/ind/js/in3-tsk.js');
        Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/assets/pages/ind/js/in4-des.js');
        break;

    case 'des':
        Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/assets/pages/des/js/des0-common.js');
        Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/assets/pages/des/js/des2-adv.js');
        Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/assets/pages/des/js/des3-tsk.js');
        Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/assets/pages/des/js/des4-des.js');
        break;

    case 'dih':
        Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/assets/pages/dih/js/dih0-common.js');
        Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/assets/pages/dih/js/dih2-des.js');
        Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/assets/pages/dih/js/dih3-ind.js');
        Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/assets/pages/dih/js/dih4-hst.js');
        break;

    case 'hst':
        Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/assets/pages/hst/js/hs0-common.js');
        Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/assets/pages/hst/js/hs1-hero.js');
        Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/assets/pages/hst/js/hs5-des.js');
        break;


    case 'ne':
        Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/assets/components/share/comp-share.js');
        Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/assets/pages/styles/js/st1-common.js');
        Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/assets/pages/ane/js/ane0-common.js');
        Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/assets/pages/ane/js/ane1-hero.js');
        Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/assets/libs/dragscroll/dragscroll.js');
        break;

    case 'ar':
        Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/assets/components/share/comp-share.js');
        Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/assets/pages/styles/js/st1-common.js');
        Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/assets/pages/ane/js/ane0-common.js');
        Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/assets/pages/ane/js/ane1-hero.js');
        Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/assets/libs/dragscroll/dragscroll.js');
        break;

    case 'ev':
        Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/assets/components/share/comp-share.js');
        Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/assets/pages/styles/js/st1-common.js');
        Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/assets/pages/ane/js/ane0-common.js');
        Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/assets/pages/ane/js/ane1-hero.js');
        Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/assets/libs/dragscroll/dragscroll.js');
        break;

    case 'mc':
        Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/assets/pages/mc/js/mc0-common.js');
        Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/assets/pages/mc/js/mc1-hero.js');
        Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/assets/pages/mc/js/mc6-pk.js');
        Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/libs/dragscroll/dragscroll.js');
        break;

    case 'hr':
        Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/assets/pages/hr/js/hr0-common.js');
        Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/assets/pages/hr/js/hr1-hero.js');
        Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/assets/pages/hr/js/hr3-polt.js');
        Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/assets/pages/hr/js/hr4-word.js');
        Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/assets/pages/hr/js/hr5-adv.js');
        Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/assets/pages/hr/js/hr6-hst.js');
        Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/assets/pages/hr/js/hr7-faq.js');
        Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/assets/pages/hr/js/hr8-blog.js');
        Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/libs/dragscroll/dragscroll.js');
        break;

    case 'hr':
        Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/assets/pages/hr/js/hr0-common.js');
        Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/assets/pages/hr/js/hr1-hero.js');
        Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/assets/pages/hr/js/hr3-polt.js');
        Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/assets/pages/hr/js/hr4-word.js');
        Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/assets/pages/hr/js/hr5-adv.js');
        Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/assets/pages/hr/js/hr6-hst.js');
        Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/assets/pages/hr/js/hr7-faq.js');
        Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/assets/pages/hr/js/hr8-blog.js');
        Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/libs/dragscroll/dragscroll.js');
        break;

    case 'hrv1':
        Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/assets/components/share/comp-share.js');
        Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/assets/pages/hrv1/js/hrv10-common.js');
        Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/assets/pages/hrv1/js/hrv11-hero.js');
        Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/assets/pages/hrv1/js/hrv12-main.js');
        Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/libs/dragscroll/dragscroll.js');
        break;

    case 'hrx':
        Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/assets/pages/hrx/js/hrx0-common.js');
        Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/assets/pages/hrx/js/hrx1-hero.js');
        Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/assets/pages/hrx/js/hrx2-vac.js');
        Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/libs/dragscroll/dragscroll.js');
        break;

    case 'conts':
        Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/assets/pages/contacts/js/conts0-common.js');
        Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/assets/pages/contacts/js/conts1-main.js');
        break;

    case 'ab':
        Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/assets/pages/styles/js/st1-common.js');
        Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/assets/pages/about/js/ab0-common.js');
        Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/assets/pages/about/js/ab1-hero.js');
        Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/assets/pages/about/js/ab4-med.js');
        Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/assets/pages/about/js/ab5-hst.js');
        Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/assets/pages/about/js/ab7-par.js');
        Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/assets/pages/about/js/ab8-cert.js');
        Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/assets/pages/about/js/ab10-doc.js');
        Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/libs/dragscroll/dragscroll.js');
        break;

    case 'te':
        Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/assets/pages/styles/js/st1-common.js');
        Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/assets/pages/tech/js/tech0-common.js');
        Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/assets/pages/tech/js/tech1-dev.js');
        Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/assets/pages/tech/js/tech1-dev.js');
        Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/libs/dragscroll/dragscroll.js');
        break;

    case 'sup':
        Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/assets/pages/styles/js/st1-common.js');
        Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/assets/pages/support/js/sup0-common.js');
        Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/assets/pages/support/js/sup1-sup.js');
        Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/assets/pages/support/js/sup2-org.js');
        Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/assets/pages/support/js/sup4-srv.js');
        Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/libs/dragscroll/dragscroll.js');
        break;

    case 'srv1':
        Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/assets/pages/styles/js/st1-common.js');
        Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/assets/components/tabs/comp-tabs.js');
        Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/assets/pages/services1/js/srv10-common.js');
        Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/assets/pages/services1/js/srv11-hero.js');
        Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/libs/dragscroll/dragscroll.js');
        break;

    case 'srv2':
        Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/assets/pages/styles/js/st1-common.js');
        Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/assets/components/tabs/comp-tabs.js');
        Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/assets/pages/services2/js/srv20-common.js');
        Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/assets/pages/services2/js/srv21-hero.js');
        Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/libs/dragscroll/dragscroll.js');
        break;

    case 'srv3':
        Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/assets/pages/styles/js/st1-common.js');
        Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/assets/components/tabs/comp-tabs.js');
        Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/assets/pages/services3/js/srv30-common.js');
        Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/libs/dragscroll/dragscroll.js');
        break;

    case 'srv4':
        Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/assets/pages/styles/js/st1-common.js');
        Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/assets/components/tabs/comp-tabs.js');
        Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/assets/pages/services4/js/srv40-common.js');
        Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/assets/pages/services4/js/srv41-hero.js');
        Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/libs/dragscroll/dragscroll.js');
        break;
}
?>

<?php
$_SESSION['form_submit_key'] = true;
