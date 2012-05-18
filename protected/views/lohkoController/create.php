<?php
$this->breadcrumbs=array(
	'Lohkos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Lohko', 'url'=>array('index')),
	array('label'=>'Manage Lohko', 'url'=>array('admin')),
);
?>

<h1>Create Lohko</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>