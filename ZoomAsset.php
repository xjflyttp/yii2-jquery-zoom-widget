<?php

namespace xj\jqueryzoom;

use yii\web\AssetBundle;

/**
 *
 * @author xjflyttp <xjflyttp@gmail.com>
 */
class ZoomAsset extends AssetBundle
{

    public $sourcePath = '@bower/jquery-zoom';
    public $basePath = '@webroot/assets';
    public $js = ['jquery.zoom.js'];
    public $depends = ['yii\web\JqueryAsset'];

}
