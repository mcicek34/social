<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model vendor\mcicek34\social\src\models\Kullanicilar */

$this->title = 'Update Kullanicilar: ' . $model->Name;
$this->params['breadcrumbs'][] = ['label' => 'Kullanicilars', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="kullanicilar-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
