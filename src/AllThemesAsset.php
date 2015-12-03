<?php

namespace voskobovich\adminlte\skins;

use voskobovich\adminlte\AssetBundle;

/**
 * Class AllThemesAsset
 * @package voskobovich\adminlte\slins
 */
class AllThemesAsset extends AssetBundle
{
    /**
     * @inheritdoc
     */
    public $sourcePath = '@vendor/almasaeed2010/adminlte/dist';

    /**
     * @inheritdoc
     */
    public $css = [
        'css/skins/_all-skins.{extension}'
    ];

    /**
     * @inheritdoc
     */
    public $depends = [
        'voskobovich\adminlte\AdminLTEAsset',
    ];
}