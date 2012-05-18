<?php
$this->breadcrumbs=array(
	'Lohkos',
);

$this->menu=array(
	array('label'=>'Create Lohko', 'url'=>array('create')),
	array('label'=>'Manage Lohko', 'url'=>array('admin')),
);
?>

<h1>Lohkos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
