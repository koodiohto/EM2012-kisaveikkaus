<?php
$this->breadcrumbs=array(
	'Lohko Tuloses',
);

$this->menu=array(
	array('label'=>'Create LohkoTulos', 'url'=>array('create')),
	array('label'=>'Manage LohkoTulos', 'url'=>array('admin')),
);
?>

<h1>Lohko Tuloses</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
