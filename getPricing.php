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
foreach (['universal', 'professional'] as $stack) {
    $region = 'eu2';
    $src    = "{$srcHost}/pricing?region={$region}&stack={$stack}";
    $target = "templates/pricing_{$stack}.html";

    if ($htmlBody = file_get_contents($src)) {
        if (file_put_contents($target, $htmlBody)) {
            echo "Pricing {$stack} (src: {$src}) ✅ \n";
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
