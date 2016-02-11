<?php
/**
 * @author Semenov Alexander <semenov@skeeks.com>
 * @link http://skeeks.com/
 * @copyright 2010 SkeekS (СкикС)
 * @date 11.02.2016
 */

namespace rusoft\cms\plugins;

use yii\web\AssetBundle;

/**
 * Class AppAsset
 * @package frontend\assets
 */
class AdminAsset extends \skeeks\cms\base\AssetBundle
{
    public $sourcePath = '@vendor/skeeks/cms-rusoft-plugin/assets';

    public $css = [
        'admin.css',
    ];
    public $js = [];

    public $depends = [
        '\skeeks\cms\modules\admin\assets\AdminAsset',
    ];
}