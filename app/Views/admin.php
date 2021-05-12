<?php

define('FILEPATH', APPPATH.'/Views');
    echo view('parts/header'); 
    
    if ($page != "login" && $page != "register" && $page != "forgetPassword") {
        echo view('parts/sidebar'); 
    }
    
    require_once FILEPATH."/admin/".$page.".php";
    
    echo view('parts/footer');