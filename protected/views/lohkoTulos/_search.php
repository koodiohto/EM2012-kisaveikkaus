<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'LohkoTulosID'); ?>
		<?php echo $form->textField($model,'LohkoTulosID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'LohkoSijoitus'); ?>
		<?php echo $form->textField($model,'LohkoSijoitus'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'JoukkueID'); ?>
		<?php echo $form->textField($model,'JoukkueID'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->