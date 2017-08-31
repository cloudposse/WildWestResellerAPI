<?php

include_once( __DIR__ . '/vendor/autoload.php' );

$generator = new \Wsdl2PhpGenerator\Generator();
$generator->generate(
  new \Wsdl2PhpGenerator\Config(array(
    'inputFile' => 'https://api.wildwestdomains.com/wswwdapi/wapi.asmx?WSDL',
    'outputDir' => __DIR__ . '/src',
    'namespaceName' => 'cloudposse\wild_west_reseller_api',
    'sharedTypes' => true,
    'soapClientOptions' => array('features' => SOAP_SINGLE_ELEMENT_ARRAYS),
  ))
);