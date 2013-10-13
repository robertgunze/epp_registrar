<?php

$this->pageTitle=Yii::app()->name . ' - Domain Renewal';
$this->breadcrumbs=array(
	'Domain Renewal',
);
?>

<h2 class="breadcrumb">Domain Renewal </h2>
<div class="form wide">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'domain-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>
<?php if(Yii::app()->user->hasFlash('success')):?>
 <div class="alert info"><?php echo Yii::app()->user->getFlash('success');?></div>
<?php endif;?>
	<?php echo $form->errorSummary($model); ?>
<div class="well">
	<div class="row">
		<?php echo $form->labelEx($model,'domain'); ?>
		<?php echo $form->textField($model,'domain'); ?>
		<?php echo $form->error($model,'domain'); ?>
	</div>

        <div class="row">
                <?php echo $form->labelEx($model,'period'); ?>
                <?php echo $form->textField($model,'period'); ?>
                <?php echo $form->error($model,'period'); ?>
        </div>
</div>
	<div class="row buttons">
		<?php echo CHtml::submitButton('Renew',array('class'=>'btn btn-large btn-primary')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->