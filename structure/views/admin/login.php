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
            <label for="">USERNAME</label>
            <input type="text" name="username">
        </div>
        <div class="form-group">
            <label for="">PASSWORD</label>
            <input type="password" name="password">
        </div>
        <?php if (isset($errors) && count($errors) > 0) : ?>
            <ul>
                <?php foreach ($errors as $error) : ?>
                    <li><?= $error ?></li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>
        <div class="form-group">

            <input type="submit" value="Login">
        </div>
    </form>

</body>

</html>