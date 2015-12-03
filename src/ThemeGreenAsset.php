<?php

namespace voskobovich\adminlte;

/**
 * Class ThemeGreenAsset
 * @package voskobovich\adminlte
 */
class ThemeGreenAsset extends AssetBundle
{
    /**
     * @inheritdoc
     */
    public $sourcePath = '@vendor/almasaeed2010/adminlte/dist';

    /**
     * @inheritdoc
     */
    public $css = [
        'css/skins/skin-green.{extension}'
    ];

    /**
     * @inheritdoc
     */
    public $depends = [
        'voskobovich\adminlte\AdminLTEAsset',
    ];
}