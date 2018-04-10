<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\Dota_PlayerSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Dota  Players';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dota--player-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Dota  Player', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'Player_ID',
            'Username',
            'E-Mail',
            'Medal',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
