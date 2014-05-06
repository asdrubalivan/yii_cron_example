<?php
/* @var $this UnicaController */
/* @var $data Unica */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tiempo_cambio')); ?>:</b>
	<?php echo CHtml::encode($data->tiempo_cambio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cambiado')); ?>:</b>
	<?php echo CHtml::encode($data->cambiado); ?>
	<br />


</div>