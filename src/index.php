<?php
include './index.html';
$config = parse_ini_file('rg2.ini');
var_dump($config);
/*
// only needed if using codeception for testing
// error_reporting(E_ALL);
// define('C3_CODECOVERAGE_ERROR_LOG_FILE', '/tests/_output/c3_error.log');
// include 'c3.php';
// define('MY_APP_STARTED', true);

require(dirname(__FILE__) . '/app/user.php');
require(dirname(__FILE__) . '/app/utils.php');

// version replaced by Gruntfile as part of release
define('RG2VERSION', '1.4.8');

if (file_exists(dirname(__FILE__) . '/rg2-config.php')) {
    require_once(dirname(__FILE__) . '/rg2-config.php');
} else {
    echo "Routegadget 2: Configuration file " . dirname(__FILE__) . "/rg2-config.php not found.";
    return;
}

// override allows testing of a local configuration such as c:/xampp/htdocs/rg2
if (file_exists(dirname(__FILE__) . '/rg2-override-config.php')) {
    $override = true;
    require_once(dirname(__FILE__) . '/rg2-override-config.php');
} else {
    $override = false;
}

if (defined('OVERRIDE_UI_THEME')) {
    $ui_theme = OVERRIDE_UI_THEME;
} else {
    $ui_theme = UI_THEME;
}

if (defined('HEADER_COLOUR')) {
    $header_colour = HEADER_COLOUR;
} else {
    $header_colour = '#002bd9';
}
if (defined('HEADER_TEXT_COLOUR')) {
    $header_text_colour = HEADER_TEXT_COLOUR;
} else {
    $header_text_colour = '#ffffff';
}

if (defined('OVERRIDE_BASE_DIRECTORY')) {
    $json_url = OVERRIDE_BASE_DIRECTORY . "/rg2/rg2api.php";
    if (defined('OVERRIDE_SOURCE_DIRECTORY')) {
        $source_url = OVERRIDE_SOURCE_DIRECTORY . "/rg2";
    } else {
        $source_url = OVERRIDE_BASE_DIRECTORY . "/rg2";
    }
} else {
    $json_url = RG_BASE_DIRECTORY . "/rg2/rg2api.php";
    if (defined('OVERRIDE_SOURCE_DIRECTORY')) {
        $source_url = OVERRIDE_SOURCE_DIRECTORY . "/rg2";
    } else {
        $source_url = RG_BASE_DIRECTORY . "/rg2";
    }
}

if (defined('OVERRIDE_KARTAT_DIRECTORY')) {
    $maps_url = OVERRIDE_KARTAT_DIRECTORY;
} else {
    $maps_url = RG_BASE_DIRECTORY . "/kartat/";
}
define('KARTAT_DIRECTORY', $maps_url);

// include manager function as parameter for now until we decide the best way forward
if (isset($_GET['manage'])) {
    $manager = true;
    $keksi = user::generateNewKeksi();
} else {
    $manager=  false;
}

// include debug function as parameter for now until we decide the best way forward
if (isset($_GET['debug']) || $override) {
    $debug = true;
} else {
    $debug = false;
}

// include language file if requested
if (isset($_GET['lang'])) {
    $lang = $_GET['lang'];
} else {
    if ((defined('START_LANGUAGE'))) {
        $lang = START_LANGUAGE;
    } else {
        $lang = "en";
    }
}

header('Content-type: text/html; charset=utf-8');
*/