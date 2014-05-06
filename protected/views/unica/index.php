<?php
/* @var $this UnicaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Unicas',
);

$this->menu=array(
	array('label'=>'Create Unica', 'url'=>array('create')),
	array('label'=>'Manage Unica', 'url'=>array('admin')),
);
?>

<h1>Unicas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
