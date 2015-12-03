<?php

namespace voskobovich\adminlte;


/**
 * Class AssetBundle
 * @package voskobovich\adminlte
 */
abstract class AssetBundle extends \yii\web\AssetBundle
{
    /**
     * Init bundle
     */
    public function init()
    {
        parent::init();

        foreach ($this->css as $n => $item) {
            $this->css[$n] = static::prepareItem($item, 'css');
        }
        unset($n, $item);

        foreach ($this->js as $n => $item) {
            $this->js[$n] = static::prepareItem($item, 'js');
        }
        unset($n, $item);
    }

    /**
     * @param $item
     * @param $extension
     * @return mixed
     */
    protected static function prepareItem($item, $extension)
    {
        $version = !YII_DEBUG ?: '.min';
        $extension = "{$version}.{$extension}";

        return str_replace('{extension}', $extension, $item);
    }
}