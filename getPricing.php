<?php
/**
 * Created by PhpStorm.
 * User: os
 * Date: 27.11.15
 * Time: 10:04
 */

$srcHost = 'http://dashboard.fortrabbit.dev';

if (getenv('APP_NAME')) {
    $srcHost = 'https://dashboard.fortrabbit.com';
}

if (getenv('DASHBOARD_URL')) {
    $srcHost = getenv('DASHBOARD_URL');
}

// Presets + Components
foreach (['eu1', 'eu2'] as $region) {
    $src    = "{$srcHost}/pricing?region={$region}";
    $target = "templates/pricing_region_{$region}.html";

    if ($htmlBody = file_get_contents($src)) {
        if (file_put_contents($target, $htmlBody)) {
            echo "Pricing {$region} (src: {$src}) ✅ \n";
        }
    }
}

// Support
$src    = "{$srcHost}/pricing/support";
$target = "templates/pricing_support.html";

if ($htmlBody = file_get_contents($src)) {
    if (file_put_contents($target, $htmlBody)) {
        echo "Pricing Support (src: {$src}) ✅ \n";
    }
}
