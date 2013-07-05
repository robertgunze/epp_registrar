<?php
/* @var $this SiteController */
/* @var $model DomainRegistrationForm */
/* @var $form CActiveForm */

$this->pageTitle=Yii::app()->name . ' - Domain Regitration';
$this->breadcrumbs=array(
	'Domain Registration',
);
?>

<h2 class="breadcrumb">Domain Registration </h2>

<?php if(Yii::app()->user->hasFlash('domain')): ?>

<div class="alert alert_success"><?php echo Yii::app()->user->getFlash('domain'); ?></div>
      <?php 
                        Yii::app()->clientScript->registerScript(
                                'fadeAndHideEffect',
                                '$(".alert_success").animate({opacity: 1.0},2000).fadeOut("slow");'
                                
                                );
       ?>

<?php else: ?>

<p>
Please fill out the following form to register your domain. Thank you.
</p>

<div class="form wide">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'domain-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>
       <div class="well">
	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name'); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ns1'); ?>
		<?php echo $form->textField($model,'ns1'); ?>
		<?php echo $form->error($model,'ns1'); ?>
	</div>
        <div class="row">
		<?php echo $form->labelEx($model,'ns2'); ?>
		<?php echo $form->textField($model,'ns2'); ?>
		<?php echo $form->error($model,'ns2'); ?>
	</div>
        <div class="row">
		<?php echo $form->labelEx($model,'ns3'); ?>
		<?php echo $form->textField($model,'ns3'); ?>
		<?php echo $form->error($model,'ns3'); ?>
	</div>
        <div class="row">
		<?php echo $form->labelEx($model,'ns4'); ?>
		<?php echo $form->textField($model,'ns4'); ?>
		<?php echo $form->error($model,'ns4'); ?>
	</div>
      </div>
        
        <h3 class="breadcrumb ">Administrative Contact of Organization</h3>
        <div class="well">
        <div class="row">
		<?php echo $form->labelEx($adminContact,  '['.VCard::DOMAIN_ADMIN_CONTACT.']wholeName'); ?>
		<?php echo $form->textField($adminContact,'['.VCard::DOMAIN_ADMIN_CONTACT.']wholeName'); ?>
		<?php echo $form->error($adminContact,'['.VCard::DOMAIN_ADMIN_CONTACT.']wholeName'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($adminContact,'['.VCard::DOMAIN_ADMIN_CONTACT.']organizationName'); ?>
		<?php echo $form->textField($adminContact,'['.VCard::DOMAIN_ADMIN_CONTACT.']organizationName'); ?>
		<?php echo $form->error($adminContact,'['.VCard::DOMAIN_ADMIN_CONTACT.']organizationName'); ?>
	</div>
        <div class="row">
		<?php echo $form->labelEx($adminContact,'['.VCard::DOMAIN_ADMIN_CONTACT.']addressLine1'); ?>
		<?php echo $form->textField($adminContact,'['.VCard::DOMAIN_ADMIN_CONTACT.']addressLine1'); ?>
		<?php echo $form->error($adminContact,'['.VCard::DOMAIN_ADMIN_CONTACT.']addressLine1'); ?>
	</div>
        <div class="row">
		<?php echo $form->labelEx($adminContact,'['.VCard::DOMAIN_ADMIN_CONTACT.']addressLine2'); ?>
		<?php echo $form->textField($adminContact,'['.VCard::DOMAIN_ADMIN_CONTACT.']addressLine2'); ?>
		<?php echo $form->error($adminContact,'['.VCard::DOMAIN_ADMIN_CONTACT.']addressLine2'); ?>
	</div>
        <div class="row">
		<?php echo $form->labelEx($adminContact,'['.VCard::DOMAIN_ADMIN_CONTACT.']city'); ?>
		<?php echo $form->textField($adminContact,'['.VCard::DOMAIN_ADMIN_CONTACT.']city'); ?>
		<?php echo $form->error($adminContact,'['.VCard::DOMAIN_ADMIN_CONTACT.']city'); ?>
	</div>
        
         <div class="row">
		<?php echo $form->labelEx($adminContact,'['.VCard::DOMAIN_ADMIN_CONTACT.']postalCode'); ?>
		<?php echo $form->textField($adminContact,'['.VCard::DOMAIN_ADMIN_CONTACT.']postalCode'); ?>
		<?php echo $form->error($adminContact,'['.VCard::DOMAIN_ADMIN_CONTACT.']postalCode'); ?>
	</div>
        
         <div class="row">
		<?php echo $form->labelEx($adminContact,'['.VCard::DOMAIN_ADMIN_CONTACT.']country'); ?>
		<?php echo $form->textField($adminContact,'['.VCard::DOMAIN_ADMIN_CONTACT.']country'); ?>
		<?php echo $form->error($adminContact,'['.VCard::DOMAIN_ADMIN_CONTACT.']country'); ?>
	</div>
        
         <div class="row">
		<?php echo $form->labelEx($adminContact,'['.VCard::DOMAIN_ADMIN_CONTACT.']voicePhone'); ?>
		<?php echo $form->textField($adminContact,'['.VCard::DOMAIN_ADMIN_CONTACT.']voicePhone'); ?>
		<?php echo $form->error($adminContact,'['.VCard::DOMAIN_ADMIN_CONTACT.']voicePhone'); ?>
	</div>
        
        <div class="row">
		<?php echo $form->labelEx($adminContact,'['.VCard::DOMAIN_ADMIN_CONTACT.']electronicMailbox'); ?>
		<?php echo $form->textField($adminContact,'['.VCard::DOMAIN_ADMIN_CONTACT.']electronicMailbox'); ?>
		<?php echo $form->error($adminContact,'['.VCard::DOMAIN_ADMIN_CONTACT.']electronicMailbox'); ?>
	</div>
        </div>
        
        <h3 class="breadcrumb">Technical and Zone Contact</h3>
        <div class="well">
        <div >
		<?php echo $form->labelEx($techContact,'['.VCard::DOMAIN_TECH_CONTACT.']wholeName'); ?>
		<?php echo $form->textField($techContact,'['.VCard::DOMAIN_TECH_CONTACT.']wholeName'); ?>
		<?php echo $form->error($techContact,'['.VCard::DOMAIN_TECH_CONTACT.']wholeName'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($techContact,'['.VCard::DOMAIN_TECH_CONTACT.']organizationName'); ?>
		<?php echo $form->textField($techContact,'['.VCard::DOMAIN_TECH_CONTACT.']organizationName'); ?>
		<?php echo $form->error($techContact,'['.VCard::DOMAIN_TECH_CONTACT.']organizationName'); ?>
	</div>
        <div class="row">
		<?php echo $form->labelEx($techContact,'['.VCard::DOMAIN_TECH_CONTACT.']addressLine1'); ?>
		<?php echo $form->textField($techContact,'['.VCard::DOMAIN_TECH_CONTACT.']addressLine1'); ?>
		<?php echo $form->error($techContact,'['.VCard::DOMAIN_TECH_CONTACT.']addressLine1'); ?>
	</div>
        <div class="row">
		<?php echo $form->labelEx($techContact,'['.VCard::DOMAIN_TECH_CONTACT.']addressLine2'); ?>
		<?php echo $form->textField($techContact,'['.VCard::DOMAIN_TECH_CONTACT.']addressLine2'); ?>
		<?php echo $form->error($techContact,'['.VCard::DOMAIN_TECH_CONTACT.']addressLine2'); ?>
	</div>
        <div class="row">
		<?php echo $form->labelEx($techContact,'['.VCard::DOMAIN_TECH_CONTACT.']city'); ?>
		<?php echo $form->textField($techContact,'['.VCard::DOMAIN_TECH_CONTACT.']city'); ?>
		<?php echo $form->error($techContact,'['.VCard::DOMAIN_TECH_CONTACT.']city'); ?>
	</div>
        
         <div class="row">
		<?php echo $form->labelEx($techContact,'['.VCard::DOMAIN_TECH_CONTACT.']postalCode'); ?>
		<?php echo $form->textField($techContact,'['.VCard::DOMAIN_TECH_CONTACT.']postalCode'); ?>
		<?php echo $form->error($techContact,'['.VCard::DOMAIN_TECH_CONTACT.']postalCode'); ?>
	</div>
        
         <div class="row">
		<?php echo $form->labelEx($techContact,'['.VCard::DOMAIN_TECH_CONTACT.']country'); ?>
		<?php echo $form->textField($techContact,'['.VCard::DOMAIN_TECH_CONTACT.']country'); ?>
		<?php echo $form->error($techContact,'['.VCard::DOMAIN_TECH_CONTACT.']country'); ?>
	</div>
        
         <div class="row">
		<?php echo $form->labelEx($techContact,'['.VCard::DOMAIN_TECH_CONTACT.']voicePhone'); ?>
		<?php echo $form->textField($techContact,'['.VCard::DOMAIN_TECH_CONTACT.']voicePhone'); ?>
		<?php echo $form->error($techContact,'['.VCard::DOMAIN_TECH_CONTACT.']voicePhone'); ?>
	</div>
        
        <div class="row">
		<?php echo $form->labelEx($techContact,'['.VCard::DOMAIN_TECH_CONTACT.']electronicMailbox'); ?>
		<?php echo $form->textField($techContact,'['.VCard::DOMAIN_TECH_CONTACT.']electronicMailbox'); ?>
		<?php echo $form->error($techContact,'['.VCard::DOMAIN_TECH_CONTACT.']electronicMailbox'); ?>
	</div>
        
        <div class="row">
		<?php echo $form->labelEx($techContact,'['.VCard::DOMAIN_TECH_CONTACT.']registrationMailbox'); ?>
		<?php echo $form->textField($techContact,'['.VCard::DOMAIN_TECH_CONTACT.']registrationMailbox'); ?>
		<?php echo $form->error($techContact,'['.VCard::DOMAIN_TECH_CONTACT.']registrationMailbox'); ?>
	</div>
        
        <div class="row">
		<?php echo $form->labelEx($techContact,'['.VCard::DOMAIN_TECH_CONTACT.']faxNumber'); ?>
		<?php echo $form->textField($techContact,'['.VCard::DOMAIN_TECH_CONTACT.']faxNumber'); ?>
		<?php echo $form->error($techContact,'['.VCard::DOMAIN_TECH_CONTACT.']faxNumber'); ?>
	</div>
        </div>
	<div class="row buttons">
		<?php echo CHtml::submitButton('Register',array('class'=>'btn btn-large btn-primary')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->

    <?php
        
//	$this->widget('zii.widgets.jui.CJuiAccordion',array(
//	    'panels'=>array(
//                 'Domain Information'=>$this->renderPartial("_domainInfo",
//                        array("form"=>$form,"model"=>$model),true),
//	         'Administrative Contact of Organization'=>$this->renderPartial("_adminContact",
//                        array("form"=>$form,"adminContact"=>$adminContact),true),
//                 'Technical and Zone Contact'=>$this->renderPartial("_techContact",
//                        array("form"=>$form,"techContact"=>$techContact),true),
//	       
//                    
//	    ),
//	    // additional javascript options for the accordion plugin
//	    'options'=>array(
//	        'animated'=>'bounceslide',
//	        'style'=>array('minHeight'=>'100',),
//	    ),
//            
//	     
//	));
        
    ?>



<?php endif; ?>
