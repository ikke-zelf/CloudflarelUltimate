<?php

if (!defined("WHMCS")) {
    die("Access denied");
}

function cf_api($endpoint,$method="GET",$data=[],$token="")
{

$ch=curl_init();

curl_setopt($ch,CURLOPT_URL,"https://api.cloudflare.com/client/v4/".$endpoint);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
curl_setopt($ch,CURLOPT_CUSTOMREQUEST,$method);

if(!empty($data)){
curl_setopt($ch,CURLOPT_POSTFIELDS,json_encode($data));
}

curl_setopt($ch,CURLOPT_HTTPHEADER,[

"Authorization: Bearer ".$token,
"Content-Type: application/json"

]);

$result=curl_exec($ch);

curl_close($ch);

return json_decode($result,true);

}
