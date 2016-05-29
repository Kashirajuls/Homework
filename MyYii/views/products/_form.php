<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use yii\models\Products;

/* @var $this yii\web\View */
/* @var $model app\models\Products */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="products-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Product_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Product_category')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'Product_category')->dropDownList(
    	ArrayHelper::map(Products::find()->all(),'id','Product_category'),
    	['prompt'=>'Select Category']
    ) ?>

    <?= $form->field($model, 'Product_price')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
