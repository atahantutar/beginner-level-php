<?php 
$id = getDataID();
if($_POST){
    $errors = [];
    if(strval(intval(post('price'))) != post('price')){
        array_push($errors,"Fiyat sadece sayı olabilir");
    }
    if(strval(intval(post('stock'))) != post('stock')){
        array_push($errors,"Stok sadece sayı olabilir");
    }
    if(strlen(post("name")) <= 0){
        array_push($errors,"İsim boş bırakılamaz");
    }
    if(strlen(post('price')) <= 0){
        array_push($errors,"Fiyat boş bırakılamaz");
    }

    if(strlen(post('stock')) <= 0){
        array_push($errors,"Stok boş bırakılamaz");
    }

    if(count($errors) == 0){
        $query = $db->prepare("UPDATE products SET
        Name = ?,
        Price = ?,
        Stock = ? WHERE id = ?");
        $insert = $query->execute(array(
            post('name'),post('price'),post('stock'),getDataID()
        ));
        if ( $insert ){
            header('Location: '.adminURL('products?success=edit_product'));
        }
    }
}
$product = $db->query("SELECT * FROM products WHERE id = '{$id}'")->fetch(PDO::FETCH_ASSOC);
include viewAdminPath('edit_product');