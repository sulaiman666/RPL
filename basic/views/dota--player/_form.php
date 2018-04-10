<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Dota_Player */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="dota--player-form">

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
