<?php
$this->breadcrumbs=array(
	'Joukkues'=>array('index'),
	$model->JoukkueID,
);

$this->menu=array(
	array('label'=>'List Joukkue', 'url'=>array('index')),
	array('label'=>'Create Joukkue', 'url'=>array('create')),
	array('label'=>'Update Joukkue', 'url'=>array('update', 'id'=>$model->JoukkueID)),
	array('label'=>'Delete Joukkue', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->JoukkueID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Joukkue', 'url'=>array('admin')),
);
?>

<h1>View Joukkue #<?php echo $model->JoukkueID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'JoukkueID',
		'MaaTunnus',
		'MaaNimi',
		'LohkoID',
	),
)); ?>
