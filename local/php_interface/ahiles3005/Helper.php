<?php


class Helper
{

    public static function getDataForTagPressCenter($values)
    {
        $result = [];

        if (CModule::IncludeModule("highloadblock")) {

            if (!empty($values)) {

                $hlBlock = \Bitrix\Highloadblock\HighloadBlockTable::getList([
                    'filter' => ['=ID' => 18]
                ])->fetch();

                if ($hlBlock) {
                    $entity = \Bitrix\Highloadblock\HighloadBlockTable::compileEntity($hlBlock);
                    $entityClass = $entity->getDataClass();
                    $datas = $entityClass::getList([
                        'select' => ['*'],
                        'order' => ['ID' => 'ASC'],
                        'limit' => null,
                        'filter' => ['UF_XML_ID' => $values]
                    ])->fetchAll();
                }

                $entityClass = $entity->getDataClass();

                foreach ($datas as $data) {
                    $result[$data['UF_XML_ID']] = $data;
                }

            }
        }
        return $result;
    }

}

