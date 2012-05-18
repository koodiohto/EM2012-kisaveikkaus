<?php
$this->breadcrumbs=array(
	'Veikkauses'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Veikkaus', 'url'=>array('index')),
	array('label'=>'Manage Veikkaus', 'url'=>array('admin')),
);
?>

<h1>Create Veikkaus</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>