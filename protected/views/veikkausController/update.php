<?php
$this->breadcrumbs=array(
	'Veikkauses'=>array('index'),
	$model->VeikkausID=>array('view','id'=>$model->VeikkausID),
	'Update',
);

$this->menu=array(
	array('label'=>'List Veikkaus', 'url'=>array('index')),
	array('label'=>'Create Veikkaus', 'url'=>array('create')),
	array('label'=>'View Veikkaus', 'url'=>array('view', 'id'=>$model->VeikkausID)),
	array('label'=>'Manage Veikkaus', 'url'=>array('admin')),
);
?>

<h1>Update Veikkaus <?php echo $model->VeikkausID; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>