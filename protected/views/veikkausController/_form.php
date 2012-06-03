<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'veikkaus-form',
	'enableAjaxValidation'=>false,
)); ?>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'VeikkausNimi'); ?>
		<?php echo $form->textField($model,'VeikkausNimi',array('size'=>40,'maxlength'=>40)); ?>
		<?php echo $form->error($model,'VeikkausNimi'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Salasana'); ?>
		<?php echo $form->textField($model,'Salasana',array('size'=>60,'maxlength'=>60)); ?>
		<?php echo $form->error($model,'Salasana'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Luo veikkaus' : 'Tallenna'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->