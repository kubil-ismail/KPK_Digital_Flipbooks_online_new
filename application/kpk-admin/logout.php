<?php
    require "../config/connection.php";
    if(!isset($_SESSION['login'])) {

        header("Location: ./login");
        exit;

    }

    session_destroy();
    header("Location: ./login");
    exit;
