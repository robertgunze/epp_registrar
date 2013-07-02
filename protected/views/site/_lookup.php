<?php 
      $form = $this->beginWidget('CActiveForm',array(
          'id'=>'lookup-form',
          'enableClientValidation'=>true,
          'clientOptions'=>array(
              'validateOnSubmit'=>true,
          ),
          
        )
              
      );
?>
<div class="row" style="float:left">
         <?php echo $form->error($lookup,'domain');?>
         <?php echo $form->textField($lookup,'domain',array('style'=>'width:300px;height:35px;font-size:20px;')); ?>
         <?php echo $form->dropDownList($lookup,'sld',  IkelRegistry::getSldList(),array('style'=>'width:80px;height:45px;font-size:20px;'));?>
         <?php echo CHtml::submitButton('Lookup',array('class'=>'btn btn-large btn-primary','style'=>'margin-top:-10px;')); ?>
</div>

<?php $this->endWidget();?>

