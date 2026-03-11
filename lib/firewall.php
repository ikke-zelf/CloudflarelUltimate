<?php

if (!defined("WHMCS")) {
    die("Access denied");
}

function setup_firewall($zone,$token){

cf_api(

"zones/$zone/firewall/rules",

"POST",

[
"action"=>"block",

"filter"=>[
"expression"=>"(http.request.uri.path contains \"wp-login.php\")"
],

"description"=>"WordPress brute force protection"

],

$token

);

}
