<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'lohko-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'LohkoTunnus'); ?>
		<?php echo $form->textField($model,'LohkoTunnus',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'LohkoTunnus'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->