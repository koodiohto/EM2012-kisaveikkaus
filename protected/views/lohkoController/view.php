<?php
$this->breadcrumbs=array(
	'Lohkos'=>array('index'),
	$model->LohkoID,
);

$this->menu=array(
	array('label'=>'List Lohko', 'url'=>array('index')),
	array('label'=>'Create Lohko', 'url'=>array('create')),
	array('label'=>'Update Lohko', 'url'=>array('update', 'id'=>$model->LohkoID)),
	array('label'=>'Delete Lohko', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->LohkoID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Lohko', 'url'=>array('admin')),
);
?>

<h1>View Lohko #<?php echo $model->LohkoID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'LohkoID',
		'LohkoTunnus',
	),
)); ?>
