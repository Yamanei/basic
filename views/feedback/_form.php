<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\FeedbackForm */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="feedback-form-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['autofocus' => true])->label('ФИО') ?>

    <?= $form->field($model, 'email')?>

    <?= $form->field($model, 'birthday')->label('Дата рождения') ?>

    <?= $form->field($model, 'gender')->radioList($items = [1=>'Муж', 0=>"Жен"])->label(false); ?>

    <?= $form->field($model, 'city')->label('Город') ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
