<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('LohkoTulosID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->LohkoTulosID), array('view', 'id'=>$data->LohkoTulosID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('LohkoSijoitus')); ?>:</b>
	<?php echo CHtml::encode($data->LohkoSijoitus); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('JoukkueID')); ?>:</b>
	<?php echo CHtml::encode($data->JoukkueID); ?>
	<br />


</div>