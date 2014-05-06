<?php
/* @var $this UnicaController */
/* @var $model Unica */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'unica-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'tiempo_cambio'); ?>
		<?php echo $form->textField($model,'tiempo_cambio'); ?>
		<?php echo $form->error($model,'tiempo_cambio'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cambiado'); ?>
		<?php echo $form->textField($model,'cambiado'); ?>
		<?php echo $form->error($model,'cambiado'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->