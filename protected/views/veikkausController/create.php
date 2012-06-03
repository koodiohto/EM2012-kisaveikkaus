<?php
$this->breadcrumbs=array(
	'Veikkauses'=>array('index'),
	'Create',
);

?>

<h1>Luo oma kaveriporukka</h1>
<br/>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>