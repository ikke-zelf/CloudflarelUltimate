add_hook('AfterModuleCreate',1,function($params){

$domain=$params['domain'];
$ip=$params['serverip'];

$settings=Capsule::table('tbladdonmodules')
->where('module','cloudflareultimate')
->pluck('value','setting');

$token=$settings['apitoken'];
$account=$settings['accountid'];

$zone=cf_api(
"zones",
"POST",
[
"name"=>$domain,
"account"=>["id"=>$account],
"jump_start"=>true
],
$token
);

$zoneid=$zone['result']['id'];

create_dns($zoneid,$domain,$ip,$token);

setup_ssl($zoneid,$token);

setup_cache($zoneid,$token);

setup_firewall($zoneid,$token);

});
