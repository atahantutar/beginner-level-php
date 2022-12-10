<?php
if($_GET){
if(isset($_GET['get_products'])){
    $products = $db->query("SELECT * FROM products", PDO::FETCH_ASSOC);
} 
}
include viewPath('index');
?>
