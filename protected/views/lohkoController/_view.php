<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('LohkoID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->LohkoID), array('view', 'id'=>$data->LohkoID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('LohkoTunnus')); ?>:</b>
	<?php echo CHtml::encode($data->LohkoTunnus); ?>
	<br />


</div>