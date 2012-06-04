<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('VoittajaTulosID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->VoittajaTulosID), array('view', 'id'=>$data->VoittajaTulosID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('LoppuSijoitus')); ?>:</b>
	<?php echo CHtml::encode($data->LoppuSijoitus); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('JoukkueID')); ?>:</b>
	<?php echo CHtml::encode($data->JoukkueID); ?>
	<br />


</div>