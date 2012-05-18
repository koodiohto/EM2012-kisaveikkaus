<?php
$this->breadcrumbs=array(
	'Veikkaajas',
);

$this->menu=array(
	array('label'=>'Create Veikkaaja', 'url'=>array('create')),
	array('label'=>'Manage Veikkaaja', 'url'=>array('admin')),
);
?>

<h1>Veikkaajas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
