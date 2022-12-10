<?php 
    unset($_SESSION['admin_id']);
    session_destroy();
    header("Location:".adminURL('login'));