<?
use \Bitrix\Main;
use kDevelop\Help\Tools;

/**
 * @global $APPLICATION
 */

$rsManager = Main\EventManager::getInstance();

//Классы
Main\Loader::registerAutoLoadClasses(null, [
    "\kDevelop\Help\Tools" => "/local/php_interface/classes/help/tools.php",
]);
//end

Tools::definders();

//Обработчики событий
if (strpos($APPLICATION->GetCurDir(), "/bitrix/admin") === false) {
    //main module
    $rsManager->addEventHandler("main", "OnProlog", [Tools::class, "setDeviceType"], false, 100);
    //end
}
//end
