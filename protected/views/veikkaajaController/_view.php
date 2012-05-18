<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('VeikkaajaID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->VeikkaajaID), array('view', 'id'=>$data->VeikkaajaID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Nimi')); ?>:</b>
	<?php echo CHtml::encode($data->Nimi); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NimiMerkki')); ?>:</b>
	<?php echo CHtml::encode($data->NimiMerkki); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('SahkoPosti')); ?>:</b>
	<?php echo CHtml::encode($data->SahkoPosti); ?>
	<br />


</div>