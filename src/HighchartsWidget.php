<?php

namespace dominus77\highcharts;

use Yii;
use yii\base\Widget;
use yii\helpers\Json;

/**
 * Class HighchartsWidget
 * @package dominus77\highcharts
 */
class HighchartsWidget extends Widget
{
    /** @var yii\web\View */
    private $_view;

    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();
        $this->_view = $this->getView();
        HighchartsAsset::register($this->_view);
    }

    /**
     * @return string|void
     */
    public function run()
    {
        return 'Highcharts Widget';
    }

    /**
     * @param array $options
     */
    public function register($options = [])
    {
        $optionsEncoded = Json::encode($options);
        $this->_view->registerJs("new Highcharts($optionsEncoded).show();");
    }
}
