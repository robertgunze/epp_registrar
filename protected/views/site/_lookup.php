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
<div class="row" style="margin-left: 25%">
    <div class="input-prepend">
         <span class="add-on" style="height:20px;"></span>
         <?php echo $form->textField($lookup,'domain',array('style'=>'width:300px;','placeholder'=>'Enter domain name')); ?>
         
    </div>
         <?php echo $form->dropDownList($lookup,'sld',  IkelRegistry::getSldList(),array('style'=>'width:70px;'));?>
         <?php echo CHtml::submitButton('Lookup',array('class'=>'btn btn-info','style'=>'margin-top:-10px;')); ?>
         <?php echo $form->error($lookup,'domain');?>
</div>

<?php $this->endWidget();?>

     <?php echo TbHtml::carousel(array(
    array(
        'image' => 'http://placehold.it/1200x400',
        'label' => 'Domain registration made simple',
        'caption' => 'We use superior technology to make your business grow faster by helping you have online presence reliably faster'
        ),
    array('image' => 'http://placehold.it/1200x400', 
        'label' => 'Award-winning 24/7 support',
        'caption' => 'We have helped thousands of people create a successful Web presence. Chat, email or call '),
    array('image' => 'http://placehold.it/1200x400', 
        'label' => 'Consulting', 
        'caption' => 'We offer consulting services in the domains of mobile money integration services, e-commerce and payment gateways'),
    )); ?>

 <table style="width:100%;height:200px;">
                                <tr >
                                    <td style="background-color:#636563; width:33%;color:white;font-size:12px;text-align: center;"> 
                                        <span>
                                            <h3>Web-hosting Services</h3>
                                            <p>
                                                The web servers we use are extremely fast compared to many other hosting companies, crucial in a commercial environment. Basically, the faster the servers, the faster the web pages appear:
                                            </p>
                                            <ul style="text-align:left">
                                                
                                             </ul>
                              <input style="height:50px;" class="btn btn-info" name="yt0" type="button" value="Purchase Hosting Plan" />                                        </span>

                                    </td>
                                    <td style="background-color:#359BB9;font-size:12px;text-align: center;">
                                         <span>
                                            <h3>Domain Registration</h3>
                                            <p>
                                                Get a hold of a new domain to take your business to the next level:
                                            </p>
                                            <ul style="text-align:left">
                                                <li>Register domain name</li>
                                                <li>Choose your hosting plan</li>
                                                <li>Purchase hosting plan with mobile money</li>
                                                <li>Upload your site</li>
                                                <li>Go live</li>
                                             </ul>
                                  <input style="height:50px;" class="btn btn-inverse btn-primary" name="yt1" type="button" value="Purchase Domain" />                                        </span>
                                    </td>
                                    <td style="background-color:#D6E3B5;font-size:12px;text-align: center;">
                                         <span>
                                            <h3>Reliable Email</h3>
                                            <p>
                                                Take care of business with reliable email:
                                            </p>
                                            <ul style="text-align:left">

                                                <li>Look like a pro with you@yourdomain.co.tz</li>
                                                <li>Access email from any mobile device</li>
                                                <li>Get expert support 24/7</li>
                                             </ul>
                               <input style="height:50px;" class="btn btn-info" name="yt2" type="button" value="Get Email Service" />                                        </span>
                                    </td>
                                </tr>
                            </table><br/><br />