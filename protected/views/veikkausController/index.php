<?php
$this->breadcrumbs=array(
	'Veikkauses',
);

$this->menu=array(
	array('label'=>'Create Veikkaus', 'url'=>array('create')),
	array('label'=>'Manage Veikkaus', 'url'=>array('admin')),
);
?>

<h1>Veikkauses</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
