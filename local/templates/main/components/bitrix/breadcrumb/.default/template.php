<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

/**
 * @global CMain $APPLICATION
 */

global $APPLICATION;

//delayed function must return a string
if (empty($arResult))
    return "";

$strReturn = '';

$strReturn .= '<ul class="c-common--ul__BC">';
$strReturn .= '    <li class="c-common--li__BC">
        <a class="c-common--a__BC" href="/">
            ГЛАВНАЯ СТРАНИЦА
        </a>
        <svg width="9" height="16" viewBox="0 0 9 16" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M1 15.5L8.05882 8L1 0.5" stroke="#BFBFBF" stroke-width="0.5"/>
        </svg>
    </li>';


$itemSize = count($arResult);
for ($index = 0; $index < $itemSize; $index++) {
    $title = htmlspecialcharsex($arResult[$index]["TITLE"]);
    $jsonSeparator = ($index > 0 ? ',' : '');

    if ($arResult[$index]["LINK"] <> "") {
        $link = $index + 1 < $itemSize ? $arResult[$index]["LINK"] : '#';

        $strReturn .= '<li class="c-common--li__BC" id="bx_breadcrumb_' . $index . '">
        <a class="c-common--a__BC" href="' . $link . '" title="' . $title . '" >
            ' . $title . '
        </a>
        <svg width="9" height="16" viewBox="0 0 9 16" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M1 15.5L8.05882 8L1 0.5" stroke="#BFBFBF" stroke-width="0.5"/>
        </svg>
    </li>';
        $jsonLDBreadcrumbList .= $jsonSeparator . '{
				"@type": "ListItem",
				"position": ' . $index . ',
				"name": "' . $title . '",
				"item": "' . $arResult[$index]["LINK"] . '"
		  	}';
    }
}
$jsonLDBreadcrumb = '
<script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "BreadcrumbList",
      "itemListElement": [' . $jsonLDBreadcrumbList . ']
    }
</script>
';
$strReturn .= '</ul>' . $jsonLDBreadcrumb;


return $strReturn;


?>





