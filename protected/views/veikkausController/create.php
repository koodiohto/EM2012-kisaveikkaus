<?php
$this->breadcrumbs=array(
	'Veikkauses'=>array('index'),
	'Create',
);

?>

<h1>Anna kaveriporukallesi nimi:</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>