<?php

if (!defined("WHMCS")) {
    die("Access denied");
}

function cloudflareultimate_config()
{
    return [
        "name" => "Cloudflare Ultimate v2",
        "description" => "Cloudflare automation + DNS manager",
        "version" => "2.0",
        "author" => "Ikkezelf",

        "fields" => [

            "apitoken" => [
                "FriendlyName" => "Cloudflare API Token",
                "Type" => "text",
                "Size" => "80"
            ],

            "accountid" => [
                "FriendlyName" => "Account ID",
                "Type" => "text",
                "Size" => "40"
            ]

        ]
    ];
}
