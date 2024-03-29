<?php
/* @var $this UnicaController */
/* @var $model Unica */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tiempo_cambio'); ?>
		<?php echo $form->textField($model,'tiempo_cambio'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cambiado'); ?>
		<?php echo $form->textField($model,'cambiado'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->