<?php

declare(strict_types=1);

use Bitrix\Main\Page\Asset;

/** @global CMain $APPLICATION */
/** @global CMain $USER */

if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

$rsAsset = Asset::getInstance();

$isMainPage = $APPLICATION->GetCurPage(false) == SITE_DIR;

$rsAsset->addCss(SITE_TEMPLATE_PATH . '/css/main.css');
$rsAsset->addCss(SITE_TEMPLATE_PATH . '/css/fonts/proxima_nova/stylesheet.css');
$rsAsset->addCss(SITE_TEMPLATE_PATH . '/libs/fontawesome/css/fontawesome-all.min.css');

$rsAsset->addJs(SITE_TEMPLATE_PATH . '/libs/jquery1.12.4/script.js');
$rsAsset->addJs(SITE_TEMPLATE_PATH . '/libs/slick/script.js');
$rsAsset->addJs(SITE_TEMPLATE_PATH . '/js/modules/slider/script.js');
$rsAsset->addJs(SITE_TEMPLATE_PATH . '/js/modules/tabs/script.js');
$rsAsset->addJs(SITE_TEMPLATE_PATH . '/js/forms.js');
$rsAsset->addJs(SITE_TEMPLATE_PATH . '/dist/app.js');
?>

<!DOCTYPE html>
<html>
<head>
    <title><?$APPLICATION->ShowTitle()?></title>

    <?if (DEVICE_TYPE == "MOBILE") :?>
        <meta name="viewport" content="width=375, user-scalable=0">
    <?elseif (DEVICE_TYPE == "TABLET") :?>
        <meta name="viewport" content="width=768, user-scalable=0">
    <?else:?>
        <meta name="viewport" content="width=device-width, maximum-scale=1.0, initial-scale=1.0, user-scalable=0">
    <?endif?>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="format-detection" content="telephone=no">

    <!--Favicon-->
    <link rel="shortcut icon" type="image/png" href="<?=SITE_TEMPLATE_PATH?>/images/favicons/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="<?=SITE_TEMPLATE_PATH?>/images/favicons/favicon-32x32.png">
    <link rel="apple-touch-icon" href="<?=SITE_TEMPLATE_PATH?>/images/favicons/favicon-32x32.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?=SITE_TEMPLATE_PATH?>/images/favicons/favicon-180x180.png">
    <link rel="apple-touch-icon" sizes="192x192" href="<?=SITE_TEMPLATE_PATH?>/images/favicons/favicon-192x192.png">
    <link rel="apple-touch-icon" sizes="270x270" href="<?=SITE_TEMPLATE_PATH?>/images/favicons/favicon-270x270.png">
    <!--link rel="manifest" href="<?=SITE_TEMPLATE_PATH?>/manifest.json"-->
    <meta name="msapplication-TileColor" content="#fff">
    <meta name="msapplication-TileImage" content="<?=SITE_TEMPLATE_PATH?>/images/favicons/favicon-180x180.png"/>
    <meta name="theme-color" content="#fff">
    <!--end-->

    <?$APPLICATION->ShowHead();?>
</head>
<body>
    <?if ($USER->IsAdmin()) :?>
        <div id="panel"><?$APPLICATION->ShowPanel();?></div>
    <?endif?>
    <section class="bg-blue">
        <header class="header">
            <div class="container p-0">
                <div class="d-flex flex-wrap justify-content-between">
                    <div class="logo col-xl-3 p-0 ">
                        <img class="d-none d-sm-block" src="<?=SITE_TEMPLATE_PATH?>/img/main-logo.png">
                    </div>
                    <div class="d-none d-xl-flex align-items-end col-xl-8 p-0 justify-content-end">
                        <?$APPLICATION->IncludeComponent(
                            "bitrix:menu",
                            "top",
                            Array(
                                "ROOT_MENU_TYPE" => "top",
                                "MAX_LEVEL" => "1",
                                "CHILD_MENU_TYPE" => "top",
                                "USE_EXT" => "Y",
                                "DELAY" => "N",
                                "ALLOW_MULTI_SELECT" => "Y",
                                "MENU_CACHE_TYPE" => "N",
                                "MENU_CACHE_TIME" => "3600",
                                "MENU_CACHE_USE_GROUPS" => "Y",
                                "MENU_CACHE_GET_VARS" => ""
                            )
                        );?>
                        <div class="sign col-sm-3 col-xl-4 text-center p-0 d-flex align-items-baseline justify-content-end">
                            <div class="header-sign_up mr-5" data-popup-open="#signup-form">Регистрация</div>
                            <div class="header-sign_in" data-popup-open="#signin-form">
                                <span>Вход</span>
                                <i class="far fa-user ml-1"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <?if ($isMainPage) :?>
            <div class="container d-flex flex-wrap justify-content-center">
                <div id="signup-form" class="popup">
                    <div class="popup_wrapper">
                        <div class="popup_content js-popup_content">
                            <div class="signup-form flex-wrap justify-content-center">
                                <div class="tabs js-tabs d-flex flex-wrap justify-content-between col-12 p-0">
                                    <a href="#" class="tab author" data-tab_target="#author">
                                        <span>Автор</span>
                                    </a>
                                    <a href="#" class="tab client" data-tab_target="#client">
                                        <span>Заказчик</span>
                                    </a>
                                    <div class="tab-data col-12 p-0" data-tab_content>
                                        <div id="author" data-tab_item>
                                            <div class="tab-header">
                                                <div class="circle author text-center"><span>я</span></div>
                                                <div class="arrow-author"></div>
                                            </div>
                                            <div class="form-title text-primary text-center">Регистрация как автор</div>
                                            <form id="author-signup-form" class="col-12 p-0 text-center">
                                                <input type="hidden" name="type" value="1">
                                                <input type="email" name="email" placeholder="Email" class="col-12 p-0" required>
                                                <input type="password" name="password" placeholder="Пароль" class="col-12 p-0" required>
                                                <input type="password" name="confirm-password" placeholder="Пароль повторно" class="col-12 p-0" required>
                                                <div class="col-12 p-0 agreement">
                                                    <input type="checkbox" id="author-agreement" required>
                                                    <label for="author-agreement">Я принимаю <a href="#">пользовательское соглашение</a></label>
                                                </div>
                                                <button class="btn btn-primary button-round" type="submit">Зарегистрироваться</button>
                                            </form>
                                        </div>
                                        <div id="client" data-tab_item>
                                            <div class="tab-header">
                                                <div class="circle client text-center"><span>я</span></div>
                                                <div class="arrow-client"></div>
                                            </div>
                                            <div class="form-title text-center">Регистрация как заказчик</div>
                                            <form id="client-signup-form" class="col-12 p-0 text-center">
                                                <input type="hidden" name="type" value="0">
                                                <input type="email" name="email" placeholder="Email" class="col-12 p-0" required>
                                                <input type="password" name="password" placeholder="Пароль" class="col-12 p-0" required>
                                                <input type="password" name="confirm-password" placeholder="Пароль повторно" class="col-12 p-0" required>
                                                <div class="col-12 p-0 agreement">
                                                    <input type="checkbox" id="client-agreement" required>
                                                    <label for="client-agreement">Я принимаю <a href="#" class="text-warning">пользовательское соглашение</a></label>
                                                </div>
                                                <button class="btn button-round" type="submit">Зарегистрироваться</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-tail bg-blue text-center">
                                    <div class="mb-4">Уже зарегистрированы?</div>
                                    <button class="btn bg-light button-round text-primary col-4" data-popup-open="#signin-form">Войти</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="signin-form" class="popup">
                    <div class="popup_wrapper">
                        <div class="popup_content js-popup_content">
                            <div class="signin-form flex-wrap justify-content-center">
                                <div class="form-title text-primary text-center col-12 p-0">Вход</div>
                                <form id="signin-form-form" class="col-12 p-0 text-center">
                                    <input type="email" name="email" placeholder="Email" class="col-12 p-0" required>
                                    <input type="password" name="password" placeholder="Пароль" class="col-12 p-0" required>
                                    <button class="btn btn-primary button-round col-5" type="submit">Войти</button>
                                </form>
                                <div class="form-tail bg-blue text-center">
                                    <div class="mb-4">Ещё не зарегистрированы?</div>
                                    <button class="btn bg-light button-round text-primary" data-popup-open="#signup-form">Зарегистрироваться</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="banner-wrapper d-flex align-items-stretch">
                    <div class="main-block d-flex flex-wrap justify-content-between col-12 px-0 js-">
                        <div class="main-block-title d-flex justify-content-center align-items-center col-12 p-0">
                            <i class="icon icon-coins mr-4"></i>
                            <div class="center-txt-block">Envita a tu amigo a recibe 10€ en la cuenta de Titulados</div>
                        </div>
                        <div class="main-block-left col-4 p-0">
                            <div class="title-1 mb-5">Solicita presupuesto sin compromiso!</div>
                            <div class="descr col-10 p-0">Nuestro equipo docente revisara la propuesta detenidamente, se asignará el proyecto al docente más cualificado, el cual disponga de los conocimientos y la experiencia redactando este tipo de proyectos.</div>
                        </div>
                        <div class="main-block-right">
                            <div class="title-1 mb-5">Узнайте стоимость работы в один клик</div>
                            <button class="btn button-round btn-warning js-toggle_class" data-class="changed" data-target=".banner-wrapper">Аveriguar el costo</button>
                        </div>
                        <img src="<?=SITE_TEMPLATE_PATH?>/img/main-image.png" alt="">
                    </div>
                    <div class="order-form col-12 px-0 flex-wrap justify-content-center">
                        <div class="order-form-title col-12 p-0 text-center">Форма заказа учебной работы</div>
                        <form class="d-flex flex-wrap col-8 p-0 justify-content-between">
                            <div class="col-5 p-0">
                                <select name="faculty" class="col-12 p-0">
                                    <option value="0" selected disabled>Ваш факультет</option>
                                    <option value="value1">факультет 1</option>
                                    <option value="value2" >факультет 2</option>
                                    <option value="value3">факультет 3</option>
                                </select>
                                <select name="type" class="col-12 p-0">
                                    <option value="0" selected disabled>Тип работы</option>
                                    <option value="value1">тип 1</option>
                                    <option value="value2" >тип 2</option>
                                    <option value="value3">тип 3</option>
                                </select>
                                <select name="speciality" class="col-12 p-0">
                                    <option value="0" selected disabled>Специальность</option>
                                    <option value="value1">Специальность 1</option>
                                    <option value="value2" >Специальность 2</option>
                                    <option value="value3">Специальность 3</option>
                                </select>
                                <input type="text" placeholder="Тип проекта" class="col-12 p-0">
                                <input type="text" placeholder="Тема работы" class="col-12 p-0">
                                <div class="underline-txt col-12 p-0">Si no tiene un tema pensado, debe especificar “de libre elección”</div>
                            </div>
                            <div class="col-5 p-0 d-flex flex-wrap justify-content-between">
                                <div class="col-5 p-0">
                                    <input type="text" placeholder="Дата сдачи работы" class="col-12 p-0 js-toggle-type" data-from="text" data-to="date">
                                    <div class="underline-txt col-12 p-0">Si no tiene un tema pensado, debe especificar “de libre elección”</div>
                                </div>
                                <div class="col-5 p-0">
                                    <input type="number" placeholder="Количество страниц" class="col-12 p-0">
                                    <div class="underline-txt col-12 p-0">Si no tiene un tema pensado, debe especificar “de libre elección”</div>
                                </div>
                                <textarea class="project-descr form-control col-12 mt-5" name="project-descr" rows="1" placeholder="Описание проекта"></textarea>
                                <div class="underline-txt col-12 mb-5 p-0">Se debe especificar claramente como quiere enfocar y llevar a cabo el proyecto,<br>el formato en el cual debe de estar redactado, tipo de bibliografía, etc...</div>
                                <div class="d-flex flex-wrap col-12 p-0">
                                    <i class="fas fa-paperclip mr-2"></i>
                                    <span class="part-txt">Прикрепить файлы</span>
                                    <div class="underline-txt col-12 p-0">Muy importante en este apartado, debe aparecerles un aviso importante)<br>ES NECESARIO QUE ADJUNTE TODOS LOS DOCUMENTOS QUE CONSIDERE RELEVANTES PARA LA CORRECTA VALORACIÓN DEL PROYECTO Y SU POSTERIOR ELABORACIÓN. (GUÍA DOCENTE, GUÍA DE PROYECTO, ENUNCIADOS, ETC…</div>
                                </div>
                                <input type="file" class="col-12" hidden>
                            </div>
                            <div class="col-12 p-0 text-center">
                                <button class="btn button-round btn-warning">Узнать стоимость</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        <?endif?>
    </section>
