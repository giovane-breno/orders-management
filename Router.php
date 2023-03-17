<?php
// router.php

$request = $_SERVER['REQUEST_URI'];

switch ($request) {
    case '/':
        require __DIR__ . '/App/Resources/Home.php';
        break;
    default:
        require __DIR__ . '/App/Resources/Errors/404.php';
        http_response_code(404);
        break;
}