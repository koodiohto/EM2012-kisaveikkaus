<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'JoukkueID'); ?>
		<?php echo $form->textField($model,'JoukkueID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'MaaTunnus'); ?>
		<?php echo $form->textField($model,'MaaTunnus',array('size'=>3,'maxlength'=>3)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'MaaNimi'); ?>
		<?php echo $form->textField($model,'MaaNimi',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'LohkoID'); ?>
		<?php echo $form->textField($model,'LohkoID'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->