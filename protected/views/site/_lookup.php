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
    <div class="input-prepend">
         <span class="add-on" style="height:35px;"></span>
         <?php echo $form->textField($lookup,'domain',array('style'=>'width:300px;height:35px;font-size:20px;')); ?>
         
    </div>
         <?php echo $form->dropDownList($lookup,'sld',  IkelRegistry::getSldList(),array('style'=>'width:80px;height:45px;font-size:20px;'));?>
         <?php echo CHtml::submitButton('Lookup',array('class'=>'btn btn-large btn-primary','style'=>'margin-top:-10px;')); ?>
         <?php echo $form->error($lookup,'domain');?>
</div>

<?php $this->endWidget();?>

