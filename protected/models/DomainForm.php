<?php

/**
 * Description of Domain
 *
 * @author robert
 */
class DomainForm extends CFormModel{
    //put your code here
    public $name;
    public $ns1;
    public $ns2;
    public $ns3;
    public $ns4;
    
    
    public function rules(){
        return array(
            array('name, ns1, ns2','required'),
            );
    }
    
    
    public function attributeLabels(){
        return array(
            'name'=>'Domain Name',
        );
    }
    
}

?>
