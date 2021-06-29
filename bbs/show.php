<?php 
    require_once 'User.php';
    $id = $_GET['id'];
    $User::find($id);
    include_once 'show_view.php';