<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('JoukkueID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->JoukkueID), array('view', 'id'=>$data->JoukkueID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('MaaTunnus')); ?>:</b>
	<?php echo CHtml::encode($data->MaaTunnus); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('MaaNimi')); ?>:</b>
	<?php echo CHtml::encode($data->MaaNimi); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('LohkoID')); ?>:</b>
	<?php echo CHtml::encode($data->LohkoID); ?>
	<br />


</div>