

            <tr>
               
                <td><?php echo CHtml::link(CHtml::encode($data->name), array('view', 'id'=>$data->name)); ?></td> 
                <td><?php echo CHtml::encode($data->date_registered); ?></td>
                <td><?php echo CHtml::encode($data->date_of_expiry); ?></td>
                <td>
                    <?php echo CHtml::link('Renew',$this->createUrl('site/renewDomain',array('domain'=>$data->name)),array('class'=>'btn btn-success')); ?>
                    <?php echo CHtml::link('Change Nameservers','',array('class'=>'btn btn-info')); ?>
                    <?php echo CHtml::link('View Details','',array('class'=>'btn btn-inverse')); ?>
                </td>
             
            </tr>
        

