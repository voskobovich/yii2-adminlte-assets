<?php

namespace voskobovich\adminlte;

/**
 * Class ThemeYellowLightAsset
 * @package voskobovich\adminlte
 */
class ThemeYellowLightAsset extends AssetBundle
{
    /**
     * @inheritdoc
     */
    public $sourcePath = '@vendor/almasaeed2010/adminlte/dist';

    /**
     * @inheritdoc
     */
    public $css = [
        'css/skins/skin-yellow-light.{extension}'
    ];

    /**
     * @inheritdoc
     */
    public $depends = [
        'voskobovich\adminlte\AdminLTEAsset',
    ];
}