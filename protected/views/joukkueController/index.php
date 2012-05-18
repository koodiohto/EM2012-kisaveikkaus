<?php
$this->breadcrumbs=array(
	'Joukkues',
);

$this->menu=array(
	array('label'=>'Create Joukkue', 'url'=>array('create')),
	array('label'=>'Manage Joukkue', 'url'=>array('admin')),
);
?>

<h1>Joukkues</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
