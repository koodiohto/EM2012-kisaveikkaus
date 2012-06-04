<?php
$this->breadcrumbs=array(
	'Voittaja Tuloses'=>array('index'),
	$model->VoittajaTulosID,
);

$this->menu=array(
	array('label'=>'List VoittajaTulos', 'url'=>array('index')),
	array('label'=>'Create VoittajaTulos', 'url'=>array('create')),
	array('label'=>'Update VoittajaTulos', 'url'=>array('update', 'id'=>$model->VoittajaTulosID)),
	array('label'=>'Delete VoittajaTulos', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->VoittajaTulosID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage VoittajaTulos', 'url'=>array('admin')),
);
?>

<h1>View VoittajaTulos #<?php echo $model->VoittajaTulosID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'VoittajaTulosID',
		'LoppuSijoitus',
		'JoukkueID',
	),
)); ?>
