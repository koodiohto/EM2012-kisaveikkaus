<?php
$this->breadcrumbs=array(
	'Veikkauses'=>array('index'),
	$model->VeikkausID,
);

$this->menu=array(
	array('label'=>'List Veikkaus', 'url'=>array('index')),
	array('label'=>'Create Veikkaus', 'url'=>array('create')),
	array('label'=>'Update Veikkaus', 'url'=>array('update', 'id'=>$model->VeikkausID)),
	array('label'=>'Delete Veikkaus', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->VeikkausID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Veikkaus', 'url'=>array('admin')),
);
?>

<h1>View Veikkaus #<?php echo $model->VeikkausID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'VeikkausID',
		'VeikkausNimi',
	),
)); ?>
