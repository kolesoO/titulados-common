<?
namespace kDevelop\Help;

use \Bitrix\Main\Loader;

class Tools
{
    /**
     * @throws \Bitrix\Main\LoaderException
     */
    public static function definders()
    {
        Loader::includeModule('iblock');

        $rsResult = \Bitrix\Iblock\IblockTable::getList([
            'select' => ['ID', 'IBLOCK_TYPE_ID', 'CODE']
        ]);
        while ($row = $rsResult->fetch()) {
            $CONSTANT = ToUpper(implode('_', ['IBLOCK', $row['IBLOCK_TYPE_ID'], $row['CODE']]));
            if (!defined($CONSTANT)) {
                define($CONSTANT, $row['ID']);
            }
        }
    }
}
