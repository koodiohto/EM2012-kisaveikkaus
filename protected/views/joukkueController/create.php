<?php
$this->breadcrumbs=array(
	'Joukkues'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Joukkue', 'url'=>array('index')),
	array('label'=>'Manage Joukkue', 'url'=>array('admin')),
);
?>

<h1>Create Joukkue</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>