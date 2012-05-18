<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'VeikkausID'); ?>
		<?php echo $form->textField($model,'VeikkausID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'VeikkausNimi'); ?>
		<?php echo $form->textField($model,'VeikkausNimi',array('size'=>40,'maxlength'=>40)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->