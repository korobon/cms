<?php
/* @var $this MainController */
/* @var $model Main */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'main-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'url'); ?>
		<?php echo $form->textArea($model,'url',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'url'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'title'); ?>
		<?php echo $form->textField($model,'title',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'title'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'logo'); ?>
		<?php echo $form->textArea($model,'logo',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'logo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fondoColor'); ?>
		<?php echo $form->textField($model,'fondoColor',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'fondoColor'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fondoImg'); ?>
		<?php echo $form->textArea($model,'fondoImg',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'fondoImg'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'textColor'); ?>
		<?php echo $form->textField($model,'textColor',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'textColor'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_pais'); ?>
		<?php echo $form->textField($model,'id_pais'); ?>
		<?php echo $form->error($model,'id_pais'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->