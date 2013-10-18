<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DomainRenewal
 *
 * @author robert
 */
class DomainRenewal extends CFormModel{
    //put your code here
    public $domain;
    public $period;
    
    public function rules(){
        return array(
            array('domain, period','required'),
            
        );
    }
    
    public function attributeLabels(){
        array(
            'domain'=>'Domain name',
            'period'=>'Period in Years',
        );
    }
}

?>
