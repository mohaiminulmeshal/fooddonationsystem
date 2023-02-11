<?php

$request = $_SERVER['REQUEST_URI'];

switch ($request) {
    case '/' :
        require __DIR__ . '/controller/index.php';
        break;
    case '/category':
        require __DIR__ . '/controller/category.php';
        break;
    case '/deliverystat':
        require __DIR__ . '/controller/deliverystat.php';
        break;
    case '/donor_dash':
        require __DIR__ . '/controller/donor_dash.php';
        break;
    case '/donor_donations':
        require __DIR__ . '/controller/donor_donations.php';
        break;
    case '/donor_login':
        require __DIR__ . '/controller/donor_login.php';
        break;
    case '/donor_profile':
        require __DIR__ . '/controller/donor_profile.php';
        break;
    case '/logout':
        require __DIR__ . '/controller/logout.php';
        break;
    case '/makedonation':
        require __DIR__ . '/controller/makedonation.php';
        break;
    case '/managedonat':
        require __DIR__ . '/controller/managedonat.php';
        break;
    case '/ngo_dash':
        require __DIR__ . '/controller/ngo_dash.php';
        break;
    case '/ngo_login':
        require __DIR__ . '/controller/ngo_login.php';
        break;
    case '/ngo_profile':
        require __DIR__ . '/controller/ngo_profile.php';
        break;
    case '/ngo_register':
        require __DIR__ . '/controller/ngo_register.php';
        break;
    case '/ordernoti':
        require __DIR__ . '/controller/ordernoti.php';
        break;
    case '/register':
        require __DIR__ . '/controller/register.php';
        break;
    case '/search_html':
        require __DIR__ . '/controller/search_html.php';
        break;
    case '/search':
        require __DIR__ . '/controller/search.php';
        break;
    case '/showstats':
        require __DIR__ . '/controller/showstats.php';
        break;
    case '/update':
        require __DIR__ . '/controller/update.php';
        break;
    case '/updateprofile':
        require __DIR__ . '/controller/updateprofile.php';
        break;
    case '/vol_dash':
        require __DIR__ . '/controller/vol_dash.php';
        break;
    case '/vol_profile':
        require __DIR__ . '/controller/vol_profile.php';
        break;
    case '/vol_register':
        require __DIR__ . '/controller/vol_register.php';
        break;
    case '/volunteer_list':
        require __DIR__ . '/controller/volunteer_list.php';
        break;
    case '/volunteer_login':
        require __DIR__ . '/controller/volunteer_login.php';
        break;                     
    default:
        http_response_code(404);
        require __DIR__ . '/controller/404.php';
        break;
}

