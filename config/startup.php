<?php

define("TEMPLATES_ROOT", "templates/");
define("IMAGES_ROOT", "/img");
define("CONFIG_ROOT", "/config/");

define("ROUTE_INDEX", "index");
define("ROUTE_SERVICES", "services");
define("ROUTE_ABOUT_US", "about_us");
define("ROUTE_GALLERY", "gallery");
define("ROUTE_CONTACT", "contact");
define("ROUTE_ESTIMATES", "estimates");
define("ROUTE_TESTIMONIALS", "testimonials");
define("ROUTE_CLEANING", "cleaning");

$config['available_routes'] = array(
    ROUTE_SERVICES,
    ROUTE_ABOUT_US,
    ROUTE_GALLERY,
    ROUTE_CONTACT,
    ROUTE_ESTIMATES,
    ROUTE_TESTIMONIALS,
    ROUTE_CLEANING,
);

// Get route value to choose appropriate template
define("ROUTE", (isset($_GET["route"]) ? (in_array($_GET["route"], $config['available_routes']) ? $_GET["route"] : ROUTE_INDEX ) : ROUTE_INDEX ));

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
        "main"      => "07748 200 875",
        "secondary" => "07737 909 081"
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
    "gallery" => array(
        "Roof Cleaning" => array(
            array("caption" => "caption test", "path"=>"/img/gallery/cleaning_1_1.jpg"),
            array("caption" => "caption test", "path"=>"/img/gallery/cleaning_1_2.jpg"),
            array("caption" => "caption test", "path"=>"/img/gallery/cleaning_1_3.jpg"),
            array("caption" => "caption test", "path"=>"/img/gallery/cleaning_2_1.jpg"),
            array("caption" => "caption test", "path"=>"/img/gallery/cleaning_2_2.jpg"),
            array("caption" => "caption test", "path"=>"/img/gallery/cleaning_2_3.jpg"),
            array("caption" => "caption test", "path"=>"/img/gallery/cleaning_3_3.jpg"),
        ),
        "Tiled &amp; Slate Roof" => array(
            array("caption" => "caption test", "path"=>"/img/gallery/tiles_1.jpg"),
            array("caption" => "caption test", "path"=>"/img/gallery/tiles_2.jpg"),
            array("caption" => "caption test", "path"=>"/img/gallery/tiles_3.jpg"),
            array("caption" => "caption test", "path"=>"/img/gallery/tiles_5.jpg"),
            array("caption" => "caption test", "path"=>"/img/gallery/tiles_6.jpg"),
            array("caption" => "caption test", "path"=>"/img/gallery/tiles_7.jpg"),
            array("caption" => "caption test", "path"=>"/img/gallery/tiles_9.jpg"),
            array("caption" => "caption test", "path"=>"/img/gallery/tiles_10.jpg"),
            array("caption" => "caption test", "path"=>"/img/gallery/tiles_11.jpg"),
            array("caption" => "caption test", "path"=>"/img/gallery/tiles_12.jpg"),
            array("caption" => "caption test", "path"=>"/img/gallery/tiles_13.jpg"),
            array("caption" => "caption test", "path"=>"/img/gallery/tiles_14.jpg"),
            array("caption" => "caption test", "path"=>"/img/gallery/tiles_15.jpg"),
            array("caption" => "caption test", "path"=>"/img/gallery/tiles_16.jpg"),
            array("caption" => "caption test", "path"=>"/img/gallery/tiles_17.jpg"),
            array("caption" => "caption test", "path"=>"/img/gallery/tiles_18.jpg"),
            array("caption" => "caption test", "path"=>"/img/gallery/tiles_19.jpg"),
            array("caption" => "caption test", "path"=>"/img/gallery/tiles_20.jpg"),
        ),
        "Velux Windows" => array(
            array("caption" => "caption test", "path"=>"/img/gallery/velux_1.jpg"),
            array("caption" => "caption test", "path"=>"/img/gallery/velux_2.jpg"),
            array("caption" => "caption test", "path"=>"/img/gallery/velux_3.jpg"),
            array("caption" => "caption test", "path"=>"/img/gallery/velux_4_1.jpg"),
            array("caption" => "caption test", "path"=>"/img/gallery/velux_5_1.jpg"),
            array("caption" => "caption test", "path"=>"/img/gallery/velux_6.jpg"),
        ),
        "Flat/Felt Roofs" => array(
            array("caption" => "caption test", "path"=>"/img/gallery/flatroof_1_1.jpg"),
            array("caption" => "caption test", "path"=>"/img/gallery/flatroof_3_1.jpg"),
            array("caption" => "caption test", "path"=>"/img/gallery/flatroof_4_1.jpg"),
        ),
        "Lead Work" => array(
            array("caption" => "caption test", "path"=>"/img/gallery/lead_1.jpg"),
        ),
        "Firewalls" => array(
            array("caption" => "caption test", "path"=>"/img/gallery/firewall repair before.jpg"),
            array("caption" => "caption test", "path"=>"/img/gallery/firewall repairs after.jpg"),
        ),
    ),
    "landing_page" => array(
        "index" => array(
            "cleaning" => array("img_path" => "/img/landing_page/cleaning.jpg")
        ),
        "services" => array(
            "main" => array("img_path" => "/img/landing_page/services.jpg")
        ),
        "about_us" => array(
            "main" => array("img_path" => "/img/landing_page/services.jpg")
        ),
        "cleaning" => array(
            "main" => array("img_path" => "/img/landing_page/cleaning.jpg")
        ),
    )
);

include_once(CONFIG_ROOT . "helpers.php");
$helpers = new Helpers();

// Include header
include_once(TEMPLATES_ROOT . "header.php");

