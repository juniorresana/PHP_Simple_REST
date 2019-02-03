<?php
/**
 * Created by PhpStorm.
 * User: )0(
 * Date: 02.02.2019
 * Time: 22:48
 */

include 'upload.php';

$method = $_SERVER['REQUEST_METHOD'];

//определение метода
function getMethod($method){
    if ($method=='GET') return $_GET;
    if ($method=='POST') return $_POST;
}


$url = (isset($_GET['q'])) ? $_GET['q'] : '';
$url = rtrim($url, '/');
$urls = explode('/', $url);

$rout = new Router($urls);
$rout->toJson(getMethod($method), $url, null);

