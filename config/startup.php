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

include_once(CONFIG_ROOT . "helpers.php");
$helpers = new Helpers();

$config = array(
    "meta" => array(
        "title" => array(
            ROUTE_INDEX => "C &amp; D Roofing Brighton | All aspects of roofing, Roof renewal, Tiled Roofs, Lead Works, Guttering, Fascia",
            ROUTE_SERVICES => "C &amp; D Roofing Brighton | All aspects of roofing, Roof renewal, Tiled Roofs, Lead Works, Guttering, Fascia",
            ROUTE_ABOUT_US => "C &amp; D Roofing Brighton | All aspects of roofing, Roof renewal, Tiled Roofs, Lead Works, Guttering, Fascia",
            ROUTE_GALLERY => "C &amp; D Roofing Brighton | All aspects of roofing, Roof renewal, Tiled Roofs, Lead Works, Guttering, Fascia",
            ROUTE_CONTACT => "C &amp; D Roofing Brighton | All aspects of roofing, Roof renewal, Tiled Roofs, Lead Works, Guttering, Fascia",
            ROUTE_ESTIMATES => "C &amp; D Roofing Brighton | All aspects of roofing, Roof renewal, Tiled Roofs, Lead Works, Guttering, Fascia",
            ROUTE_TESTIMONIALS => "C &amp; D Roofing Brighton | All aspects of roofing, Roof renewal, Tiled Roofs, Lead Works, Guttering, Fascia",
            ROUTE_CLEANING => "C &amp; D Roofing Brighton | All aspects of roofing, Roof renewal, Tiled Roofs, Lead Works, Guttering, Fascia",
        ),
        "description" => array(
            ROUTE_INDEX => "C &amp; D Roofing &amp; Property maintenance are roofing contractors in Brighton specialise in all aspects of roofing including tiling and slating, roof repairs",
            ROUTE_SERVICES => "We provide services of roofing including tiling and slating, roof repairs, felt flat roofs, roof cleaning, lead works, solar panels installation, chimneys.",
            ROUTE_ABOUT_US => "C &amp; D Roofing &amp; Property Maintenance is a family run business in Brighton with over 35 years experience specialising in domestic roofing.",
            ROUTE_GALLERY => "C &amp; D Roofing &amp; Property maintenance are roofing contractors in Brighton specialise in all aspects of roofing including tiling and slating, roof repairs",
            ROUTE_CONTACT => "C &amp; D Roofing &amp; Property maintenance are roofing contractors in Brighton specialise in all aspects of roofing including tiling and slating, roof repairs",
            ROUTE_ESTIMATES => "C &amp; D Roofing &amp; Property maintenance are roofing contractors in Brighton specialise in all aspects of roofing including tiling and slating, roof repairs",
            ROUTE_TESTIMONIALS => "Check out our testimonials to see what our previous West and East Sussex clients have said about C &amp; D Roofing &amp; Property maintenance in Brighton.",
            ROUTE_CLEANING => "Our roof cleaning service is a process which gives your roof a new lease of life, increasing the life span of your roof, and improving appearance of your home.",
        ),
    ),
    "slideshow" => array(
        0 => array(
            "path"  => "/img/slider/1.jpg",
            "label" => "Roof Cleaning",
            "text" => "<a href='".(Helpers::buildUrl(ROUTE_CLEANING))."' class='yellow-color-link'>We specialise in all aspects of roof cleaning</a>",
            ),
        1 => array(
            "path"  => "/img/slider/2.jpg",
            "label" => "Tiling",
            "text" => "We carry out all aspects of Tilling",
            ),
        2 => array(
            "path"  => "/img/slider/3.jpg",
            "label" => "Felt Flat Roofs",
            "text" => "We carry out all aspects of Felt Flat Roofs",
            ),
        3 => array(
            "path"  => "/img/slider/4.jpg",
            "label" => "Roof Renewals",
            "text" => "We carry out all aspects of Roof renewal",
            ),
        4 => array(
            "path"  => "/img/slider/5.jpg",
            "label" => "Velux Windows",
            "text" => "We install Velux windows",
            ),
        5 => array(
            "path"  => "/img/slider/6.jpg",
            "label" => "Slates",
            "text" => "We can renew all types of slate roofs",
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
        "estimates" => array(
            "main" => array("img_path" => "/img/landing_page/estimates.jpg")
        ),
        "testimonials" => array(
            "first" => array("img_path" => "/img/landing_page/testimonials1.jpg"),
            "second" => array("img_path" => "/img/landing_page/testimonials2.jpg")
        ),
    ),
    "testimonials" => array(
        array(
            "client"        => "Mr Turner",
            "text"  => "I have used C &amp; D roofing and property maintenance for all my roofing and maintenance needs, 
                over the past few years. They have repaired my roof, renewed my guttering and fascias, and even painting and decorating 
                within my home. They provide an excellent service and are a pleasure to deal with, why go anywhere else.."
        ),
        array(
            "client"        => "Ralph Gilbert",
            "text"  => "I have been using C &amp; D roofing for many years, and find that I do not need to compare quotes with 
                other companies as there prices are very competitive.I have used there service for both my home and my business 
                premises. I am very confident in there workmanship..<br/><br/>
                They are punctual, reliable, and polite they always leave the job clean and tidy at the end of each working day. 
                So if you are looking for a reliable honest Roofing and maintenance team with excellent abilities, then C &amp; D Roofing 
                and Property maintenance will not let you down."
        ),
        array(
            "client"        => "Mr Healy (Brighton)",
            "text"  => "This company gave us a quick and arrived on time. I would recommend them to anyone and in fact I already have."
        ),
        array(
            "client"        => "M Marshall (Worthing)",
            "text"  => "C and D roofing responded almost immediately to our job request and arrived to estimate the job promptly, everything 
                was arranged efficiently and the work was done when promised. We where kept informed of exactly what was going on and how the 
                job was progressing. Excellent service. Thank you."
        ),
        array(
            "client"        => "John (Portslade)",
            "text"  => "Excellent Service Job priced well and quality work carried out."
        ),
        array(
            "client"        => "J Sudbury (Brighton)",
            "text"  => "We would like to take this opportunity to thank you for the work which was of a high standard and compliment 
                you professionalism. Would not hesitate to recommend to others."
        ),
        array(
            "client"        => "G Morrissey (Brighton)",
            "text"  => "We are really pleased with the service provided by C and D roofing. The guys where really helpful explaining 
                in great detail what work was needed and how our roof would be renewed. Their team worked very hard and were very polite."
        ),
        
    ),
);

// Include header
include_once(TEMPLATES_ROOT . "header.php");