<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Pemain */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pemain-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Player_ID')->textInput() ?>

    <?= $form->field($model, 'Username')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'E-Mail')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Medal')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
