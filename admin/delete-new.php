<?php
session_start();
$login = 'admin';
$password = '12345';

if ($_SESSION['login'] !== $login && $_SESSION['password'] !==$password){
    header('location: ../login/index.php');
}
include_once "../assets/conf.php";
include "../assets/function.php";
$id_news = $_GET['id_news'];
if (!is_numeric($id_news))
    header('location: ../404.php');

$new = delete_new($id_news);
header('location: index.php');
