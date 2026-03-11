<?php
if(!defined("WHMCS")) die("Access denied");
require_once __DIR__.'/../api.php';
require_once __DIR__.'/../lib/dns.php';

$zone = $_POST['zone'] ?? '';
$type = $_POST['type'] ?? '';
$name = $_POST['name'] ?? '';
$content = $_POST['content'] ?? '';
$token = $_POST['token'] ?? '';

cf_api("zones/$zone/dns_records","POST",[
    "type"=>$type,
    "name"=>$name,
    "content"=>$content,
    "ttl"=>1,
    "proxied"=>true
], $token);

echo json_encode(["success"=>true]);
