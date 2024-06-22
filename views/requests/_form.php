<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Requests $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="requests-form">

    <?php $form = ActiveForm::begin(); ?>


    <?= $form->field($model, 'master_id')->dropDownList([
        1 => 'Галя',
        2 => 'Юля',
        3 => 'Светочка',
        4 => 'Алина',
        5 => 'Лена',
    ]) ?>


    <?= $form->field($model, 'date')->textInput(['type'=>'date', 'min'=>'2024-06-22']) ?>

    <?= $form->field($model, 'time')->dropDownList([
        '8:00:00' => '8:00',
        '9:00:00' => '9:00',
        '10:00:00' => '10:00',
        '11:00:00' => '11:00',
        '12:00:00' => '12:00',
        '13:00:00' => '13:00',
        '14:00:00' => '14:00',
        '15:00:00' => '15:00',
        '16:00:00' => '16:00',
        '17:00:00' => '17:00',
        '18:00:00' => '18:00',
    ]) ?>


    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
