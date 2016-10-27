<?php
/**
 * Created by PhpStorm.
 * User: Саша
 * Date: 27.10.2016
 * Time: 22:21
 */
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>

<?php
    if(Yii::$app->session->hasFlash('success')) {
        echo '<div class="alert alert-success">'.Yii::$app->session->getFlash('success').'</div>';
    }
?>

<div class="row">
<?php $form = ActiveForm::begin(['id' => 'conform']); ?>
<?= $form->field($model, 'first_name'); ?>
<?= $form->field($model, 'last_name'); ?>
<?= $form->field($model, 'age'); ?>
<?= $form->field($model, 'birth_date')->textInput(array('placeholder' => 'Example: 25.12.1980')); ?>

<?= Html::submitButton('Submit', ['class' => 'btn btn-success']); ?>

<?php ActiveForm::end(); ?>
</div>


