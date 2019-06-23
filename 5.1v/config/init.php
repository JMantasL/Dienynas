<?php

require_once 'config.php';
session_start();

if (strpos($_SERVER['REQUEST_URI'], "Admin") && $_SESSION['role'] != 'Administratorius'){
    header("Location: ../Prisijungimas/Naujienos?noAccess");
}

function __autoload($class_name){
    require_once '../lib/'.$class_name.'.php';
}