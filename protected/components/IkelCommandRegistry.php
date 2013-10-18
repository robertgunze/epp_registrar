<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of IkelCommandRegistry
 *
 * @author robert
 */
class IkelCommandRegistry implements IRegistry{
    
       //non xml implementation: relies on running command through php passthrough function
    public function createCommand($cmd){
        $command = Yii::app()->params['fred-client-path'].
        "/fred-client  --command='{$cmd}' --output=php > /tmp/output_".
        sha1(Yii::app()->user->id).".php";
        
        return $command;
    }
    
    private function processOutput(){
        
        $userID = sha1(Yii::app()->user->id);
        $content =  file_get_contents('/tmp/output_'.$userID.'.php');
        $content = '<?php '.$content. '?>';
        file_put_contents('/tmp/output_'.$userID.'.php', $content);
        require '/tmp/output_'.$userID.'.php';

        $data = array();
        $data['labels']= $fred_labels;
        $data['values'] = $fred_data;
        $data['attributes'] = $fred_data_attrib;

        return $data;
    }

    public static function getSldList(){
        return array(
            '.co.tz'=>'.co.tz',
            '.or.tz'=>'.or.tz',
            '.ac.tz'=>'.ac.tz',
            '.go.tz'=>'.go.tz',
            '.sc.tz'=>'.sc.tz',
            '.ne.tz'=>'.ne.tz',
            '.mil.tz'=>'.mil.tz',
            '.cz'=>'.cz',

        );
    }
    
    public function checkContact($contact_id) {
        
    }

    public function checkDomain($domain) {
        $command = $this->createCommand("check_domain {$domain}");
        passthru($command);
        return $this->processOutput();
    }

    public function checkKeyset() {
        
    }

    public function checkNsset() {
        
    }

    public function createContact($vcard) {
        
        $command = $this->createCommand('create_contact '.
                'IKEL-CONTACT-ID-'.rand(1000, 9999).
                ' "'.$vcard->wholeName.'" '. 
                $vcard->electronicMailbox .' '.
                ' "'.$vcard->addressLine1.'" '.
                ' "'.$vcard->city.'" '.
                $vcard->postalCode.'  '.
                $vcard->country.'  NULL  '.
                ' "'.$vcard->organizationName.'" '. ' NULL '. 
                $vcard->voicePhone. ' NULL () NULL () '.
                $vcard->electronicMailbox
                
                );
        
        passthru($command);
        return $this->processOutput();
    }

    public function createDomain($domain, $techContact, $adminContact) {
        $result = $this->createContact($techContact);
        $techContactID = $result['values']['contact:id'];
        $result = $this->createContact($adminContact);
        $adminContactID = $result['values']['contact:id'];
        $result = $this->createNsset($domain);
        $nssetId = $result['values']['nsset:id'];
        $command = $this->createCommand("create_domain {$domain->name} IKEL NULL {$nssetId} NULL (1 y) {$techContactID}");
        passthru($command);
        return $this->processOutput();
    }

    public function createKeyset() {
        
    }

    public function createNsset($domain) {
        $command = $this->createCommand("create_nsset NSIKEL".  rand(1000, 9999)." (({$domain->ns1}), ($domain->ns2)) IKEL");
        passthru($command);
        return $this->processOutput();
    }

    public function creditInfo() {
        
    }

    public function deleteContact() {
        
    }

    public function deleteDomain() {
        
    }

    public function deleteKeyset() {
        
    }

    public function deleteNsset() {
        
    }

    public function getResults() {
        
    }

    public function hello() {
        
    }

    public function infoContact() {
        
    }

    public function infoDomain($domain) {
        $command = $this->createCommand("info_domain {$domain}");
        passthru($command);
        return $this->processOutput();
    }

    public function infoKeyset() {
        
    }

    public function infoNsset() {
        
    }

    public function listContacts() {
        
    }

    public function listDomains() {
        
    }

    public function listKeysets() {
        
    }

    public function listNssets() {
        
    }

    public function login() {
        
    }

    public function logout() {
        
    }

    public function poll() {
        
    }

    public function prepContacts() {
        
    }

    public function prepDomains() {
        
    }

    public function prepDomainsByContact() {
        
    }

    public function prepDomainsByKeyset() {
        
    }

    public function prepDomainsByNsset() {
        
    }

    public function prepKeysets() {
        
    }

    public function prepKeysetsByContact() {
        
    }

    public function prepNssetByContact() {
        
    }

    public function prepNssetByNs() {
        
    }

    public function prepNssets() {
        
    }

    public function renewDomain($domain, $period) {
        $domainInfo = $this->infoDomain($domain);
        $expiryDate = $domainInfo['values']['domain:exDate'];
        $command = $this->createCommand("renew_domain {$domain} {$expiryDate} ({$period} y)");
        passthru($command);
        return $this->processOutput();
    }

    public function sendAuthInfoContact() {
        
    }

    public function sendAuthInfoDomain() {
        
    }

    public function sendAuthInfoKeyset() {
        
    }

    public function sendAuthInfoNsset() {
        
    }

    public function technicalTest() {
        
    }

    public function transferContact() {
        
    }

    public function transferDomain() {
        
    }

    public function transferKeyset() {
        
    }

    public function transferNsset() {
        
    }

    public function updateContact() {
        
    }

    public function updateDomain() {
        
    }

    public function updateKeyset() {
        
    }

    public function updateNsset() {
        
    }
  
}

?>
