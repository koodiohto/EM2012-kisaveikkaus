<?php
$this->breadcrumbs=array(
	'Voittaja Tuloses'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List VoittajaTulos', 'url'=>array('index')),
	array('label'=>'Manage VoittajaTulos', 'url'=>array('admin')),
);
?>

<h1>Create VoittajaTulos</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>