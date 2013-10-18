<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DomainLookup
 *
 * @author robert
 */
class DomainLookup extends CFormModel{
    //put your code here
    public $domain;
    public $sld;
    
    public function rules(){
        return array(
            array('domain, sld','required'),
            
        );
    }
    
    public function attributeLabels(){
        array(
            'domain'=>'Domain name',
            'sld'=>'Sld',
        );
    }
}

?>
