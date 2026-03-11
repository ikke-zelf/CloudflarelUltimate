<?php

if (!defined("WHMCS")) {
    die("Access denied");
}
$records = cf_api(

"zones/$zoneid/dns_records",

"GET",

[],

$token

);
