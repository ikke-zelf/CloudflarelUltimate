function setup_ssl($zone,$token){

cf_api(

"zones/$zone/settings/ssl",

"PATCH",

[
"value"=>"full"
],

$token

);

}
