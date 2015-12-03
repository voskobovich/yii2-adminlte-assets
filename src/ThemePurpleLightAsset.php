<?php

namespace voskobovich\adminlte;

/**
 * Class ThemePurpleLightAsset
 * @package voskobovich\adminlte
 */
class ThemePurpleLightAsset extends AssetBundle
{
    /**
     * @inheritdoc
     */
    public $sourcePath = '@vendor/almasaeed2010/adminlte/dist';

    /**
     * @inheritdoc
     */
    public $css = [
        'css/skins/skin-purple-light.{extension}'
    ];

    /**
     * @inheritdoc
     */
    public $depends = [
        'voskobovich\adminlte\AdminLTEAsset',
    ];
}