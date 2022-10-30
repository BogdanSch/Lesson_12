<?php

// header("HTTP/1.0 404 Not Found");
// header("Location: http://www.example.com/");
// header("HTTP/1.1 301 Moved Pemanently");
// header("Content-Type: text/html; charset=utf-8");

ob_start();
echo "<h1>!!!</h1>";
header("X-my-header: Hello world !");
header( "Content-Type: text/html; charset=utf-8" );
ob_end_flush();
?>