<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Dota_Player */

$this->title = 'Create Dota  Player';
$this->params['breadcrumbs'][] = ['label' => 'Dota  Players', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dota--player-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
