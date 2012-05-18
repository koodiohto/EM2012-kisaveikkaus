<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('VeikkausID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->VeikkausID), array('view', 'id'=>$data->VeikkausID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('VeikkausNimi')); ?>:</b>
	<?php echo CHtml::encode($data->VeikkausNimi); ?>
	<br />


</div>