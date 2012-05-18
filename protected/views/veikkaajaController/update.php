<?php
$this->breadcrumbs=array(
	'Veikkaajas'=>array('index'),
	$model->VeikkaajaID=>array('view','id'=>$model->VeikkaajaID),
	'Update',
);

$this->menu=array(
	array('label'=>'List Veikkaaja', 'url'=>array('index')),
	array('label'=>'Create Veikkaaja', 'url'=>array('create')),
	array('label'=>'View Veikkaaja', 'url'=>array('view', 'id'=>$model->VeikkaajaID)),
	array('label'=>'Manage Veikkaaja', 'url'=>array('admin')),
);
?>

<h1>Update Veikkaaja <?php echo $model->VeikkaajaID; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>