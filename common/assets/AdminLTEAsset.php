<?php

namespace common\assets;

use yii\web\AssetBundle;

/**
 * AdminLTE common application asset bundle.
 */
class AdminLTEAsset extends AssetBundle
{
    public $sourcePath = '@adminLTE';
    public $css = [
        'plugins/fontawesome-free/css/all.min.css',
        'plugins/fullcalendar/main.css',
        'dist/css/adminlte.min.css'
    ];
    public $js = [
        'plugins/jquery/jquery.min.js',
        'plugins/bootstrap/js/bootstrap.bundle.min.js',
        'plugins/jquery-ui/jquery-ui.min.js',
        'dist/js/adminlte.min.js',
        'plugins/moment/moment.min.js',
        'plugins/fullcalendar/main.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
    ];
}