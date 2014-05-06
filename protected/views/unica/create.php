<?php
/* @var $this UnicaController */
/* @var $model Unica */

$this->breadcrumbs=array(
	'Unicas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Unica', 'url'=>array('index')),
	array('label'=>'Manage Unica', 'url'=>array('admin')),
);
?>

<h1>Create Unica</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>