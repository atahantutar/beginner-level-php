<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?= cssURL('main') ?>">
</head>

<body>
    <p><?php if (isset($successMessage)) : ?> <?= $successMessage ?> <?php endif; ?></p>
    <h1>Ürünler</h1>
    <a href="<?= adminURL('logout'); ?>">çıkış yap</a>
    <a href="<?= adminURL('add_product'); ?>">Yeni Ürün Ekle</a>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>İsim</th>
                <th>Fiyat</th>
                <th>Stok</th>
                <th>İşlemler</th>
            </tr>

        </thead>
        <tbody>
            <?php foreach ($products as $product) : ?>
                <tr>
                    <td><?= $product['ID'] ?></td>
                    <td><?= $product['Name'] ?></td>
                    <td><?= $product['Price'] ?></td>
                    <td><?= $product['Stock'] ?></td>
                    <td><a href="<?= adminURL('edit_product/' . $product['ID']) ?>">Düzenle</a><a href="<?= adminURL('delete_product/' . $product['ID']) ?>">Sil</a></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>

</html>