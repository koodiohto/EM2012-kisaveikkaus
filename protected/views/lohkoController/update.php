<?php
$this->breadcrumbs=array(
	'Lohkos'=>array('index'),
	$model->LohkoID=>array('view','id'=>$model->LohkoID),
	'Update',
);

$this->menu=array(
	array('label'=>'List Lohko', 'url'=>array('index')),
	array('label'=>'Create Lohko', 'url'=>array('create')),
	array('label'=>'View Lohko', 'url'=>array('view', 'id'=>$model->LohkoID)),
	array('label'=>'Manage Lohko', 'url'=>array('admin')),
);
?>

<h1>Update Lohko <?php echo $model->LohkoID; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>