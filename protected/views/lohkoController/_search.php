<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'LohkoID'); ?>
		<?php echo $form->textField($model,'LohkoID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'LohkoTunnus'); ?>
		<?php echo $form->textField($model,'LohkoTunnus',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->