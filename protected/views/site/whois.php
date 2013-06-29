<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<div class="center hero-unit">

<div class="row buttons" style="float:left">
         <?php echo CHtml::textField('','',array('style'=>'width:300px;height:35px;font-size:20px;')); ?>
         <?php echo CHtml::dropDownList('','',  IkelRegistry::getSldList(),array('style'=>'width:80px;height:45px;font-size:20px;'));?>
         <?php echo CHtml::linkButton('Check domain',array('class'=>'btn btn-large btn-primary','style'=>'margin-top:-10px;')); ?>
        
	        
  </div>

<h3><?php //echo $fred_reason;?></h3>
  <table>
   <tr>
    <td><?php echo $data['labels']['domain:name'];?></td>
    <td><?php echo $data['values']['domain:name'];?></td>
  </tr>

 <tr>
    <td><?php echo $data['labels']['domain:roid'];?></td>
    <td><?php echo $data['values']['domain:roid'] ;?></td>
  </tr>

 <tr>
    <td><?php echo $data['labels']['domain:crID'] ;?></td>
    <td><?php echo $data['values']['domain:crID'] ;?></td>
  </tr>

 <tr>
    <td><?php echo $data['labels']['domain:clID'];?></td>
    <td><?php echo $data['values']['domain:clID'] ;?></td>
  </tr>

 <tr>
    <td><?php echo $data['labels']['domain:upID'];?></td>
    <td><?php echo $data['values']['domain:upID'] ;?></td>
  </tr>

 <tr>
    <td><?php echo $data['labels']['domain:crDate'];?></td>
    <td><?php echo $data['values']['domain:crDate'] ;?></td>
  </tr>

 <tr>
    <td><?php echo $data['labels']['domain:trDate'] ;?></td>
    <td><?php echo $data['values']['domain:trDate'] ;?></td>
  </tr>

 <tr>
    <td><?php echo $data['labels']['domain:upDate'];?></td>
    <td><?php echo $data['values']['domain:upDate'] ;?></td>
  </tr>

 <tr>
    <td><?php echo $data['labels']['domain:exDate'];?></td>
    <td><?php echo $data['values']['domain:exDate'] = '2011-12-22';?></td>
  </tr>

 </table>
	
 <?php echo CHtml::linkButton('Register for an API key',array('class'=>'btn btn-large btn-primary')); ?>
</div>