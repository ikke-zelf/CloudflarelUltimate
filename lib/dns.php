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
