<?php

namespace notamedia\sentry\assets;

use yii\web\View;
use yii\web\AssetBundle;

/**
 * Class SentryAsset
 * @package notamedia\sentry\assets
 */
class BrowserAsset extends AssetBundle
{
    public $baseUrl = 'https://browser.sentry-cdn.com/7.81.1';

    public $js = [
        'bundle.min.js',
    ];

    public $jsOptions = [
        'position' => View::POS_HEAD,
        'crossorigin' => 'anonymous',
    ];
}