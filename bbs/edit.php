<?php 
    require_once 'User.php';
    session_start();
    $id = $_GET['id'];
    $User::find($id);
    $errors = $_SESSION['errors'];
    $_SESSION['errors'] = null;
    include_once 'edit_view.php';