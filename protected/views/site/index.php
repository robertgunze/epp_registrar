<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
$this->breadcrumbs=array(
);
?>

<?php if(Yii::app()->user->hasFlash('domain')):?>
                    <div class="alert alert-info"><?php echo Yii::app()->user->getFlash('domain'); ?></div>
                    <?php 
//                        Yii::app()->clientScript->registerScript(
//                                'fadeAndHideEffect',
//                                '$(".alert-info").animate({opacity: 1.0},2000).fadeOut("slow");'
//                                
//                                );
                    ?>
<?php endif;?>
                    
<div class="well">
    
    
     <?php $this->renderPartial('_lookup',array('lookup'=>$lookup));?>
     
                    <br />
                    <br />
                    <br />
                    <br />
                      
</div>
