<?php
/* @var $this UnicaController */
/* @var $model Unica */

$this->breadcrumbs=array(
	'Unicas'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Unica', 'url'=>array('index')),
	array('label'=>'Create Unica', 'url'=>array('create')),
	array('label'=>'View Unica', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Unica', 'url'=>array('admin')),
);
?>

<h1>Update Unica <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>