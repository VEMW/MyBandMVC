<?php

function homepage_action() {

    global $smarty;
    $articles = get_articles();
    $smarty->assign('articles',$articles);
    $smarty->display('header.tpl');
    $smarty->display('home.tpl');
    $smarty->display('footer.tpl');
}

function page_not_found_action() {
    global $smarty;
    $smarty->display('notfound.tpl');
}

function contact_action() {
    global $smarty;
    $smarty->display('header.tpl');
    $smarty->display('contact.tpl');
    $smarty->display('footer.tpl');
}

function news_action() {
    global $smarty;
    global $pageno;
    global $searchterm;
    //model
    $articles = get_some_articles();
    $number_of_pages = get_number_of_pages();
    $smarty->assign('current_page',$pageno);
    $smarty->assign('number_of_pages',$number_of_pages);
    $smarty->assign('articles',$articles);
    //views
    $smarty->display('header.tpl');
    $smarty->display('news.tpl');
    $smarty->display('footer.tpl');
}

function show_loginform() {
    global $smarty;
    $smarty->display('loginform.tpl');
}

function verify_login_action() {
    verify_login();
}

function cms_action(){
    global $smarty;
    $smarty->display('inlogformulier.tpl');
}

function logout_action() {
    setcookie('username', '', time() - 3600);
    $_SESSION = array();
    header("Location: index.php");
}

function beheer_action() {
    
}




