<?php

namespace voskobovich\adminlte;

/**
 * Class ThemeBlackLightAsset
 * @package voskobovich\adminlte
 */
class ThemeBlackLightAsset extends AssetBundle
{
    /**
     * @inheritdoc
     */
    public $sourcePath = '@vendor/almasaeed2010/adminlte/dist';

    /**
     * @inheritdoc
     */
    public $css = [
        'css/skins/skin-black-light.{extension}'
    ];

    /**
     * @inheritdoc
     */
    public $depends = [
        'voskobovich\adminlte\AdminLTEAsset',
    ];
}