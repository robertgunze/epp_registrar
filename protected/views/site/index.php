<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<h1>Welcome to <i><?php echo CHtml::encode(Yii::app()->name); ?></i></h1>

<?php $client = $this->ikeltz_Client(); ?>

<p>EPP is the Extensible Provisioning Protocol. EPP (defined in RFC 5730 and subsequent documents) is an application layer client-server protocol for the provisioning and management of objects stored in a shared central repository.</p> 
<p>Specified in XML, the protocol defines generic object management operations and an extensible framework that maps protocol operations to objects. As of writing, its only well-developed application is the provisioning of Internet domain names, hosts, and related contact details.

RFC 3734 defines a TCP based transport model for EPP, and the Net_EPP_Client class included in this distribution implements a client for that model.</p>
<p>You can establish and manage EPP connections and send and receive responses over these connections.

Net_EPP also provides a high-level EPP frame builder (Net_EPP_Frame) which can be used to construct frames that comply with the EPP specification and can be used to interact with a server.
</p>