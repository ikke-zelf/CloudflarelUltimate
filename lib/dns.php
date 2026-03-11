<?php

if (!defined("WHMCS")) {
    die("Access denied");
}

function create_dns($zone,$domain,$ip,$token){

cf_api(

"zones/$zone/dns_records",
"POST",
[
"type"=>"A",
"name"=>$domain,
"content"=>$ip,
"ttl"=>1,
"proxied"=>true
],
$token
);

cf_api(

"zones/$zone/dns_records",
"POST",
[
"type"=>"CNAME",
"name"=>"www",
"content"=>$domain,
"ttl"=>1,
"proxied"=>true
],
$token
);

}

function get_dns_records($zone,$token){

return cf_api(

"zones/$zone/dns_records",
"GET",
[],
$token

);

}
