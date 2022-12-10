<?php


function controllerPath($filename){
    return realpath('').'/controller/'.$filename.'.php';
}

function adminControlPath($filename ){
    return realpath('').'/controller/admin/'.$filename.'.php';
}

    function getAdminURL(){
    $fullURI = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    $url = $_SERVER["REQUEST_URI"];
    $explodeURL = explode('/',$url);
    $includeURL = $explodeURL[3];
    $includeURL = explode('?',$includeURL);
    $includeURLFILE = $includeURL[0];
    return $includeURLFILE;
    }
    function viewPath($filename){
        return realpath('').'/views/'.$filename.'.php';
    }
    
    function viewAdminPath($filename){
        return realpath('').'/views/admin/'.$filename.'.php';
    }
    
    function cssURL($filename){
        global $projectURL;
        return $projectURL."public/assets/css/".$filename.".css";
    }
    
    function adminURL($url){
        global $projectURL;
        return $projectURL.'admin/'.$url;
    }
    
    function post($name){
       return htmlspecialchars(trim($_POST[$name]));
    }
    
    function getDataID(){
        $fullURI = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
        $url = $_SERVER["REQUEST_URI"];
        $explodeURL = explode('/',$url);
        $includeURL = $explodeURL[4];
        $includeURL = explode('?',$includeURL);
        $includeURLFILE = $includeURL[0];
        return $includeURLFILE;
    }
   

?>