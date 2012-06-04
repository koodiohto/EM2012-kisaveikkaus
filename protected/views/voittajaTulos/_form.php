<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'voittaja-tulos-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'LoppuSijoitus'); ?>
		<?php echo $form->textField($model,'LoppuSijoitus'); ?>
		<?php echo $form->error($model,'LoppuSijoitus'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'JoukkueID'); ?>
		<?php echo $form->textField($model,'JoukkueID'); ?>
		<?php echo $form->error($model,'JoukkueID'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->