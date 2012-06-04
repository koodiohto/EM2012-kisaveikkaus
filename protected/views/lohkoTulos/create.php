<?php
$this->breadcrumbs=array(
	'Lohko Tuloses'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List LohkoTulos', 'url'=>array('index')),
	array('label'=>'Manage LohkoTulos', 'url'=>array('admin')),
);
?>

<h1>Create LohkoTulos</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>