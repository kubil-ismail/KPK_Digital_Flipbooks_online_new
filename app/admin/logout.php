<?php
    require "../../config/connection.php";
    if(!isset($_SESSION['login'])) {

        header("Location: ./login.php");
        exit;

    }

    session_destroy();
    header("Location: ./login.php");
    exit;
