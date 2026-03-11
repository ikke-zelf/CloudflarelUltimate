<?php

if (!defined("WHMCS")) {
    die("Access denied");
}

function setup_cache($zone,$token){
    cf_api("zones/$zone/settings/cache_level","PATCH",["value"=>"standard"], $token);
    cf_api("zones/$zone/settings/brotli","PATCH",["value"=>"on"], $token);
}

function purge_cache($zone,$token){
    cf_api("zones/$zone/purge_cache","POST",["purge_everything"=>true], $token);
}
