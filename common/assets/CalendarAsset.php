<?php

namespace common\assets;

use yii\web\AssetBundle;

/**
 * AdminLTE common application asset bundle.
 */
class CalendarAsset extends AssetBundle
{
    public $sourcePath = '@common';
    public $css = [
    ];
    public $js = [
        'web/js/calendar.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
    ];
}