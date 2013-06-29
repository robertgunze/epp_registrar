<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Registry
 *
 * @author robert
 */
class IkelRegistry implements IRegistry{
    //put your code here

public function checkContact(){
}

public function checkDomain(){
}

public function checkKeyset(){
}

public function checkNsset(){
}

public function createContact(){
}

public function createDomain(){
}

public function createKeyset(){
}

public function createNsset(){
}

public function creditInfo(){
}

public function deleteContact(){
}

public function deleteDomain(){
}

public function deleteKeyset(){
}

public function deleteNsset(){
}

public function getResults(){
}

public function hello(){
}

public function infoContact(){
}

public function infoDomain($domain){
 $result = '';
 $command = $this->createCommand("info_domain {$domain}");
 
 passthru($command, $result);
 
 $content =  file_get_contents('/tmp/output.php');
 $content = '<?php '.$content. '?>';
 file_put_contents('/tmp/output.php', $content);
 require_once '/tmp/output.php';
 
 $data = array();
 $data['labels']= $fred_labels;
 $data['values'] = $fred_data;
 
 return $data;
 
 
}

public function infoKeyset(){
}

public function infoNsset(){
}

public function listContacts(){
}

public function listDomains(){
}

public function listKeysets(){
}

public function listNssets(){
}

public function login(){
}

public function logout(){
}

public function poll(){
}

public function prepContacts(){
}

public function prepDomains(){
}

public function prepDomainsByContact(){
}

public function prepDomainsByKeyset(){
}

public function prepDomainsByNsset(){
}

public function prepKeysets(){
}

public function prepKeysetsByContact(){
}

public function prepNssetByContact(){
}

public function prepNssetByNs(){
}

public function prepNssets(){
}

public function renewDomain(){
}

public function sendAuthInfoContact(){
}

public function sendAuthInfoDomain(){
}

public function sendAuthInfoKeyset(){
}

public function sendAuthInfoNsset(){
}

public function technicalTest(){
}

public function transferContact(){
}

public function transferDomain(){
}

public function transferKeyset(){
}

public function transferNsset(){
}

public function updateContact(){
}

public function updateDomain(){
}

public function updateKeyset(){
}

public function updateNsset(){
}


public function createCommand($cmd){
    $command = "/var/www/epp_registrar/fred-client-2.4/fred-client --command='{$cmd}' --output=php > /tmp/output.php";
    return $command;
}

public static function getSldList(){
    return array(
        '.co.tz',
        '.ac.tz',
        '.go.tz',
        '.sc.tz',
    );
}

}

?>
