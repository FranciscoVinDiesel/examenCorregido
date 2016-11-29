<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Bebidas */

$this->title = 'Update Bebidas: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Bebidas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="bebidas-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
