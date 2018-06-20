<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Osoby */

$this->title = 'Create Osoby';
$this->params['breadcrumbs'][] = ['label' => 'Osobies', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="osoby-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
