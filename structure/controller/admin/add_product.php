<?php 
    $errors = [];
    if($_POST){
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
            $query = $db->prepare("INSERT INTO products SET
            Name = ?,
            Price = ?,
            Stock = ?");
            $insert = $query->execute(array(
                post('name'),post('price'),post('stock')
            ));
            if ( $insert ){
                header('Location: '.adminURL('products?success=new_product'));
            }
        }
    }
    include viewAdminPath('add_product');
