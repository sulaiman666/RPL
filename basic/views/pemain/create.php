<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Pemain */

$this->title = 'Create Pemain';
$this->params['breadcrumbs'][] = ['label' => 'Pemains', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pemain-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
