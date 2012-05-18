<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'VeikkaajaID'); ?>
		<?php echo $form->textField($model,'VeikkaajaID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Nimi'); ?>
		<?php echo $form->textField($model,'Nimi',array('size'=>40,'maxlength'=>40)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'NimiMerkki'); ?>
		<?php echo $form->textField($model,'NimiMerkki',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'SahkoPosti'); ?>
		<?php echo $form->textField($model,'SahkoPosti',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->