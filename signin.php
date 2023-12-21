<?php

session_start();
require "vendor/autoload.php";  // Adjust the path accordingly

use myPHPnotes\Microsoft\Auth;

$tenant = "common";
$client_id = "6ac5fb09-ae4d-40db-9cc6-ffc80ae4ff4f";
$client_secret = "YAh8Q~XUDgFeyTQjAgf1CeWXWyykgbVn.6d0YaNs";
$callback = "https://cloud-tech.vercel.app/";
$scopes = [
    'User.Read'
];

$microsoft = new Auth($tenant, $client_id, $client_secret, $callback, $scopes);
header("Location: " . $microsoft->getAuthUrl());
exit();