<?php

/**
 *
 * @author robert
 */
interface IRegistry {
    //put your code here
    
    function checkContact($contact_id);
    function checkDomain($domain);
    function checkKeyset();
    function checkNsset();
    function createContact($vcard);
    function createDomain($domain,$techContact,$adminContact);
    function createKeyset();
    function createNsset($domain);
    function creditInfo();
    function deleteContact();
    function deleteDomain();
    function deleteKeyset();
    function deleteNsset();
    function getResults();
    function hello();
    function infoContact();
    function infoDomain($domain);
    function infoKeyset();
    function infoNsset();
    function listContacts();
    function listDomains();
    function listKeysets();
    function listNssets();
    function login();
    function logout();
    function poll();
    function prepContacts();
    function prepDomains();
    function prepDomainsByContact();
    function prepDomainsByKeyset();
    function prepDomainsByNsset();
    function prepKeysets();
    function prepKeysetsByContact();
    function prepNssets();
    function prepNssetByContact();
    function prepNssetByNs();
    function renewDomain($domain,$period);
    function sendAuthInfoContact();
    function sendAuthInfoDomain();
    function sendAuthInfoKeyset();
    function sendAuthInfoNsset();
    function technicalTest();
    function transferContact();
    function transferDomain();
    function transferKeyset();
    function transferNsset();
    function updateContact();
    function updateDomain();
    function updateKeyset();
    function updateNsset();
    
    
}

?>
