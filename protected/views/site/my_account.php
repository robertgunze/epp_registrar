<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>

<table class="table">
    <tr>
     <td><b>Name</b></td> 
     <td><b>Date Registered</b></td> 
     <td><b>Date of Expiry</b></td> 
     <td></td>
    </tr>
<?php $this->widget('bootstrap.widgets.TbListView', array(
	'dataProvider'=>$domainsDataProvider,
	'itemView'=>'_domainView',
)); ?>
</table>