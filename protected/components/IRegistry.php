<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author robert
 */
interface IRegistry {
    //put your code here
    
    function checkContact();
    function checkDomain();
    function checkKeyset();
    function checkNsset();
    function createContact();
    function createDomain();
    function createKeyset();
    function createNsset();
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
    function renewDomain();
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
