<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
$this->breadcrumbs=array(
	'Home',
);
?>

<div class="center hero-unit">
    <?php if(Yii::app()->user->hasFlash('domain')):?>
                    <div class="alert alert_success"><?php echo Yii::app()->user->getFlash('domain'); ?></div>
                    <?php 
                        Yii::app()->clientScript->registerScript(
                                'fadeAndHideEffect',
                                '$(".alert_success").animate({opacity: 1.0},2000).fadeOut("slow");'
                                
                                );
                    ?>
     <?php endif;?>
     <?php $this->renderPartial('_lookup',array('lookup'=>$lookup));?>
    

<br /><br />
<div class="well">
    <img style="width:170px; height:170px" src="<?php echo Yii::app()->request->baseUrl;?>/images/DomExpProt.png" class="img-polaroid">
    <img style="width:170px; height:170px" src="<?php echo Yii::app()->request->baseUrl;?>/images/domain-names.jpg" class="img-polaroid">
    <img style="width:170px; height:170px" src="<?php echo Yii::app()->request->baseUrl;?>/images/domain-names.jpg" class="img-polaroid">
    <img style="width:170px; height:170px" src="<?php echo Yii::app()->request->baseUrl;?>/images/icann.jpg" class="img-polaroid">
</div>
<div class="well">
    <p>EPP is the Extensible Provisioning Protocol. EPP (defined in RFC 5730 and subsequent documents) is an application layer client-server protocol for the provisioning and management of objects stored in a shared central repository.</p> 
</div>
 <div class="row buttons" style="float:right">
		<?php echo CHtml::linkButton('Register for an API key',array('class'=>'btn btn-large btn-primary')); ?>
	        <?php echo CHtml::linkButton('Login to buy .tz domain',array('class'=>'btn btn-large btn-primary')); 
                ?>
 </div>


<br/><br />
<div class="well">
   
</div>

	

</div>