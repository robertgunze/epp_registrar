<?php
/**
 * Description of VCard
 *
 * @author robert
 */
class VCard extends CFormModel{
    //put your code here
    public $wholeName;
    public $organizationName;
    public $addressLine1;
    public $addressLine2;
    public $city;
    public $postalCode;
    public $country;
    public $voicePhone;
    public $electronicMailbox;
    public $registrationMailbox;
    public $faxNumber;
    
    const DOMAIN_ADMIN_CONTACT = 1;
    const DOMAIN_TECH_CONTACT = 2;
    
    public function rules(){
        return array(
            array('wholeName, addressLine1, city, postalCode, 
                country, voicePhone, electronicMailbox','required'),
        );
    }
    
    public function attributeLabels(){
        return array(
            'wholeName'=>'Full Name',
            'organizationName'=>'Organization Name',
            'addressLine1'=>'Address Line 1',
            'addressLine2'=>'Address Line 2',
            'city'=>'City',
            'postalCode'=>'Postal Code',
            'country'=>'Country',
            'voicePhone'=>'Voice Phone',
            'electronicMailbox'=>'Electronic Mailbox',
            'registrationMailbox'=>'Registration Mailbox',
            'faxNumber'=>'Fax Number'
        );
    }
    
}

?>
