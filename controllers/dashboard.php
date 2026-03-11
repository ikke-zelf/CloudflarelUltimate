<?php

if (!defined("WHMCS")) {
    die("Access denied");
}

require_once __DIR__ . '/../lib/analytics.php';

$stats = get_cf_analytics($zoneid, $token);

$requests = $stats['result']['totals']['requests']['all'] ?? 0;
$bandwidth = $stats['result']['totals']['bandwidth']['all'] ?? 0;

$smarty->assign("requests", $requests);
$smarty->assign("bandwidth", $bandwidth);
