<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Osobies';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="osoby-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Osoby', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'nazwisko',
            'stanowisko',
            'kod',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
