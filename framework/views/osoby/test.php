<?php

use yii\widgets\ListView;
use yii\data\ActiveDataProvider;
// https://www.yiiframework.com/doc/guide/2.0/en/output-data-widgets
?>
<h1>Operacja na modelu</h1>
<ul>
<?php

foreach ($model->find()->all() as $osoba) {
  print '<li>'.$osoba->nazwisko.'</li>';
}
?>
</ul>

<h1> z wykorzystaniem widgetu ListView </h1>

<?php
$dataProvider = new ActiveDataProvider([
    'query' => $model::find(),
    'pagination' => [
        'pageSize' => 20,
    ],
]);
echo ListView::widget([
    'dataProvider' => $dataProvider,
    'itemView' => 'osoba',
]);