<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel vendor\mcicek34\social\src\models\KullanicilarSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Kullanicilars';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kullanicilar-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Kullanicilar', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'UserID',
            'F_UserID',
            'Username:ntext',
            'Password:ntext',
            //'Name:ntext',
            //'Surname:ntext',
            //'Age:ntext',
            //'Location:ntext',
            //'Mail:ntext',
            //'Gender:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
