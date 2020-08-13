<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ThreadSearch */
/* @var $form yii\widgets\ActiveForm */
?>


<?php $form = ActiveForm::begin([
    'action' => ['index'],
    'method' => 'get',
]);
?>

<?= $form->field($model, 'globalSearch') ?>



<?php // echo $form->field($model, 'status') 
?>

<div class="form-group">
    <button type="submit" class="download-btn"><i class='bx bxs-search'></i> Search</a>
    <button type="button" class="download-btn" data-toggle="modal" data-target="#myModal2">
			Ask
		</button>
</div>

<?php ActiveForm::end(); ?>