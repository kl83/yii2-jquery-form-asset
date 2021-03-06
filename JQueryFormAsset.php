<?php
namespace kl83\assets;

class JQueryFormAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@bower/jquery-form';
    public $depends = [
        'yii\web\JqueryAsset',
    ];
    public function init()
    {
        if ( YII_DEBUG ) {
            $this->js = [ 'src/jquery.form.js' ];
        } else {
            $this->js = [ 'dist/jquery.form.min.js' ];
        }
    }
}
