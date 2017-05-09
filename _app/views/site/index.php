<?php

/* @var $this yii\web\View */


use yii\widgets\Menu;

$this->title = 'Yii2 Basic Empty Project';



?>
<?= Menu::widget([
    'encodeLabels' => false,
    'options'=>['class'=>'left-nav'],
    'items' => [
        ['label' => 'Example 1', 'url' => ['site/example1']],
        ['label' => 'Example 2', 'url' => ['site/example2']],
        ['label' => 'Example 3', 'url' => ['site/example3']],
    ]
]) ?>

