<?php

namespace backend\assets;

use yii\web\AssetBundle;
use yii\web\JqueryAsset;

class TagsInputAsset extends AssetBundle
{
    public $basePath = '@webroot/plugins/tagsinput';
    public $baseUrl = '@web/plugins/tagsinput';
    
    public $css = [
        'tagsinput.css'
    ];
    
    public $js = [
        'tagsinput.js'
    ];

    public $depends = [
        JqueryAsset::class
    ];

}