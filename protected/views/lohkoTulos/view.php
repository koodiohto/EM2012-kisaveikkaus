<?php
$this->breadcrumbs=array(
	'Lohko Tuloses'=>array('index'),
	$model->LohkoTulosID,
);

$this->menu=array(
	array('label'=>'List LohkoTulos', 'url'=>array('index')),
	array('label'=>'Create LohkoTulos', 'url'=>array('create')),
	array('label'=>'Update LohkoTulos', 'url'=>array('update', 'id'=>$model->LohkoTulosID)),
	array('label'=>'Delete LohkoTulos', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->LohkoTulosID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage LohkoTulos', 'url'=>array('admin')),
);
?>

<h1>View LohkoTulos #<?php echo $model->LohkoTulosID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'LohkoTulosID',
		'LohkoSijoitus',
		'JoukkueID',
	),
)); ?>
