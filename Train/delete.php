<?php
session_start();
include_once "connection.php";
include_once "function.php";

if (!isset($_SESSION["username"])) {
    header("location: login.php");
}

//
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    if (confirmDel($id)) {
        delete($id);
        header("location: index.php");
    }
}