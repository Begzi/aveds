<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\web\View;
use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

$this->title = 'Добавление сотрудника';

?>
<div class="container">
    <div class="worker_list_add">

        <div class="row">
            <div class="col-lg-5">

                <?php $form = ActiveForm::begin(['id' => 'worker-form']); ?>

                <?= $form->field($model, 'fullname')->textInput()->label('ФИО<font color="f33810">*</font>') ?>

                <?= $form->field($model, 'old')->textInput(['type' => 'number'])->label('Полных лет<font color="f33810">*</font>') ?>

                <?= $form->field($model, 'email')->textInput()->label('mail<font color="f33810">*</font>') ?>

                <?= $form->field($model, 'experience')->textInput(['type' => 'number'])->label('Опыт работы<font color="f33810">*</font>') ?>

                <?= $form->field($model, 'average_salary')->textInput(['type' => 'number'])->label('Средняя зарплата<font color="f33810">*</font>') ?>

                <?= $form->field($model, 'photo_link')->fileInput(  ['accept'=>'.jpg, .jpeg, .png, .pdf'])->label('Выберите фото<font color="f33810">*</font>'); ?>


                <div class="form-group">
                    <?= Html::submitButton('Добавить', ['class' => 'btn btn-primary', 'name' => 'contact-add-button']) ?>
                </div>

                <?php ActiveForm::end(); ?>

            </div>
        </div>

    </div>
</div>

