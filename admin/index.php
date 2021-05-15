<?php

error_reporting(E_ALL);
ini_set('display_errors', 'on');

$host = 'localhost';
$user = 'root';
$password = 'root';
$db_name = 'blog';

$link = mysqli_connect($host, $user, $password, $db_name);
mysqli_query($link, "SET NAMES 'unt8'");



$query = "SELECT * FROM articles ";
$result = mysqli_query($link, $query) or die(mysqli_error($link));

for($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);



$content = '<table class="table">
<tr>
<th class="table-cell">title</th>
<th class="table-cell">url</th>
<th class="table-cell">text</th>
<th class="table-cell">edit</th>
<th class="table-cell">delete</th>
</tr>';
foreach($data as $page){
    $content .= "<tr>
    <td class=\"table-cell\">{$page['title']}</td>
    <td class=\"table-cell\">{$page['url']}</td>
    <td class=\"table-cell table-text\">{$page['text']}</td>
    <td class=\"table-cell\"><a href=\"\">edit</a></td>
    <td class=\"table-cell\"><a href=\"\">delete</a></td>
    </tr>";
}

$content .= '</table>';



$title = 'Admin main page';



if (file_exists('loyaut.php')) {
    include 'loyaut.php';
}