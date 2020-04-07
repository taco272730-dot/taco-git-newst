<?php
    session_start(); // 啟動 session 功能
    unset($_SESSION['loginUser']);
    header('Location: 20200406-login.php');