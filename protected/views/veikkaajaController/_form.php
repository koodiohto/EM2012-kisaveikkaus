<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'veikkaaja-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'Nimi'); ?>
		<?php echo $form->textField($model,'Nimi',array('size'=>40,'maxlength'=>40)); ?>
		<?php echo $form->error($model,'Nimi'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'NimiMerkki'); ?>
		<?php echo $form->textField($model,'NimiMerkki',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'NimiMerkki'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'SahkoPosti'); ?>
		<?php echo $form->textField($model,'SahkoPosti',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'SahkoPosti'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->