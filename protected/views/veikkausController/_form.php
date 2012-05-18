<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'veikkaus-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'VeikkausNimi'); ?>
		<?php echo $form->textField($model,'VeikkausNimi',array('size'=>40,'maxlength'=>40)); ?>
		<?php echo $form->error($model,'VeikkausNimi'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->