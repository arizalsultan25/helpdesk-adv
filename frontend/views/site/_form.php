<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
//use dosamigos\ckeditor\CKEditor;
use mihaildev\ckeditor\CKEditor;
/* @var $this yii\web\View */
/* @var $model app\models\Thread */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="thread-form">

    <?php $form = ActiveForm::begin(['options'=>['enctype'=>'multipart/form-data']]); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->widget(CKEditor::className(),[
    'editorOptions' => [
        'preset' => 'standard', //разработанны стандартные настройки basic, standard, full данную возможность не обязательно использовать
        'inline' => false, //по умолчанию false
        
    ],
]); ?>

     <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
