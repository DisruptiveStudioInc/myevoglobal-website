<?php

//-------------------------------------------//
// OBTENER PÁGINA ACTUAL Y PARÁMETROS
//-------------------------------------------//

$Actual_Page = !empty($_GET['p']) ? $_GET['p'] : '';
$Actual_Page_Lan = $Actual_Page ? '&p=' . $Actual_Page : '';
$Client_Page_Id = (empty($_GET['id'])) ? '' : '&id=' . $_GET['id'];
$Hide = ($Actual_Page === 'home' || $Actual_Page === '') ? '' : 'none';

    //-------------------------//
    // CLIENT
    //-------------------------//

$Company_Name  = "EVO Global";

    //-------------------------//
    // META
    //-------------------------//

$Description_Site  = $Description;
$Keywords_Site     = $Keywords;

    //-------------------------//
    // GENERAL
    //-------------------------//

$Host_Site      = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://" . $_SERVER["HTTP_HOST"];
$Lang           = "es";
$Footer_Rights  = $Company_Name."© ".date("Y").". All rights reserved";

//-------------------------//
// LINKS
//-------------------------//

/*$link_01 = "purple";*/
$link_02 = "gold";
$link_03 = "silver";
$link_04 = "black";

// ---------------------------
// Links de login/register
// ---------------------------

$ref = isset($user_replica) ? "?ref=$user_replica" : '';

$Register = "https://usa.myevoglobal.com/register/$ref";
$Login    = "https://usa.myevoglobal.com/my-account/";

// ---------------------------
// Links del menu (tienda)
// ---------------------------

$link_web_us = "https://usa.myevoglobal.com";
$link_web_mx = "https://mex.myevoglobal.com";
$link_web_in = "https://int.myevoglobal.com";
$link_web_co = "https://col.myevoglobal.com";
$link_web_eu = "https://eur.myevoglobal.com";

$Shop_us = "$link_web_us/$ref";
$Shop_mx = "$link_web_mx/$ref";
$Shop_in = "$link_web_in/$ref";
$Shop_co = "$link_web_co/$ref";
$Shop_eu = "$link_web_eu/$ref";

// ---------------------------
// Links de los productos
// ---------------------------
$links_product = [
    [
        'url'   => $link_web_us . "/product/",
        'class' => 'eng',
        'label' => 'Buy in USA',
        'text'  => 'United States'
    ],
    [
        'url'   => $link_web_mx . "/product/",
        'class' => 'esp',
        'label' => 'Buy in Mexico',
        'text'  => 'México'
    ],
    [
        'url'   => $link_web_in . "/product/",
        'class' => 'int',
        'label' => 'Buy International',
        'text'  => 'International'
    ],
    [
        'url'   => $link_web_co . "/product/",
        'class' => 'col',
        'label' => 'Buy Colombia',
        'text'  => 'Colombia'
    ],
    [
        'url'   => $link_web_eu . "/product/",
        'class' => 'eur',
        'label' => 'Buy Europe',
        'text'  => 'Europe'
    ]
];

// ---------------------------
// Array product category (Explora EVO)
// ---------------------------
$links = [
    [
        'url'   => $link_web_us . "/product-category/evolver-plans/",
        'class' => 'eng',
        'label' => 'Buy in USA',
        'text'  => 'United States'
    ],
    [
        'url'   => $link_web_mx . "/product-category/evolver-plans/",
        'class' => 'esp',
        'label' => 'Buy in Mexico',
        'text'  => 'México'
    ],
    [
        'url'   => $link_web_in . "/product-category/evolver-plans/",
        'class' => 'int',
        'label' => 'Buy International',
        'text'  => 'International'
    ],
    [
        'url'   => $link_web_co . "/product-category/evolver-plans/",
        'class' => 'col',
        'label' => 'Buy Colombia',
        'text'  => 'Colombia'
    ],
    [
        'url'   => $link_web_eu . "/product-category/evolver-plans/",
        'class' => 'eur',
        'label' => 'Buy Europe',
        'text'  => 'Europe'
    ]
];

    //-------------------------//
    // VIDEO VIMEO
    //-------------------------//

$Video_vimeo = "1112334525";

    //-------------------------//
    // MENU
    //-------------------------//

$Menu = array(
    array('#home','active',$Menu_01),
    array('#evo','',$Menu_02),
    array('#products','',$Menu_03),
    array('','',$Menu_04),
    /*array('','','Evo Travel'),
    array('','','Evo Link'),*/
    array('','', $Menu_05)
);

    //-------------------------//
    // SUBMENU
    //-------------------------//

$Sub = array(
    array($Menu_03, array(
        /*array($link_01, $Products_title_01, $Products_01),*/
        array($link_02, $Products_title_02, $Products_02),
        array($link_03, $Products_title_03, $Products_03),
        array($link_04, $Products_title_04, $Products_04)
    ))
);

$Sub_reg = array(
    array($Shop_us,'USA','eng'),
    array($Shop_mx,'MEX','esp'),
    array($Shop_co,'COL','col'),
    array($Shop_eu,'EUR','eur'),
    array($Shop_in,'INT','int')
);

    //-------------------------//
    // CONDITIONS
    //-------------------------//

$idiomas = [
    'eng' => 'Eng',
    'esp' => 'Esp'
];

$Condicion_lan = isset($idiomas[$idioma]) ? $idiomas[$idioma] : 'Desconocido';

    //-------------------------//
    // CONTACT
    //-------------------------//

$Email = "support@evoglobal.online";
$Schedule = "Mon-Fri: 9 am– 6 pm<br>Saturday: 9 am – 2pm<br>Sunday: Closed";
$Phone = "(888) 456 7890";
$Address = "Blvd. Kukulcan 1,<br>Puerto Juarez,<br>Zona Hotelera,<br>77500 Cancún, Q.R. México";

?>



























