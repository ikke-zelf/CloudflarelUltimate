<?php
if(!defined("WHMCS")) die("Access denied");
require_once __DIR__.'/../lib/dns.php';

$records = get_dns_records($zoneid,$token);
$smarty->assign("records",$records['result'] ?? []);
