<?php 
    $query = $db->prepare("DELETE FROM products WHERE id = :id");
    $delete = $query->execute(array(
       'id' => getDataID()
    ));
    $id = getDataID();
    $product = $db->query("SELECT * FROM products WHERE id = '{$id}'")->fetch(PDO::FETCH_ASSOC);
    if(!isset($product['name'])){
        header('Location: '.adminURL('products?success=delete_product'));
    }
    