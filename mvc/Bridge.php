<?php
$arr_name_project = explode('/', trim($_SERVER['REQUEST_URI'], '/'));
$project_name = $arr_name_project[0] ?? '';

define('_NAME_PROJECT', '/' . $project_name);

// HOSTING
// define('_WEB_ROOT', 'https://' . $_SERVER['HTTP_HOST']);

// localhost
define('_WEB_ROOT', 'http://' . $_SERVER['HTTP_HOST'] . _NAME_PROJECT);

define('_PATH_PUBLIC', _WEB_ROOT . '/public');
define('_PATH_CLIENT_IMG', _WEB_ROOT . '/public/client/assets/imgs/');
define('_PATH_VIEW', __DIR__ . '/views');
define('_PATH_UPLOAD', $_SERVER['DOCUMENT_ROOT'] . _NAME_PROJECT . '/upload');
define('_PATH_AVATAR', _WEB_ROOT . '/upload/avt/');
define('_PATH_PRODUCT', _WEB_ROOT . '/upload/product/');


// require_once "./mvc/util/sendMail.php";

// Process URL from browser
require_once "./mvc/core/App.php";

// How controllers call Views & Models
require_once "./mvc/core/Controller.php";




// Connect Database
require_once "./mvc/core/DB.php";

// helper
require_once './mvc/helper/showArray.php';
require_once './mvc/helper/numberFormat.php';
require_once './mvc/helper/redirectTo.php';
// require_once './mvc/helper/getName.php';
// require_once './mvc/helper/getStatusBill.php';
// require_once './mvc/helper/getPaging.php';
// require_once './mvc/helper/getMethodPayment.php';
// require_once './mvc/helper/getRatingStar.php';
// require_once './mvc/helper/avatarHeader.php';
// require_once './mvc/helper/getSampleComment.php';
