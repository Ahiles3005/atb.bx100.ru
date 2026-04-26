<!-- ---------- ********** СЕКЦИЯ HERO ********** ---------- -->


<section class="hr-hero" id="hr-hero">
    <div class="hr-hero--div__CONT C-CONTAINER">
        <? $APPLICATION->IncludeComponent(
            "bitrix:breadcrumb",
            ".default",
            [
                "PATH" => "",
                "SITE_ID" => "s1",
                "START_FROM" => "0"
            ]
        ); ?>



        <h1 class="hr-hero--h1 __C-SCRL RIGHT">
            <? $APPLICATION->ShowTitle(false); ?>
        </h1>



        <div class="hr-hero--div__IMAGES">
            <div class="hr-hero--div__IMAGES1">
                <div class="hr-hero--div__IMAGE_CONT _6 __C-SCRL2 LEFT">
                    <p class="hr-hero--p__IMAGE_CONT">
                        Инициатива <br />
                        и настойчивость
                    </p>
                    <img class="hr-hero--img__IMAGE" src="/images/hr/hr-hero_6.jpg" alt="" loading="lazy">
                </div>

                <div class="hr-hero--div__IMAGE_CONT _9 __C-SCRL2 LEFT">
                    <p class="hr-hero--p__IMAGE_CONT">
                        Коммуникации <br />
                        и сотрудничество
                    </p>
                    <img class="hr-hero--img__IMAGE __hr-hero--img__IMAGE" src="/images/hr/hr-hero_9.jpg" alt="" loading="lazy">
                </div>

                <div class="hr-hero--div__IMAGE_CONT _1 _CENTER __C-SCRL2 LEFT">
                    <p class="hr-hero--p__IMAGE_CONT">
                        Энергия <br />
                        и движение
                    </p>
                    <img class="hr-hero--img__IMAGE __hr-hero--img__IMAGE" src="/images/hr/hr-hero_1.jpg" alt="" loading="lazy">
                </div>

                <div class="hr-hero--div__IMAGE_CONT _11 __C-SCRL2 DOWN">
                    <p class="hr-hero--p__IMAGE_CONT">
                        Позитивный <br />
                        настрой
                    </p>
                    <img class="hr-hero--img__IMAGE" src="/images/hr/hr-hero_11.jpg" alt="" loading="lazy">
                </div>

                <div class="hr-hero--div__IMAGE_CONT _3 __C-SCRL2 DOWN">
                    <p class="hr-hero--p__IMAGE_CONT">
                        Гибкость <br />
                        мышления
                    </p>
                    <img class="hr-hero--img__IMAGE __hr-hero--img__IMAGE" src="/images/hr/hr-hero_3.jpg" alt="" loading="lazy">
                </div>
            </div>


            <div class="hr-hero--div__IMAGES1">
                <div class="hr-hero--div__IMAGE_CONT _4 __C-SCRL2 TOP">
                    <p class="hr-hero--p__IMAGE_CONT">
                        Ответственность <br />
                        и осознанность
                    </p>
                    <img class="hr-hero--img__IMAGE __hr-hero--img__IMAGE" src="/images/hr/hr-hero_4.jpg" alt="" loading="lazy">
                </div>

                <div class="hr-hero--div__IMAGE_CONT _8 __C-SCRL2 TOP">
                    <p class="hr-hero--p__IMAGE_CONT">
                        Творчество <br />
                        и инновации
                    </p>
                    <img class="hr-hero--img__IMAGE __hr-hero--img__IMAGE" src="/images/hr/hr-hero_8.jpg" alt="" loading="lazy">
                </div>

                <div class="hr-hero--div__IMAGE_CONT _2 _CENTER __C-SCRL2 RIGHT">
                    <p class="hr-hero--p__IMAGE_CONT">
                        Знания <br />
                        и развитие
                    </p>
                    <img class="hr-hero--img__IMAGE" src="/images/hr/hr-hero_2.jpg" alt="" loading="lazy">
                </div>

                <div class="hr-hero--div__IMAGE_CONT _5 __C-SCRL2 RIGHT">
                    <p class="hr-hero--p__IMAGE_CONT">
                        Лидерство <br />
                        и мотивация
                    </p>
                    <img class="hr-hero--img__IMAGE __hr-hero--img__IMAGE" src="/images/hr/hr-hero_5.jpg" alt="" loading="lazy">
                </div>

                <div class="hr-hero--div__IMAGE_CONT _7 __C-SCRL2 DOWN">
                    <p class="hr-hero--p__IMAGE_CONT">
                        Командная <br />
                        работа
                    </p>
                    <img class="hr-hero--img__IMAGE" src="/images/hr/hr-hero_7.jpg" alt="" loading="lazy">
                </div>

                <div class="hr-hero--div__IMAGE_CONT _10 __C-SCRL2 RIGHT">
                    <p class="hr-hero--p__IMAGE_CONT">
                        Экспертиза <br />
                        и компетенции
                    </p>
                    <img class="hr-hero--img__IMAGE" src="/images/hr/hr-hero_10.jpg" alt="" loading="lazy">
                </div>
            </div>
        </div>



        <div class="c-common--div__TABS __C-SCRL DOWN">
            <div class="c-common--div__TABS_TOP">
                <a class="c-common--a__TABS _ACT _MARK" href="#hr-hero">
                    команда
                </a>
                <a class="c-common--a__TABS" href="#hr-adv">
                    преимущества
                </a>
                <a class="c-common--a__TABS" href="#hr-hst">
                    истории роста
                </a>
                <a class="c-common--a__TABS" href="#hr-faq">
                    f.a.q.
                </a>
                <a class="c-common--a__TABS" href="#hr-blog">
                    hr-блог
                </a>
                <a class="c-common--a__TABS" href="/about/team/hr/">
                    вакансии
                </a>
                <div class="c-common--div__TABS_FRAME"></div>
            </div>
            <button class="c-common--button__TABS_LEFT">
                <svg width="54" height="20" viewBox="0 0 54 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M36 4.5L41 10L36 15.5" stroke="#005792" stroke-width="1.5" stroke-linecap="round"></path>
                </svg>
            </button>
            <button class="c-common--button__TABS_RIGHT">
                <svg width="54" height="20" viewBox="0 0 54 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M36 4.5L41 10L36 15.5" stroke="#005792" stroke-width="1.5" stroke-linecap="round"></path>
                </svg>
            </button>
        </div>
    </div>
</section>


