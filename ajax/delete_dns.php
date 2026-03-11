<?php
if(!defined("WHMCS")) die("Access denied");
require_once __DIR__.'/../api.php';

$zone = $_POST['zone'] ?? '';
$record = $_POST['record'] ?? '';
$token = $_POST['token'] ?? '';

cf_api("zones/$zone/dns_records/$record","DELETE",[], $token);

echo json_encode(["success"=>true]);
