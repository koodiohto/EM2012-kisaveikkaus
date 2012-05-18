<?php
$this->breadcrumbs=array(
	'Joukkues'=>array('index'),
	$model->JoukkueID=>array('view','id'=>$model->JoukkueID),
	'Update',
);

$this->menu=array(
	array('label'=>'List Joukkue', 'url'=>array('index')),
	array('label'=>'Create Joukkue', 'url'=>array('create')),
	array('label'=>'View Joukkue', 'url'=>array('view', 'id'=>$model->JoukkueID)),
	array('label'=>'Manage Joukkue', 'url'=>array('admin')),
);
?>

<h1>Update Joukkue <?php echo $model->JoukkueID; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>