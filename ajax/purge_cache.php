<?php
if(!defined("WHMCS")) die("Access denied");
require_once __DIR__.'/../lib/cache.php';

$zone = $_POST['zone'] ?? '';
$token = $_POST['token'] ?? '';

purge_cache($zone,$token);

echo json_encode(["success"=>true]);
