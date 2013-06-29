<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<div class="center hero-unit">
<h1>Welcome to <i><?php echo CHtml::encode(Yii::app()->name); ?></i></h1>
<?php $client = $this->ikeltz_Client();
 $xml = '
     <epp xmlns="urn:ietf:params:xml:ns:epp-1.0"
       xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
       xsi:schemaLocation="urn:ietf:params:xml:ns:epp-1.0
       epp-1.0.xsd">
    <hello/>
  </epp>
';
 
 $xml = '
  <epp xmlns="urn:ietf:params:xml:ns:epp-1.0">
  <command>
    <check>
      <domain:check
       xmlns:domain="urn:ietf:params:xml:ns:domain-1.0">
        <domain:name>nominet.org.uk</domain:name>
      </domain:check>
    </check>
    <clTRID>ABC-12345</clTRID>
  </command>
</epp>
';
 
 $xml = '<?xml version="1.0" encoding="UTF-8" standalone="no"?>
   <epp xmlns="urn:ietf:params:xml:ns:epp-1.0">
     <command>
       <logout/>
       <clTRID>ABC-12345</clTRID>
     </command>
   </epp>
';
 
 $result = $client->request($xml);
 print_r($result);
 
 
?>

<p>EPP is the Extensible Provisioning Protocol. EPP (defined in RFC 5730 and subsequent documents) is an application layer client-server protocol for the provisioning and management of objects stored in a shared central repository.</p> 
<p>Specified in XML, the protocol defines generic object management operations and an extensible framework that maps protocol operations to objects. As of writing, its only well-developed application is the provisioning of Internet domain names, hosts, and related contact details.

	<div class="row buttons" style="float:right">
		<?php echo CHtml::linkButton('Register for an API key',array('class'=>'btn btn-large btn-primary')); ?>
	        <?php echo CHtml::linkButton('Login to buy .tz domain',array('class'=>'btn btn-large btn-primary')); ?>
        </div>

</div>