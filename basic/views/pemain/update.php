<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Pemain */

$this->title = 'Update Pemain: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Pemains', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Player_ID, 'url' => ['view', 'id' => $model->Player_ID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="pemain-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
