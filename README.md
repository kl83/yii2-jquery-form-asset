# Yii2 jQuery Form Plugin asset
[![Latest Stable Version](https://poser.pugx.org/kl83/yii2-jquery-form-asset/v/stable)](https://packagist.org/packages/kl83/yii2-jquery-form-asset)
[![Total Downloads](https://poser.pugx.org/kl83/yii2-jquery-form-asset/downloads)](https://packagist.org/packages/kl83/yii2-jquery-form-asset)
[![License](https://poser.pugx.org/kl83/yii2-jquery-form-asset/license)](https://packagist.org/packages/kl83/yii2-jquery-form-asset)

The jQuery Form Plugin allows you to easily and unobtrusively upgrade HTML forms to use AJAX. The main methods, ajaxForm and ajaxSubmit, gather information from the form element to determine how to manage the submit process. Both of these methods support numerous options which allows you to have full control over how the data is submitted. Submitting a form with AJAX doesn't get any easier than this!

Project home page http://malsup.com/jquery/form/.

## Installation
The preferred way to install this extension is through [composer](https://getcomposer.org/).

Either run
~~~
php composer.phar require kl83/yii2-jquery-form-asset ~1.1.0
~~~
or add
~~~
"kl83/yii2-jquery-form-asset": "~1.1.0"
~~~
to the require section of your composer.json file.

## Usage

### Adding an asset as a dependence on another asset.
~~~ php
class SomeAsset extends \yii\web\AssetBundle
{
...
  public $depends = [
    'kl83\assets\JQueryFormAsset',
  ];
...
}
~~~

### Adding an asset within a view.
~~~ php
kl83\assets\JQueryFormAsset::register($this);
~~~

## License
MIT License
