<?php 
    require_once 'models/User.php';
    $id = $_GET['id'];
    $User::find($id);
    include_once 'views/show_view.php';