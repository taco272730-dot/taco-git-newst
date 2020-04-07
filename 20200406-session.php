<?php

if(! isset($_SESSION)){
    session_start();//啟動SESSION功能
}

if(isset($SESSION['myvar'])){
    $_SESSION['myvar']++;
}else{
    $_SESSION['myvar'] = 1;
}