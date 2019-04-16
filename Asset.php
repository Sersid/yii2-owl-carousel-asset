<?php
namespace sersid\owlcarousel;

use yii\web\AssetBundle;

class Asset extends AssetBundle
{
    public $sourcePath = '@bower/owl.carousel/dist';

    public $css = [
        'assets/owl.carousel.css',
        'assets/owl.theme.css',
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
