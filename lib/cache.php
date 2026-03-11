<?php

function purge_cache($zone,$token){

cf_api(

"zones/$zone/purge_cache",

"POST",

[
"purge_everything"=>true
],

$token

);

}
