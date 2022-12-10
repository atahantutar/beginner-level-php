<?php
if ($_POST) {
    $errors = [];
    $username = post('username');
    $password = post('password');
    $user = $db->query("SELECT * FROM USERS WHERE Username = '{$username}' AND Password = '{$password}' ")->fetch(PDO::FETCH_ASSOC);
    if (isset($user['id'])) {
        $_SESSION['admin_id'] = $user['id'];

        header("Location:" . adminURL('products'));
    } else {
        array_push($errors, "kullanıcı adı veya şifre hatalı");
    }
}
include viewAdminPath('login');
