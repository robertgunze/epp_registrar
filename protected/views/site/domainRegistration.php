<?php
/* @var $this SiteController */
/* @var $model DomainRegistrationForm */
/* @var $form CActiveForm */

$this->pageTitle=Yii::app()->name . ' - Domain Regitration';
$this->breadcrumbs=array(
	'Domain Registration',
);
?>

<?php echo TbHtml::pageHeader('', 'Domain Registration')?>

<?php if(Yii::app()->user->hasFlash('domain')): ?>

<div class="alert alert_success"><?php echo Yii::app()->user->getFlash('domain'); ?></div>
      <?php 
                        Yii::app()->clientScript->registerScript(
                                'fadeAndHideEffect',
                                '$(".alert_success").animate({opacity: 1.0},2000).fadeOut("slow");'
                                
                                );
       ?>

<?php else: ?>

<div class="form wide">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'domain-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>

	<?php echo $form->errorSummary($model); ?>
     
        
         <?php
        
	$this->widget('zii.widgets.jui.CJuiAccordion',array(
	    'panels'=>array(
                 'Domain Information'=>$this->renderPartial("_domainInfo",
                        array("form"=>$form,"model"=>$model),true),
	         'Administrative Contact of Organization'=>$this->renderPartial("_adminContact",
                        array("form"=>$form,"adminContact"=>$adminContact),true),
                 'Technical and Zone Contact'=>$this->renderPartial("_techContact",
                        array("form"=>$form,"techContact"=>$techContact),true),
	       
                    
	    ),
	    // additional javascript options for the accordion plugin
	    'options'=>array(
	        'animated'=>'bounceslide',
                'clearStyle'=>true,
                'fillSpace'=>true,
	    ),
            'htmlOptions'=>array(
                'style'=>'width:50%'
            ),
	     
	));
        
    ?>
	<div class="row buttons">
		<?php echo CHtml::submitButton('Register',array('class'=>'btn btn-info')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->


<?php endif; ?>
