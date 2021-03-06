<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Dota_Player */

$this->title = $model->Player_ID;
$this->params['breadcrumbs'][] = ['label' => 'Dota  Players', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dota--player-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->Player_ID], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->Player_ID], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'Player_ID',
            'Username',
            'E-Mail',
            'Medal',
        ],
    ]) ?>

</div>
