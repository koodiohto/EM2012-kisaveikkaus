<?php
$this->breadcrumbs=array(
	'Veikkaajas'=>array('index'),
	$model->VeikkaajaID,
);

$this->menu=array(
	array('label'=>'List Veikkaaja', 'url'=>array('index')),
	array('label'=>'Create Veikkaaja', 'url'=>array('create')),
	array('label'=>'Update Veikkaaja', 'url'=>array('update', 'id'=>$model->VeikkaajaID)),
	array('label'=>'Delete Veikkaaja', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->VeikkaajaID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Veikkaaja', 'url'=>array('admin')),
);
?>

<h1>View Veikkaaja #<?php echo $model->VeikkaajaID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'VeikkaajaID',
		'Nimi',
		'NimiMerkki',
		'SahkoPosti',
	),
)); ?>
