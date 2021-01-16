<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model vendor\mcicek34\social\src\models\KullanicilarSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="kullanicilar-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'UserID') ?>

    <?= $form->field($model, 'F_UserID') ?>

    <?= $form->field($model, 'Username') ?>

    <?= $form->field($model, 'Password') ?>

    <?php // echo $form->field($model, 'Name') ?>

    <?php // echo $form->field($model, 'Surname') ?>

    <?php // echo $form->field($model, 'Age') ?>

    <?php // echo $form->field($model, 'Location') ?>

    <?php // echo $form->field($model, 'Mail') ?>

    <?php // echo $form->field($model, 'Gender') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
