# Simple Highcharts widget for Yii2

[![Software License](https://poser.pugx.org/dominus77/yii2-noty/license)](https://github.com/Dominus77/yii2-highcarts-widget/blob/master/LICENSE.md)
[![Build Status](https://travis-ci.org/Dominus77/yii2-noty.svg?branch=master)](https://travis-ci.org/Dominus77/yii2-highcharts-widget)

Noty widget for Yii2

## Installation

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require dominus77/yii2-highcharts-widget
```

or add

```
"dominus77/yii2-highcharts-widget": "^1.0"
```

to the require section of your `composer.json` file.


## Usage

View:
```php
<?php
use dominus77\highcharts\HighChartsWidget;
?>

<?= HighChartsWidget::widget([
    'clientOptions' => [       
        'chart' => [
            'type' => 'bar'
        ],
        'title' => [
            'text' => 'Fruit Consumption'
        ],
        'xAxis' => [
            'categories' => [
                'Apples',
                'Bananas',
                'Oranges'
            ]
        ],
        'yAxis' => [
            'title' => [
                'text' => 'Fruit eaten'
            ]
        ],
        'series' => [
            ['name' => 'Jane', 'data' => [1, 0, 4]],
            ['name' => 'John', 'data' => [5, 7, 3]]
        ]
    ]
]) ?>
```

## More Information
Please, check the [Highcharts](https://www.highcharts.com/docs/index)

## Testing
```
$ vendor/bin/phpunit
```

## License
The MIT License (MIT). Please see [License File](https://github.com/Dominus77/yii2-highcharts-widget/blob/master/LICENSE.md) for more information.
