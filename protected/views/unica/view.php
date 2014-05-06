<?php
/* @var $this UnicaController */
/* @var $model Unica */

$this->breadcrumbs=array(
	'Unicas'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Unica', 'url'=>array('index')),
	array('label'=>'Create Unica', 'url'=>array('create')),
	array('label'=>'Update Unica', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Unica', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Unica', 'url'=>array('admin')),
);
?>

<h1>View Unica #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'tiempo_cambio',
		'cambiado',
	),
)); ?>
