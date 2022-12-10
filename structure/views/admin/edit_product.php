<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <div class="form-group">
            <label for="">İsim</label>
            <input type="text" name="name" value="<?=$product['Name']?>">
        </div>
        <div class="form-group">
            <label for="">Fiyat</label>
            <input type="text" name="price" value="<?=$product['Price']?>">
        </div>
        <div class="form-group">
            <label for="">Stok</label>
            <input type="number" name="stock" value="<?=$product['Stock']?>">
        </div>
        <?php if(isset($errors) && count($errors) > 0):?>
            <ul>
                <?php foreach($errors as $error):?>
                    <li><?=$error?></li>
                <?php endforeach;?>
            </ul>
        <?php endif;?>
        <div class="form-group">
            <input type="submit" value="Güncelle">
        </div>
    </form>
</body>
</html>