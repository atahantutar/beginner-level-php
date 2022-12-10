<?php 
    if($_GET){
        if($_GET['success'] && $_GET['success'] == "new_product"){
            $successMessage = "Başarıyla ürün eklediniz";
        }else if($_GET['success'] && $_GET['success'] == "edit_product"){
            $successMessage = "Başarıyla ürünü güncellediniz";
        }else if($_GET['success'] && $_GET['success'] == "delete_product"){
            $successMessage = "Başarıyla ürünü sildiniz";
        }
    }
    $products =  $db->query("SELECT * FROM products", PDO::FETCH_ASSOC);
    include viewAdminPath('products');