<?php

define('FILEPATH', APPPATH.'/Views');

    $uri = service('uri');
    
    if(session()->get('id') != false && $uri->getSegment('1') != 'login'){
        echo view('parts/header'); 
    }

    if ($page != "login" && $page != "register" && $page != "forgetPassword") {
        echo view('parts/usidebar'); 
    }
    
    require_once FILEPATH."/users/".$page.".php";
    
    echo view('parts/footer');