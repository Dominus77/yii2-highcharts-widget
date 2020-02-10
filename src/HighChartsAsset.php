<?php

namespace dominus77\highcharts;

use yii\web\AssetBundle;
use yii\web\JqueryAsset;

/**
 * Class HighChartsAsset
 * @package dominus77\highcharts
 */
class HighChartsAsset extends AssetBundle
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

    /** @var array */
    public $depends = [
        JqueryAsset::class,
    ];
}
