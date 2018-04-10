<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PemainSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pemain-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'Player_ID') ?>

    <?= $form->field($model, 'Username') ?>

    <?= $form->field($model, 'E-Mail') ?>

    <?= $form->field($model, 'Medal') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
