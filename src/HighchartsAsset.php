<?php

namespace dominus77\highcharts;

use yii\web\AssetBundle;

/**
 * Class HighchartsAsset
 * @package dominus77\highcharts
 */
class HighchartsAsset extends AssetBundle
{
    /**
     * @var string
     */
    public $sourcePath = '@bower/highcharts';

    /**
     * @inheritDoc
     */
    public function init()
    {
        parent::init();
        $src = YII_ENV_DEV ? '.src' : '';
        $this->js[] = 'highcharts' . $src . '.js';
    }
}
