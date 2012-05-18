<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'joukkue-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'MaaTunnus'); ?>
		<?php echo $form->textField($model,'MaaTunnus',array('size'=>3,'maxlength'=>3)); ?>
		<?php echo $form->error($model,'MaaTunnus'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'MaaNimi'); ?>
		<?php echo $form->textField($model,'MaaNimi',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'MaaNimi'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'LohkoID'); ?>
		<?php echo $form->textField($model,'LohkoID'); ?>
		<?php echo $form->error($model,'LohkoID'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->