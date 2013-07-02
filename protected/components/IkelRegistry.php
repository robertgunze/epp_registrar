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
    

public function checkContact($contact_id){

  $xml ='<?xml version="1.0" encoding="utf-8" standalone="no"?>
        <epp xmlns="urn:ietf:params:xml:ns:epp-1.0" 
        xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" 
        xsi:schemaLocation="urn:ietf:params:xml:ns:epp-1.0 epp-1.0.xsd">
        <command>
        <check>
            <contact:check 
               xmlns:contact="http://www.nic.cz/xml/epp/contact-1.6" 
               xsi:schemaLocation="http://www.nic.cz/xml/epp/contact-1.6 contact-1.6.xsd">
              <contact:id>'.$contact_id.'</contact:id>
            </contact:check>
        </check>
<clTRID>eyjz002#13-06-29at22:52:44</clTRID>
</command>
</epp>

   ';
  
  $client = $this->ikeltz_Client();
  $result = $client->request($xml);
  
  $doc = new DOMDocument;
  $doc->loadXML($result);
  $coderes = $doc->getElementsByTagName('result')->item(0)->getAttribute('code');
  $msg = $doc->getElementsByTagName('msg')->item(0)->nodeValue;
  $reason = $doc->getElementsByTagName('reason')->item(0)->nodeValue;
  
  if(!$coderes == 1000){
             echo "<pre>";
             echo "Code {$coderes} {$msg}<br />";
             echo "</pre>";
  }
  else{
             echo "<pre>";
             echo "Code {$coderes} {$msg}<br />";
             echo "Status: Contact {$reason}";
             echo "</pre>";
  }
}

public function checkDomain($domain){
     $xml ='<?xml version="1.0" encoding="utf-8" standalone="no"?>
         <epp xmlns="urn:ietf:params:xml:ns:epp-1.0" 
              xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" 
              xsi:schemaLocation="urn:ietf:params:xml:ns:epp-1.0 epp-1.0.xsd">
              <command>
                 <check>
                     <domain:check 
                        xmlns:domain="http://www.nic.cz/xml/epp/domain-1.4" 
                        xsi:schemaLocation="http://www.nic.cz/xml/epp/domain-1.4 domain-1.4.xsd">
                           <domain:name>'.$domain.'</domain:name>
                     </domain:check>
                </check>
                <clTRID>ehcu002#13-06-29at23:37:45</clTRID>
              </command>
        </epp>

   ';
  
  $client = $this->ikeltz_Client();
  $result = $client->request($xml);
  
  $doc = new DOMDocument;
  $doc->loadXML($result);
  $coderes = $doc->getElementsByTagName('result')->item(0)->getAttribute('code');
  $msg = $doc->getElementsByTagName('msg')->item(0)->nodeValue;
  $available = $doc->getElementsByTagName('name')->item(0)->getAttribute('avail');
  $status = $available?'Available':'Taken';
  $response = array();
  if(!$coderes == 1000){
             
             $response['error']['msg'] = "Code {$coderes} {$msg}";
//             echo "<pre>";
//             echo "Code {$coderes} {$msg}<br />";
//             echo "</pre>";
  }
  else{
             $response['success']['msg'] = "Status: Domain {$status}";
//             echo "<pre>";
//             echo "Code {$coderes} {$msg}<br />";
//             echo "Status: Domain {$status}";
//             echo "</pre>";
  }
  
  return $response;
}

public function checkKeyset(){
}

public function checkNsset(){
}

public function createContact(){
    
}

public function createDomain($domain,$techContact,$adminContact){
    
    $xml = '<?xml version="1.0" encoding="utf-8" standalone="no"?>
        <epp xmlns="urn:ietf:params:xml:ns:epp-1.0" 
        xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" 
        xsi:schemaLocation="urn:ietf:params:xml:ns:epp-1.0 epp-1.0.xsd">
        <command>
            <create>
                <domain:create 
                xmlns:domain="http://www.nic.cz/xml/epp/domain-1.4" 
                xsi:schemaLocation="http://www.nic.cz/xml/epp/domain-1.4 domain-1.4.xsd">
                    <domain:name>'.$domain->name.'mamamiya.cz</domain:name>
                    <domain:period unit="y">3</domain:period>
                    <domain:registrant>CID:IKEL</domain:registrant>
                    <domain:admin>IKEL</domain:admin>
                    <domain:authInfo>drobyg3</domain:authInfo>
                </domain:create>
            </create>
            <clTRID>jzei002#13-07-02at15:12:19</clTRID>
        </command>
</epp>';
    
    $client = $this->ikeltz_Client();
    $result = $client->request($xml);
    
    $doc = new DOMDocument;
    $doc->loadXML($result);
    $coderes = $doc->getElementsByTagName('result')->item(0)->getAttribute('code');
    $msg = $doc->getElementsByTagName('msg')->item(0)->nodeValue;

    $response = array();
    if(!$coderes == 1000){

               $response['error']['msg'] = "Code {$coderes} {$msg}";
    }
    else{
               $response['success']['msg'] = "{$msg}";
    }
    
    return $response;
    
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

public function renewDomain($domain,$period){
$client = $this->ikeltz_Client();
 
$xml = '<?xml version="1.0" encoding="utf-8" standalone="no"?>
    <epp xmlns="urn:ietf:params:xml:ns:epp-1.0" 
         xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" 
         xsi:schemaLocation="urn:ietf:params:xml:ns:epp-1.0 epp-1.0.xsd">
         
    <command>
       <info>
         <domain:info xmlns:domain="http://www.nic.cz/xml/epp/domain-1.4" 
                 xsi:schemaLocation="http://www.nic.cz/xml/epp/domain-1.4 domain-1.4.xsd">
         <domain:name>'.$domain.'</domain:name>
         </domain:info>
       </info>
     <clTRID>vapk002#13-06-29at19:20:49</clTRID>
    </command>
</epp>';
 $result = $client->request($xml);
 
 
 $doc = new DOMDocument;
 $doc->loadXML($result);
 $coderes = $doc->getElementsByTagName('result')->item(0)->getAttribute('code');
 $msg = $doc->getElementsByTagName('msg')->item(0)->nodeValue;
  if(!$coderes == 1000){
       $values["error"] = "Code (".$coderes.") ".$msg;
  }elseif($coderes == 2303){
             echo "<pre>";
             echo "Code (".$coderes.") ".$msg.'<br />';
             echo "</pre>";
  }
  else{
      
      //echo "Code (".$coderes.") ".$msg;
      $expDate = substr($doc->getElementsByTagName('exDate')->item(0)->nodeValue,0,10);
      //echo $expDate;
      
      //send request to renew
      $xml = '<?xml version="1.0" encoding="utf-8" standalone="no"?>
          <epp xmlns="urn:ietf:params:xml:ns:epp-1.0" 
          xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" 
          xsi:schemaLocation="urn:ietf:params:xml:ns:epp-1.0 epp-1.0.xsd">
          <command>
           <renew>
             <domain:renew 
               xmlns:domain="http://www.nic.cz/xml/epp/domain-1.4" 
               xsi:schemaLocation="http://www.nic.cz/xml/epp/domain-1.4 domain-1.4.xsd">
              <domain:name>'.$domain.'</domain:name>
              <domain:curExpDate>'.$expDate.'</domain:curExpDate>
              <domain:period unit="y">'.$period.'</domain:period>
            </domain:renew>
           </renew>
           <clTRID>zoqj002#13-06-29at20:52:17</clTRID>
         </command>
      </epp>';
      
        $domainRenew = $client->request($xml);
        $doc = new DOMDocument;
        $doc->loadXML($domainRenew);
        $coderes = $doc->getElementsByTagName('result')->item(0)->getAttribute('code');
        $msg = $doc->getElementsByTagName('msg')->item(0)->nodeValue;
        //$reason = $doc->getElementsByTagName('reason')->item(0)->nodeValue;
         if(!$coderes == 1000){
              $values["error"] = "Code (".$coderes.") ".$msg."<br />";
         }

         else{

             echo "<pre>";
             echo "Code (".$coderes.") ".$msg.'<br />';
             //echo $reason;
             echo "</pre>";
             
         }
      
  }
 
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


//non xml implementation: relies on running command through php passthrough function
public function createCommand($cmd){
    $command = "/var/www/epp_registrar/fred-client-2.4/fred-client --command='{$cmd}' --output=php > /tmp/output.php";
    return $command;
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

public function ikeltz_Client(){
            
        $eppPath = Yii::getPathOfAlias('application.components.epp.Net.EPP');
        spl_autoload_unregister(array('YiiBase','autoload'));        
        include($eppPath . DIRECTORY_SEPARATOR . 'Client.php');

        $client = new Net_EPP_Client;
           
        $ctx = stream_context_create();
        stream_context_set_option($ctx, 'ssl', 'local_cert', dirname(__FILE__).'/test-key.pem');
        $res = $client->connect('demo.fred.nic.cz', 700, 10, true,$ctx);
                
            # Perform login
        $params['Username'] = 'REG-FRED_A';
        $params['Password'] = 'passwd';
	$result = $client->request('
                    <epp xmlns="urn:ietf:params:xml:ns:epp-1.0">
                            <command>
                                    <login>
                                            <clID>'.$params['Username'].'</clID>
                                            <pw>'.$params['Password'].'</pw>
                                            <options>
                                            <version>1.0</version>
                                            <lang>en</lang>
                                            </options>
                                            <svcs>
                                                    <objURI>urn:ietf:params:xml:ns:domain-1.0</objURI>
                                                    <objURI>urn:ietf:params:xml:ns:contact-1.0</objURI>
                                            </svcs>
                                    </login>
                            </command>
                    </epp>
                   ');
        
        spl_autoload_register(array('YiiBase','autoload'));
        
       
	return $client;
     
        }

}

?>
