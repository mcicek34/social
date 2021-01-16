<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model vendor\mcicek34\social\src\models\Kullanicilar */

$this->title = 'Create Kullanicilar';
$this->params['breadcrumbs'][] = ['label' => 'Kullanicilars', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kullanicilar-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
