<?php

function get_cf_analytics($zone,$token){

return cf_api(

"zones/$zone/analytics/dashboard",

"GET",

[],

$token

);

}
