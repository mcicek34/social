<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model vendor\mcicek34\social\src\models\Kullanicilar */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="kullanicilar-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'UserID')->textInput() ?>

    <?= $form->field($model, 'F_UserID')->textInput() ?>

    <?= $form->field($model, 'Username')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'Password')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'Name')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'Surname')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'Age')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'Location')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'Mail')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'Gender')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
