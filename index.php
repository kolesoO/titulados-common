<?php

declare(strict_types=1);

/** @global CMain $APPLICATION */

require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/header.php');

$APPLICATION->SetTitle('title');
?>

<section>
    <div class="container px-0 d-flex flex-wrap justify-content-center">
        <?
        $APPLICATION->IncludeComponent(
            "bitrix:news.list",
            "main-slider",
            [
                "DISPLAY_DATE" => "Y",
                "DISPLAY_NAME" => "Y",
                "DISPLAY_PICTURE" => "Y",
                "DISPLAY_PREVIEW_TEXT" => "Y",
                "AJAX_MODE" => "N",
                "IBLOCK_TYPE" => "content",
                "IBLOCK_ID" => IBLOCK_CONTENT_SLIDERS,
                "NEWS_COUNT" => "5",
                "SORT_BY1" => "ID",
                "SORT_ORDER1" => "DESC",
                "SORT_BY2" => "SORT",
                "SORT_ORDER2" => "ASC",
                "FILTER_NAME" => "arSliderFilter",
                "FIELD_CODE" => Array("ID", "NAME", "PREVIEW_PICTURE", "PREVIEW_TEXT"),
                "PROPERTY_CODE" => Array("*"),
                "CHECK_DATES" => "Y",
                "DETAIL_URL" => "",
                "PREVIEW_TRUNCATE_LEN" => "",
                "ACTIVE_DATE_FORMAT" => "M d, Y",
                "SET_TITLE" => "N",
                "SET_BROWSER_TITLE" => "N",
                "SET_META_KEYWORDS" => "N",
                "SET_META_DESCRIPTION" => "N",
                "SET_LAST_MODIFIED" => "Y",
                "INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
                "ADD_SECTIONS_CHAIN" => "Y",
                "HIDE_LINK_WHEN_NO_DETAIL" => "Y",
                "PARENT_SECTION" => "",
                "PARENT_SECTION_CODE" => "index-modelo",
                "INCLUDE_SUBSECTIONS" => "Y",
                "CACHE_TYPE" => "A",
                "CACHE_TIME" => "3600",
                "CACHE_FILTER" => "Y",
                "CACHE_GROUPS" => "Y",
                "DISPLAY_TOP_PAGER" => "N",
                "DISPLAY_BOTTOM_PAGER" => "N",
                "PAGER_TITLE" => "Новости",
                "PAGER_SHOW_ALWAYS" => "Y",
                "PAGER_TEMPLATE" => "",
                "PAGER_DESC_NUMBERING" => "Y",
                "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                "PAGER_SHOW_ALL" => "Y",
                "PAGER_BASE_LINK_ENABLE" => "Y",
                "SET_STATUS_404" => "N",
                "SHOW_404" => "N",
                "MESSAGE_404" => "",
                "PAGER_BASE_LINK" => "",
                "PAGER_PARAMS_NAME" => "arrPager",
                "AJAX_OPTION_JUMP" => "N",
                "AJAX_OPTION_STYLE" => "Y",
                "AJAX_OPTION_HISTORY" => "N",
                "AJAX_OPTION_ADDITIONAL" => "",
            ]
        );?>
        <div class="descr-block col-xl-12 p-0 d-flex flex-wrap justify-content-between">
            <div class="descr-block-item col-4 p-0">Llevamos más de 5 años dedicándonos a la ayuda universitaria de forma profesional, en XXX únicamente contamos con profesionales del sector con amplia experiencia redactando proyectos académicos, por supuesto están avalados por el nombre de la empresa, nuestra dilatada experiencia, nuestros profesores y nuestra metodología de trabajo, nos permite proclamarnos líderes del sector, nuestros resultados nos avalan. ¿Quién estará a cargo de mi proyecto?</div>
            <div class="descr-block-item col-12 p-0 col-md-3 col-xl-2">
                <img src="<?=SITE_TEMPLATE_PATH?>/img/hat.png">
                <p class="col-xl-12 mt-3 px-0">Пригласи друга и получи 500 рублей за первый оплаченный заказ друга!</p>
            </div>
            <div class="descr-block-item col-12 p-0 col-md-3 col-xl-2">
                <img src="<?=SITE_TEMPLATE_PATH?>/img/like.png">
                <p class="col-xl-12 mt-3 px-0">Después de recibir el trabajo, durante el período de garantía, el autor
                    realiza ajustes gratuitos en el pedido realizado.</p>
            </div>
            <div class="descr-block-item col-12 p-0 col-md-3 col-xl-2">
                <img src="<?=SITE_TEMPLATE_PATH?>/img/euro.png">
                <p class="col-xl-12 mt-3 px-0">Envita a tu amigo a recibe 10€ en la cuenta de Titulados</p>
            </div>
        </div>
    </div>
    </div>
</section>
<section>
    <div class="container px-0">
        <div class="title-1 mb-5 col-12 p-0 text-center">Почему студенты выбирают нас?</div>
        <div class="second_slider col-12 p-0 justify-content-center">
            <div
                    class="slider slider-for clearfix js-slider col-7 p-0 mx-auto my-0"
                    data-fade="true"
                    data-asNavFor=".slider-nav"
            >
                <div class="d-flex flex-wrap justify-content-center">
                    <div class="sec_slider-title align-self-center col-4">Виртуальная платформа</div>
                    <div class="main_slider-footer col-xl-7 p-0 d-flex flex-wrap justify-content-center">
                        <div class="circle d-flex align-items-center justify-content-center">
                            <span class="col-8">Plataforma virtual: aula virtual de última generación, accesible, intuitiva, comunicación fluida y sin intermediarios con el profesor, comparte todo tipo de archivos.</span>
                        </div>
                        <button class="btn button-round btn-warning">Pide el presupuesto del proyecto</button>
                    </div>
                </div>
                <div class="d-flex flex-wrap justify-content-center">
                    <div class="sec_slider-title align-self-center col-4">Rsldkjfskjf платформа</div>
                    <div class="main_slider-footer col-xl-7 p-0 d-flex flex-wrap justify-content-center">
                        <div class="circle d-flex align-items-center justify-content-center bg-success">
                            <span class="col-8">Plataforma virtual: aula virtual de última generación, accesible, intuitiva, comunicación fluida y sin intermediarios con el profesor, comparte todo tipo de archivos.</span>
                        </div>
                        <button class="btn button-round btn-warning">Pide el presupuesto del proyecto</button>
                    </div>
                </div>
                <div class="d-flex flex-wrap justify-content-center">
                    <div class="sec_slider-title align-self-center col-4">Виртуальная платформа</div>
                    <div class="main_slider-footer col-xl-7 p-0 d-flex flex-wrap justify-content-center">
                        <div class="circle d-flex align-items-center justify-content-center bg-danger">
                            <span class="col-8">Plataforma virtual: aula virtual de última generación, accesible, intuitiva, comunicación fluida y sin intermediarios con el profesor, comparte todo tipo de archivos.</span>
                        </div>
                        <button class="btn button-round btn-warning">Pide el presupuesto del proyecto</button>
                    </div>
                </div>
                <div class="d-flex flex-wrap justify-content-center">
                    <div class="sec_slider-title align-self-center col-4">Виртуальная платформа</div>
                    <div class="main_slider-footer col-xl-7 p-0 d-flex flex-wrap justify-content-center">
                        <div class="circle d-flex align-items-center justify-content-center">
                            <span class="col-8">Plataforma virtual: aula virtual de última generación, accesible, intuitiva, comunicación fluida y sin intermediarios con el profesor, comparte todo tipo de archivos.</span>
                        </div>
                        <button class="btn button-round btn-warning">Pide el presupuesto del proyecto</button>
                    </div>
                </div>
                <div class="d-flex flex-wrap justify-content-center">
                    <div class="sec_slider-title align-self-center col-4">Виртуальная платформа</div>
                    <div class="main_slider-footer col-xl-7 p-0 d-flex flex-wrap justify-content-center">
                        <div class="circle d-flex align-items-center justify-content-center">
                            <span class="col-8">Plataforma virtual: aula virtual de última generación, accesible, intuitiva, comunicación fluida y sin intermediarios con el profesor, comparte todo tipo de archivos.</span>
                        </div>
                        <button class="btn button-round btn-warning">Pide el presupuesto del proyecto</button>
                    </div>
                </div>
            </div>
            <div
                    class="slider slider-nav js-slider col-7 p-0 overflow-hidden"
                    data-slidesToShow="3"
                    data-asNavFor=".slider-for"
                    data-focusOnSelect="true"
                    data-infinite="true"
            >
                <div class="slider-nav-item">
                    <span>1</span>
                </div>
                <div class="slider-nav-item">
                    <span>2</span>
                </div>
                <div class="slider-nav-item">
                    <span>3</span>
                </div>
                <div class="slider-nav-item">
                    <span>4</span>
                </div>
                <div class="slider-nav-item">
                    <span>5</span>
                </div>
            </div>
        </div>
        <div class="faq-block col-12 p-0 d-flex flex-wrap justify-content-center">
            <div class="faq-block-item col-7 js-toggle-wrapper">
                <div class="faq-block-item-title js-toggle" data-target=".faq-block-item-descr">
                    <i class="fas fa-plus"></i>
                    <i class="fas fa-minus"></i>
                    <span class="ml-3">¿Las correcciones del proyecto se paganaparte?</span>
                </div>
                <div class="faq-block-item-descr">Plataforma virtual: aula virtual de última generación, accesible, intuitiva, comunicación fluida y sin intermediarios con el profesor, comparte todo tipo de archivos. </div>
            </div>
            <div class="faq-block-item col-7 js-toggle-wrapper">
                <div class="faq-block-item-title js-toggle" data-target=".faq-block-item-descr">
                    <i class="fas fa-plus"></i>
                    <i class="fas fa-minus"></i>
                    <span class="ml-3">¿El presupuesto se paga en un solo pago?</span>
                </div>
                <div class="faq-block-item-descr">Plataforma virtual: aula virtual de última generación, accesible, intuitiva, comunicación fluida y sin intermediarios con el profesor, comparte todo tipo de archivos. </div>
            </div>
            <div class="faq-block-item col-7 js-toggle-wrapper">
                <div class="faq-block-item-title js-toggle" data-target=".faq-block-item-descr">
                    <i class="fas fa-plus"></i>
                    <i class="fas fa-minus"></i>
                    <span class="ml-3">¿Las correcciones del proyecto se paganaparte?</span>
                </div>
                <div class="faq-block-item-descr">Plataforma virtual: aula virtual de última generación, accesible, intuitiva, comunicación fluida y sin intermediarios con el profesor, comparte todo tipo de archivos. </div>
            </div>
            <div class="faq-block-item col-7 js-toggle-wrapper">
                <div class="faq-block-item-title js-toggle" data-target=".faq-block-item-descr">
                    <i class="fas fa-plus"></i>
                    <i class="fas fa-minus"></i>
                    <span class="ml-3">¿Las correcciones del proyecto se paganaparte?</span>
                </div>
                <div class="faq-block-item-descr">Plataforma virtual: aula virtual de última generación, accesible, intuitiva, comunicación fluida y sin intermediarios con el profesor, comparte todo tipo de archivos. </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container px-0">
        <div class="title-1 mb-5 col-12 p-0 text-center">¿Qué podemos garantizarle?</div>
        <div class="third_slider clearfix js-slider col-12 p-0 mx-auto my-0" data-autoplay="false"
             data-autoplaySpeed="5000" data-infinite="false" data-speed="1000" data-arrows="false" data-dots="true">
            <div class="main_slider-item">
                <div class="col-xl-12 p-0 main_slider-description d-flex flex-wrap align-content-between justify-content-center">
                    <img src="<?=SITE_TEMPLATE_PATH?>/img/third_slider-img.png" alt="" class="mr-5">
                    <div class="main_slider-footer col-xl-7 p-0 d-flex flex-wrap">
                        <div class="descr-title">Проекты высокого качества и их описание</div>
                        <div class="col-10 p-0">Proyecto de alta calidad: Indiferentemente del proyecto que se solicite, (TFG, TFM, TESIS DOCTORAL, ARTICULO, ETC..) o la tipología del proyecto que se debe desarrollar, se desarrollara siguiendo estrictamente las directrices previamente establecidas en la solicitud de presupuesto, lo llevara a cabo un profesor experto en la materia, el cual dedicara el tiempo necesario para desarrollar un contenido profesional y de calidad. “nos regimos por la calidad del contenido y no en su extensión”</div>
                    </div>
                </div>
            </div>
            <div class="main_slider-item">
                <div class="col-xl-12 p-0 main_slider-description d-flex flex-wrap align-content-between">
                    <img src="<?=SITE_TEMPLATE_PATH?>/img/slider-image.png" alt="" class="mr-5">
                    <div class="main_slider-footer col-xl-6 p-0 d-flex flex-wrap">
                        <div class="col-12 p-0">Nuestros asesores contactaran con alumno para dar el presupuesto y dejar elegir la forma de pago ( puede ser fraccionada</div>
                    </div>
                </div>
            </div>
            <div class="main_slider-item">
                <div class="col-xl-12 p-0 main_slider-description d-flex flex-wrap align-content-between">
                    <img src="<?=SITE_TEMPLATE_PATH?>/img/slider-image.png" alt="" class="mr-5">
                    <div class="main_slider-footer col-xl-6 p-0 d-flex flex-wrap">
                        <div class="col-12 p-0">Nuestros asesores contactaran con alumno para dar el presupuesto y dejar elegir la forma de pago ( puede ser fraccionada</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 p-0 percentage-block d-flex justify-content-center">
            <img src="<?=SITE_TEMPLATE_PATH?>/img/%25.png" alt="">
            <span class="percentage-descr">Descuento para<br>su primer<br>pedido 5%</span>
        </div>
    </div>
</section>
<section class="final">
    <div class="container px-0">
        <div class="title-1 mb-5 col-12 p-0 text-center">¿Qué afecta al precio final<br>de un proyecto?</div>
        <div class="third_slider clearfix js-slider col-12 p-0 mx-auto my-0" data-autoplay="false"
             data-autoplaySpeed="5000" data-infinite="false" data-speed="1000" data-arrows="false" data-dots="true">
            <div class="main_slider-item">
                <div class="col-xl-12 p-0 main_slider-description d-flex flex-wrap">
                    <div class="col-4 p-0 slider-txt">
                        Llevamos más de 5 años dedicándonos a la ayuda universitaria de forma profesional, en XXX únicamente contamos con profesionales del sector con amplia experiencia redactando proyectos académicos, por supuesto están avalados por el nombre de la empresa, nuestra dilatada experiencia, nuestros profesores y nuestra metodología de trabajo, nos permite proclamarnos líderes del sector, nuestros resultados nos avalan.
                        ¿Quién estará a cargo de mi proyecto?
                    </div>
                    <div class="slider-stage">- COMPLEJIDAD.</div>
                </div>
            </div>
            <div class="main_slider-item">
                <div class="col-xl-12 p-0 main_slider-description d-flex flex-wrap align-content-between">
                    <img src="<?=SITE_TEMPLATE_PATH?>/img/slider-image.png" alt="" class="mr-5">
                    <div class="main_slider-footer col-xl-6 p-0 d-flex flex-wrap">
                        <div class="col-12 p-0">Nuestros asesores contactaran con alumno para dar el presupuesto y dejar elegir la forma de pago ( puede ser fraccionada</div>
                    </div>
                </div>
            </div>
            <div class="main_slider-item">
                <div class="col-xl-12 p-0 main_slider-description d-flex flex-wrap align-content-between">
                    <img src="<?=SITE_TEMPLATE_PATH?>/img/slider-image.png" alt="" class="mr-5">
                    <div class="main_slider-footer col-xl-6 p-0 d-flex flex-wrap">
                        <div class="col-12 p-0">Nuestros asesores contactaran con alumno para dar el presupuesto y dejar elegir la forma de pago ( puede ser fraccionada</div>
                    </div>
                </div>
            </div>
        </div>
        <img src="<?=SITE_TEMPLATE_PATH?>/img/paper.png" alt="" class="slider-img">
    </div>
</section>

<?require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/footer.php');?>
