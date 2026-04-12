<?php

// Сохраняем данные для использования в component_epilog.php
$cp = $this->__component;
if (method_exists($cp, 'SetResultCacheKeys')) {
    $cp->SetResultCacheKeys(['PROPERTIES', 'DISPLAY_PROPERTIES']);
}


if (isset($arResult['PROPERTIES'])) {
    $cp->arResult['PROPERTIES'] = $arResult['PROPERTIES'];
}

if (isset($arResult['DISPLAY_PROPERTIES'])) {
    $cp->arResult['DISPLAY_PROPERTIES'] = $arResult['DISPLAY_PROPERTIES'];
}