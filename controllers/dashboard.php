$stats=get_cf_analytics($zoneid,$token);

$smarty->assign("requests",$stats['result']['totals']['requests']['all']);
$smarty->assign("bandwidth",$stats['result']['totals']['bandwidth']['all']);
