<?php
define("TEMPLATES_ROOT", "templates/");
define("IMAGES_ROOT", "/img");

// Get route value to choose appropriate template
define("ROUTE", $_GET["route"]);
define("ROUTE_INDEX", "index");
define("ROUTE_SERVICES", "services");
define("ROUTE_ABOUT_US", "about_us");
define("ROUTE_GALLERY", "gallery");
define("ROUTE_CONTACT", "contact");
define("ROUTE_ESTIMATES", "estimates");
define("ROUTE_TESTIMONIALS", "testimonials");
define("ROUTE_CLEANING", "cleaning");

$config = array(
    "meta" => array(
        "title" => array(
            ROUTE_INDEX => "",
            ROUTE_SERVICES => "",
            ROUTE_ABOUT_US => "",
            ROUTE_GALLERY => "",
            ROUTE_CONTACT => "",
            ROUTE_ESTIMATES => "",
            ROUTE_TESTIMONIALS => "",
            ROUTE_CLEANING => "",
        ),
        "description" => array(
            ROUTE_INDEX => "",
            ROUTE_SERVICES => "",
            ROUTE_ABOUT_US => "",
            ROUTE_GALLERY => "",
            ROUTE_CONTACT => "",
            ROUTE_ESTIMATES => "",
            ROUTE_TESTIMONIALS => "",
            ROUTE_CLEANING => "",
        ),
    ),
    "slideshow" => array(
        0 => array(
            "path"  => ".......png",
            "label" => "todo",
            ),
    ),
    "phone" => array(
        "main"      => "0000000000",
        "secondary" => "0000000000"
    ),
    "email" => "info@canddroofingbrighton.co.uk",
    "address" => "
        64 Staplefield Drive<br/>
        Brighton<br/>
        East Sussex<br/>
        BN2 4RP<br/>
        ",
    "external" => array(
        "linkedin"      => "http://",
        "checkatrade"   => "todo",
        "google_map"    => "todo"
    ),
);


// Include header
include_once(TEMPLATES_ROOT . "header.php");