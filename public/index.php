<?php

session_start();

require ('../private/smarty/Smarty.class.php');
require ('../private/model.php');
require ('../private/controller.php');

$smarty = new Smarty();
$smarty->setCompileDir('../private/tmp');
$smarty->setTemplateDir('../private/views');

define('ARTICLES_PER_PAGE',3);

// TERNARY OPERATOR
$page = isset($_GET['page']) ? $_GET['page'] : 'home';
$pageno = isset($_GET['pageno']) ? $_GET['pageno'] : '1';
$searchterm = isset($_GET['searchterm']) ? '%' . $_GET['searchterm'] . '%' : '%';

if (isset($_POST['submit_login'])) {
    verify_login_action();
}

if (isset($_COOKIE['username']) OR isset($_SESSION['username'])) {
    $page = isset($_GET['page']) ? $_GET['page'] : '';
    switch ($page) {
        case 'logout' : logout_action(); break;
        default: cms_action(); break;
    }
    exit();
}



switch ($page) {
    case 'home': homepage_action(); break;
    case 'admin' : show_loginform(); break;
    case 'news': news_action(); break;
    case 'contact': contact_action(); break;
    default: page_not_found_action(); break;

}