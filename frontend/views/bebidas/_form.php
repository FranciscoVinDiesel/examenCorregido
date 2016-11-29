<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Bebidas */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="bebidas-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'refrescos')->dropDownList([ 'Cafe' => 'Cafe', 'Te' => 'Te', 'Agua' => 'Agua', ], ['prompt' => '']) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
