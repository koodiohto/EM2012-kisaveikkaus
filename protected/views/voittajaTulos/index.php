<?php
$this->breadcrumbs=array(
	'Voittaja Tuloses',
);

$this->menu=array(
	array('label'=>'Create VoittajaTulos', 'url'=>array('create')),
	array('label'=>'Manage VoittajaTulos', 'url'=>array('admin')),
);
?>

<h1>Voittaja Tuloses</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
