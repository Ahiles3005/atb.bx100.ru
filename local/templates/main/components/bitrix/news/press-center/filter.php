<?

use Bitrix\Main\Loader;
use Bitrix\Main\Data\Cache;



if (Loader::includeModule("iblock")) {
    $iblockId = 5;
    $cacheTime = 3600;
    $cacheId = "filter_values_ib_" . $iblockId."_".$arResult['VARIABLES']['SECTION_ID'];
    $cachePath = "/iblock_filters/ib_" . $iblockId."_".$arResult['VARIABLES']['SECTION_ID'];

    $cache = Cache::createInstance();

    if ($cache->initCache($cacheTime, $cacheId, $cachePath)) {
        $filterValues = $cache->getVars();
    } elseif ($cache->startDataCache()) {
        $properties = ['GODA_FILTER', 'ITRASLI_FILTER', 'RESHENIA_FILTER', 'TEMA_FILTER'];
        $filterValues = [
                'GODA_FILTER' => [],
                'ITRASLI_FILTER' => [],
                'RESHENIA_FILTER' => [],
                'TEMA_FILTER' => [],
        ];
        $arFilter = [
                "IBLOCK_ID" => $iblockId,
                "ACTIVE" => "Y",
                "SECTION_ID" => $arResult['VARIABLES']['SECTION_ID'],
                array(
                        "LOGIC" => "OR",
                        array("!PROPERTY_GODA_FILTER" => false),
                        array("!PROPERTY_ITRASLI_FILTER" => false),
                        array("!PROPERTY_RESHENIA_FILTER" => false),
                        array("!PROPERTY_TEMA_FILTER" => false),
                )
        ];

        $arSelect = ["ID", "IBLOCK_ID"];
        foreach ($properties as $propCode) {
            $arSelect[] = "PROPERTY_" . $propCode;
        }

        $res = CIBlockElement::GetList([], $arFilter, false, false, $arSelect);

        while ($ob = $res->GetNextElement()) {
            $arFields = $ob->GetFields();

            foreach ($properties as $propCode) {
                $value = $arFields["PROPERTY_" . $propCode . "_VALUE"];

                if (!empty($value)) {
                    if (is_array($value)) {
                        foreach ($value as $val) {
                            $trimmed = trim($val);
                            if ($trimmed !== '') {
                                $filterValues[$propCode][$trimmed] = $trimmed;
                            }
                        }
                    } else {
                        $trimmed = trim($value);
                        if ($trimmed !== '') {
                            $filterValues[$propCode][$trimmed] = $trimmed;
                        }
                    }
                }
            }
        }

        // Сбрасываем ключи и сортируем значения для красоты
        foreach ($filterValues as $code => $values) {
            natcasesort($values); // Сортировка по алфавиту/числам без учета регистра
            $filterValues[$code] = array_values($values);
        }

        // Если что-то пошло не так и массив пустой — отменяем кэш
        if (empty(array_filter($filterValues))) {
            $cache->abortDataCache();
        } else {
            // Сохраняем результат в кэш
            $cache->endDataCache($filterValues);
        }
    }

    // Вывод итогового массива (уже из кэша или только что созданного)
//    echo "<pre>";
//    print_r($filterValues);
//    echo "</pre>";
}


$arParams['FILTER_NAME'] = 'filter_press_center';

$year = $_GET['mc-news-years'] ?? 'all';
$ind = $_GET['mc-news-ind'] ?? 'all';
$des = $_GET['mc-news-des'] ?? 'all';
$topic = $_GET['mc-news-topic'] ?? 'all';


if ($year !== 'all') {
    $GLOBALS[$arParams['FILTER_NAME']]['PROPERTY_GODA_FILTER'] = $year;
}
if ($ind !== 'all') {
    $GLOBALS[$arParams['FILTER_NAME']]['PROPERTY_ITRASLI_FILTER'] = $ind;
}
if ($des !== 'all') {
    $GLOBALS[$arParams['FILTER_NAME']]['PROPERTY_RESHENIA_FILTER'] = $des;
}
if ($topic !== 'all') {
    $GLOBALS[$arParams['FILTER_NAME']]['PROPERTY_TEMA_FILTER'] = $topic;
}



?>


<form class="mc-common--form__SELECT _NEWS" action="" method="get" name="mc-news">
    <fieldset class="mc-common--fieldset__SELECT _NEWS _YEAR __C-SCRL DOWN">
        <button class="mc-common--button__SELECT" type="button">
                                    <span class="mc-common--span__SELECT">
                                        <?
                                        if ($year !== 'all') {
                                            echo $year;
                                        } else {
                                            echo 'Год';
                                        }
                                        ?>
                                    </span>
            <svg class="mc-common--svg__SELECT" width="19" height="9" viewBox="0 0 19 9" fill="none"
                 xmlns="http://www.w3.org/2000/svg">
                <path d="M0.125 0.125L9.125 8.59559L18.125 0.125" stroke="#0C0C0C" stroke-width="0.25"
                      stroke-linecap="round"/>
            </svg>
        </button>

        <div class="mc-common--div__SELECT">
            <label class="mc-common--label__SELECT _NEWS _YEAR">
                За все время
                <input class="mc-common--input__SELECT _NEWS _YEAR" type="radio" name="mc-news-years"
                       value="all">
            </label>

            <? foreach ($filterValues['GODA_FILTER'] as $value) : ?>
                <label class="mc-common--label__SELECT _NEWS _YEAR">
                    <?= $value ?>
                    <input class="mc-common--input__SELECT _NEWS _YEAR" type="radio" name="mc-news-years"
                           value="<?= $value ?>" <?= $value == $year ? 'checked' : '' ?>>
                </label>
            <? endforeach; ?>

        </div>
    </fieldset>


    <fieldset class="mc-common--fieldset__SELECT _NEWS _IND __C-SCRL DOWN">
        <button class="mc-common--button__SELECT" type="button">
                                    <span class="mc-common--span__SELECT">
                                          <?
                                          if ($ind !== 'all') {
                                              echo $ind;
                                          } else {
                                              echo 'Отрасли';
                                          }
                                          ?>
                                    </span>
            <svg class="mc-common--svg__SELECT" width="19" height="9" viewBox="0 0 19 9" fill="none"
                 xmlns="http://www.w3.org/2000/svg">
                <path d="M0.125 0.125L9.125 8.59559L18.125 0.125" stroke="#0C0C0C" stroke-width="0.25"
                      stroke-linecap="round"/>
            </svg>
        </button>

        <div class="mc-common--div__SELECT">
            <label class="mc-common--label__SELECT _NEWS _IND">
                Все
                <input class="mc-common--input__SELECT _NEWS _IND" type="radio" name="mc-news-ind"
                       value="all">
            </label>
            <? foreach ($filterValues['ITRASLI_FILTER'] as $value) : ?>
                <label class="mc-common--label__SELECT _NEWS _IND">
                    <?= $value ?>
                    <input class="mc-common--input__SELECT _NEWS _IND" type="radio" name="mc-news-ind"
                           value="<?= $value ?>" <?= $value == $ind ? 'checked' : '' ?>>
                </label>
            <? endforeach; ?>
        </div>
    </fieldset>


    <fieldset class="mc-common--fieldset__SELECT _NEWS _DES __C-SCRL DOWN">
        <button class="mc-common--button__SELECT" type="button">
                                    <span class="mc-common--span__SELECT">
                                         <?
                                         if ($des !== 'all') {
                                             echo $des;
                                         } else {
                                             echo 'Решения';
                                         }
                                         ?>
                                    </span>
            <svg class="mc-common--svg__SELECT" width="19" height="9" viewBox="0 0 19 9" fill="none"
                 xmlns="http://www.w3.org/2000/svg">
                <path d="M0.125 0.125L9.125 8.59559L18.125 0.125" stroke="#0C0C0C" stroke-width="0.25"
                      stroke-linecap="round"/>
            </svg>
        </button>

        <div class="mc-common--div__SELECT">
            <label class="mc-common--label__SELECT _NEWS _DES">
                Все
                <input class="mc-common--input__SELECT _NEWS _DES" type="radio" name="mc-news-des" value="all">
            </label>
            <? foreach ($filterValues['RESHENIA_FILTER'] as $value) : ?>
                <label class="mc-common--label__SELECT _NEWS _DES">
                    <?= $value ?>
                    <input class="mc-common--input__SELECT _NEWS _DES" type="radio" name="mc-news-des"
                           value="<?= $value ?>" <?= $value == $des ? 'checked' : '' ?>>
                </label>
            <? endforeach; ?>


        </div>
    </fieldset>


    <fieldset class="mc-common--fieldset__SELECT _NEWS _TOPIC __C-SCRL DOWN">
        <button class="mc-common--button__SELECT" type="button">
                                    <span class="mc-common--span__SELECT">
                                          <?
                                          if ($topic !== 'all') {
                                              echo $topic;
                                          } else {
                                              echo 'Тема';
                                          }
                                          ?>
                                    </span>
            <svg class="mc-common--svg__SELECT" width="19" height="9" viewBox="0 0 19 9" fill="none"
                 xmlns="http://www.w3.org/2000/svg">
                <path d="M0.125 0.125L9.125 8.59559L18.125 0.125" stroke="#0C0C0C" stroke-width="0.25"
                      stroke-linecap="round"/>
            </svg>
        </button>

        <div class="mc-common--div__SELECT">
            <label class="mc-common--label__SELECT _NEWS _TOPIC">
                Все
                <input class="mc-common--input__SELECT _NEWS _TOPIC" type="radio" name="mc-news-topic"
                       value="all">
            </label>
            <? foreach ($filterValues['TEMA_FILTER'] as $value) : ?>
                <label class="mc-common--label__SELECT _NEWS _TOPIC">
                    <?= $value ?>
                    <input class="mc-common--input__SELECT _NEWS _TOPIC" type="radio" name="mc-news-topic"
                           value="<?= $value ?>" <?= $value == $topic ? 'checked' : '' ?>>
                </label>
            <? endforeach; ?>
        </div>
    </fieldset>
</form>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const filterForm = document.forms['mc-news'];

        if (filterForm) {
            filterForm.addEventListener('change', (event) => {

                if (event.target && event.target.type === 'radio') {

                    filterForm.submit();
                }
            });
        }
    });

</script>