<?php
/* @var $this MainController */
/* @var $data Main */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('url')); ?>:</b>
	<?php echo CHtml::encode($data->url); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('title')); ?>:</b>
	<?php echo CHtml::encode($data->title); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('logo')); ?>:</b>
	<?php echo CHtml::encode($data->logo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fondoColor')); ?>:</b>
	<?php echo CHtml::encode($data->fondoColor); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fondoImg')); ?>:</b>
	<?php echo CHtml::encode($data->fondoImg); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('textColor')); ?>:</b>
	<?php echo CHtml::encode($data->textColor); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('id_pais')); ?>:</b>
	<?php echo CHtml::encode($data->id_pais); ?>
	<br />

	*/ ?>

</div>