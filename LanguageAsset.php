<?php 
namespace pceuropa\languageSelection;

class LanguageAsset extends \yii\web\AssetBundle{
    public $sourcePath = '@vendor/pceuropa/yii2-language-selection-widget/assets';
    public $baseUrl = '@web';
    public $depends = [
        'yii\bootstrap\BootstrapAsset',
    ];
}
