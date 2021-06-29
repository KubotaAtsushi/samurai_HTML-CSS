<?php
    // コントローラ(C)
    // 外部ファイルの読み込み
    require_once 'User.php';
    // セッション開始
    session_start();
    
    // セッションからメッセージを抜き出す
    $flash_message = $_SESSION['flash_message'];
    // セッションからメッセージを削除
    $_SESSION['flash_message'] = null;
    // HTMLファイル表示
    include_once 'index_view.php';
