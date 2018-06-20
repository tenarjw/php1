<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Osoby */

$this->title = 'Update Osoby: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Osobies', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="osoby-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
