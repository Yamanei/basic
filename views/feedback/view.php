<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\bootstrap\ActiveForm;
use yli\models\MailerForm;


$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Feedback Forms', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="feedback-form-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>

          <?= Html::a('Отправить на почту','http://yii2/index.php?r=site%2Fcontact', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
          <?= Html::a('Обновить', ['update', 'id' => $model->name], ['class' => 'btn btn-primary']) ?>
          <?= Html::a('Удалить', ['delete', 'id' => $model->name], [
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
            'name',
            'email:email',
            'birthday',
            'gender',
            'city',
        ],
    ]) ?>

</div>
