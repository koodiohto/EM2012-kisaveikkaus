<?php
$this->breadcrumbs=array(
	'Lohko Tuloses'=>array('index'),
	$model->LohkoTulosID=>array('view','id'=>$model->LohkoTulosID),
	'Update',
);

$this->menu=array(
	array('label'=>'List LohkoTulos', 'url'=>array('index')),
	array('label'=>'Create LohkoTulos', 'url'=>array('create')),
	array('label'=>'View LohkoTulos', 'url'=>array('view', 'id'=>$model->LohkoTulosID)),
	array('label'=>'Manage LohkoTulos', 'url'=>array('admin')),
);
?>

<h1>Update LohkoTulos <?php echo $model->LohkoTulosID; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>