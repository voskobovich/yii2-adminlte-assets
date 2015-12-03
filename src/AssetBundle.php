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

        foreach ($this->css as &$item) {
            $item = static::prepareItem($item, 'css');
        }
        unset($item);

        foreach ($this->js as &$item) {
            $item = static::prepareItem($item, 'js');
        }
        unset($item);
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