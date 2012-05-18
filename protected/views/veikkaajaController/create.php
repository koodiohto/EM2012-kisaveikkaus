<?php
$this->breadcrumbs=array(
	'Veikkaajas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Veikkaaja', 'url'=>array('index')),
	array('label'=>'Manage Veikkaaja', 'url'=>array('admin')),
);
?>

<h1>Create Veikkaaja</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>