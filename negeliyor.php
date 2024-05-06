<?php
// HTTP istek bilgileri
$request_method = $_SERVER['REQUEST_METHOD'];
$request_uri = $_SERVER['REQUEST_URI'];
$http_user_agent = $_SERVER['HTTP_USER_AGENT'];
$remote_addr = $_SERVER['REMOTE_ADDR'];

// Sunucu bilgileri
$server_name = $_SERVER['SERVER_NAME'];
$server_addr = $_SERVER['SERVER_ADDR'];
$server_software = $_SERVER['SERVER_SOFTWARE'];
$server_port = $_SERVER['SERVER_PORT'];

// Diğer bilgiler
$query_string = $_SERVER['QUERY_STRING'];
$http_referer = $_SERVER['HTTP_REFERER'];
$http_accept_language = $_SERVER['HTTP_ACCEPT_LANGUAGE'];

// Tüm bilgileri ekrana yazdıralım
echo "HTTP İstek Bilgileri:<br>";
echo "REQUEST_METHOD: " . $request_method . "<br>";
echo "REQUEST_URI: " . $request_uri . "<br>";
echo "HTTP_USER_AGENT: " . $http_user_agent . "<br>";
echo "REMOTE_ADDR: " . $remote_addr . "<br><br>";

echo "Sunucu Bilgileri:<br>";
echo "SERVER_NAME: " . $server_name . "<br>";
echo "SERVER_ADDR: " . $server_addr . "<br>";
echo "SERVER_SOFTWARE: " . $server_software . "<br>";
echo "SERVER_PORT: " . $server_port . "<br><br>";

echo "Diğerleri:<br>";
echo "QUERY_STRING: " . $query_string . "<br>";
echo "HTTP_REFERER: " . $http_referer . "<br>";
echo "HTTP_ACCEPT_LANGUAGE: " . $http_accept_language . "<br>";
?>
