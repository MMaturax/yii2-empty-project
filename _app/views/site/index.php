<?php

/* @var $this yii\web\View */

use yii\helpers\Url;
use yii\widgets\Menu;

$this->title = 'My Yii Application';
//Url::to(['man/advert-create-global'])
//var_dump(Url::base());
//var_dump(Yii::getAlias('@web'));
?>
<?= Menu::widget([
    'encodeLabels' => false,
    'options'=>['class'=>'left-nav'],
    'items' => [
        ['label' => 'ANASAYFA', 'url' => ['site/index']],
        ['label' => 'ÜRÜNLER', 'url' => ['site/categories']],
        ['label' => 'HABERLER', 'url' => ['site/news']],
    ]
]) ?>

