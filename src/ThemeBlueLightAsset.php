<?php

namespace voskobovich\adminlte;

/**
 * Class ThemeBlueLightAsset
 * @package voskobovich\adminlte
 */
class ThemeBlueLightAsset extends AssetBundle
{
    /**
     * @inheritdoc
     */
    public $sourcePath = '@vendor/almasaeed2010/adminlte/dist';

    /**
     * @inheritdoc
     */
    public $css = [
        'css/skins/skin-blue-light.{extension}'
    ];

    /**
     * @inheritdoc
     */
    public $depends = [
        'voskobovich\adminlte\AdminLTEAsset',
    ];
}