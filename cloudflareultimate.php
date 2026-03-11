<?php

if (!defined("WHMCS")) {
    die("Access denied");
}

function cloudflareultimate_config()
{
    return [

        "name" => "Cloudflare Ultimate",
        "description" => "Cloudflare automation and DNS manager",
        "version" => "1.0",
        "author" => "Custom",

        "fields" => [

            "apitoken" => [
                "FriendlyName" => "Cloudflare API Token",
                "Type" => "text",
                "Size" => "80"
            ],

            "accountid" => [
                "FriendlyName" => "Cloudflare Account ID",
                "Type" => "text",
                "Size" => "40"
            ]

        ]

    ];
}
