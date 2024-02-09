<?php

namespace nohnaimer\sentry\assets;

use yii\web\View;
use yii\web\AssetBundle;

/**
 * Class SentryAsset
 * @package nohnaimer\sentry\assets
 */
class TracingAsset extends AssetBundle
{
    public $baseUrl = 'https://browser.sentry-cdn.com/7.81.1';

    public $js = [
        'bundle.tracing.min.js',
    ];

    public $jsOptions = [
        'position' => View::POS_HEAD,
        'crossorigin' => 'anonymous',
    ];

    public $depends = [
        BrowserAsset::class,
    ];
}