<?php 
$fullURI="https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$url=$_SERVER["REQUEST_URI"];

$explodeURL=explode('/',$url);
$includeURl=$explodeURL[2];
$includeURl=explode('?',$includeURl);
$includeURLFILE=$includeURl[0];




if($includeURLFILE == ""){
    include  controllerPath('index');
}
elseif($includeURLFILE=="hakkımızda"){
include controllerPath('aboutus');

}
$adminURL=getAdminURL();
if($includeURLFILE == "admin" && isset($_SESSION['admin_id'])){
    if($adminURL == "products"){
        include adminControlPath('products');
    }
    if($adminURL == "add_product"){
        include adminControlPath('add_product');
    }
    if($adminURL == "edit_product"){
        include adminControlPath('edit_product');
    }
    if($adminURL == "delete_product"){
        include adminControlPath('delete_product');
    }
    if($adminURL == "login"){
        include adminControlPath('login');
    }
    if($adminURL == "logout"){
        include adminControlPath('logout');
    }
}
else{
        
    if($adminURL == "login"){
        include adminControlPath('login');
    }else{
        header("Location:".adminURL('login'));
    }
}









// if($includeURLFile == "admin"){
//     if(getadminurl()=="products")
// {



?>