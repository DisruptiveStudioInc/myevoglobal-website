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

// ---------------------------
// Links del menu (tienda)
// ---------------------------

$link_web_us   = "https://usa.myevoglobal.com";
$link_web_mx   = "https://mex.myevoglobal.com";
$link_web_co   = "https://col.myevoglobal.com";
$link_web_eu   = "https://eur.myevoglobal.com";
$link_web_in   = "https://int.myevoglobal.com";

$link_login_us = "https://usa.myevoglobal.com/my-account/";
$link_login_mx = "https://mex.myevoglobal.com/my-account/";
$link_login_co = "https://col.myevoglobal.com/my-account/";
$link_login_eu = "https://eur.myevoglobal.com/my-account/";
$link_login_in = "https://int.myevoglobal.com/my-account/";

$link_register_us = "https://usa.myevoglobal.com/register/";
$link_register_mx = "https://mex.myevoglobal.com/register/";
$link_register_co = "https://col.myevoglobal.com/register/";
$link_register_eu = "https://eur.myevoglobal.com/register/";
$link_register_in = "https://int.myevoglobal.com/register/";

$link_Shop_us  = "$link_web_us/$ref";
$link_Shop_mx  = "$link_web_mx/$ref";
$link_Shop_in  = "$link_web_in/$ref";
$link_Shop_co  = "$link_web_co/$ref";
$link_Shop_eu  = "$link_web_eu/$ref";

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
    array('','',$Menu_04)
    /*array('','','Evo Travel'),
    array('','','Evo Link'),*/
 
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

$Sub_shop = array(
    array($link_Shop_us,'eng','USA'),
    array($link_Shop_mx,'esp','MEX'),
    array($link_Shop_co,'col','COL'),
    array($link_Shop_eu,'eur','EUR'),
    array($link_Shop_in,'int','INT')
);

    //-------------------------//
    // CONDITIONS
    //-------------------------//

$idiomas = [
    'eng' => 'Eng',
    'esp' => 'Esp',
    'fra' => 'Fra',
    'jpn' => 'Jpn',
    'por' => 'Por',
    'chi' => 'Chi',
    'ita' => 'Ita',
    'cor' => 'Cor',
    'rus' => 'Rus',
    'ale' => 'Ger'
];

$Condicion_lan = isset($idiomas[$idioma]) ? $idiomas[$idioma] : 'Desconocido';

    //-------------------------//
    // SUB LOGIN
    //-------------------------//

$Sub_login = array(
    array($link_login_us,'eng','USA'),
    array($link_login_mx,'esp','MEX'),
    array($link_login_co,'col','COL'),
    array($link_login_eu,'eur','EUR'),
    array($link_login_in,'int','INT')
);

    //-------------------------//
    // SUB REGISTER
    //-------------------------//

$Sub_register = array(
    array($link_register_us,'eng','USA'),
    array($link_register_mx,'esp','MEX'),
    array($link_register_co,'col','COL'),
    array($link_register_eu,'eur','EUR'),
    array($link_register_in,'int','INT')
);


    //-------------------------//
    // CONTACT
    //-------------------------//

$Email = "support@evoglobal.online";
$Schedule = "Mon-Fri: 9 am– 6 pm<br>Saturday: 9 am – 2pm<br>Sunday: Closed";
$Phone = "(888) 456 7890";
$Address = "Blvd. Kukulcan 1,<br>Puerto Juarez,<br>Zona Hotelera,<br>77500 Cancún, Q.R. México";

?>



























