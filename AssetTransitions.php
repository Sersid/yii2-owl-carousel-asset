<?php
namespace elgorm\owlcarousel;

use yii\web\AssetBundle;

class AssetTransition extends AssetBundle
{
    public $sourcePath = '@bower/owlcarousel/owl-carousel';

    public $css = [
        'owl.carousel.css',
        'owl.theme.css',
        'owl.transitions.css',
    ];

    public $depends = [
        'yii\web\JqueryAsset',
    ];

    public function registerAssetFiles($view)
    {
        $this->js[] = 'owl.carousel' . (!YII_DEBUG ? '.min' : '') . '.js';
        parent::registerAssetFiles($view);
    }
}