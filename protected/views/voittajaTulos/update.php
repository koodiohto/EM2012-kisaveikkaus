<?php
$this->breadcrumbs=array(
	'Voittaja Tuloses'=>array('index'),
	$model->VoittajaTulosID=>array('view','id'=>$model->VoittajaTulosID),
	'Update',
);

$this->menu=array(
	array('label'=>'List VoittajaTulos', 'url'=>array('index')),
	array('label'=>'Create VoittajaTulos', 'url'=>array('create')),
	array('label'=>'View VoittajaTulos', 'url'=>array('view', 'id'=>$model->VoittajaTulosID)),
	array('label'=>'Manage VoittajaTulos', 'url'=>array('admin')),
);
?>

<h1>Update VoittajaTulos <?php echo $model->VoittajaTulosID; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>