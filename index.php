<?php

error_reporting(E_ALL);
ini_set('display_errors', 'on');

$host = 'localhost';
$user = 'root';
$password = 'root';
$db_name = 'blog';

$link = mysqli_connect($host, $user, $password, $db_name);
mysqli_query($link, "SET NAMES 'unt8'");



$query = "SELECT * FROM articles WHERE id>0 ORDER BY id DESC";
$result = mysqli_query($link, $query) or die(mysqli_error($link));

for($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);




if(isset($_GET['page'])) {
    $page = $_GET['page'];
} else {
    $page = '';
}

$query = "SELECT * FROM articles WHERE url='$page'";
$result = mysqli_query($link, $query) or die(mysqli_error($link));
$page = mysqli_fetch_assoc($result);


if($page) {
    $title = $page['title'];
    $url = $page['url'];
    $content = $page['text'];
} else if ($_SERVER['REQUEST_URI'] == '/') {
    $title = 'Главная';
} else {
    $PageNotFound = 'elems/404.php';
    $title = 'Page not found';
    $content = file_get_contents($PageNotFound);
}



if (file_exists('loyaut.php')) {
    include 'loyaut.php';
}