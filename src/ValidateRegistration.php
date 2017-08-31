<?php

namespace cloudposse\wild_west_reseller_api;

class ValidateRegistration
{

    /**
     * @var string $sCLTRID
     */
    protected $sCLTRID = null;

    /**
     * @var Credential $credential
     */
    protected $credential = null;

    /**
     * @var DomainContacts $domainContacts
     */
    protected $domainContacts = null;

    /**
     * @var ArrayOfDomainData $domainDataArray
     */
    protected $domainDataArray = null;

    /**
     * @param string $sCLTRID
     * @param Credential $credential
     * @param DomainContacts $domainContacts
     * @param ArrayOfDomainData $domainDataArray
     */
    public function __construct($sCLTRID, $credential, $domainContacts, $domainDataArray)
    {
      $this->sCLTRID = $sCLTRID;
      $this->credential = $credential;
      $this->domainContacts = $domainContacts;
      $this->domainDataArray = $domainDataArray;
    }

    /**
     * @return string
     */
    public function getSCLTRID()
    {
      return $this->sCLTRID;
    }

    /**
     * @param string $sCLTRID
     * @return \cloudposse\wild_west_reseller_api\ValidateRegistration
     */
    public function setSCLTRID($sCLTRID)
    {
      $this->sCLTRID = $sCLTRID;
      return $this;
    }

    /**
     * @return Credential
     */
    public function getCredential()
    {
      return $this->credential;
    }

    /**
     * @param Credential $credential
     * @return \cloudposse\wild_west_reseller_api\ValidateRegistration
     */
    public function setCredential($credential)
    {
      $this->credential = $credential;
      return $this;
    }

    /**
     * @return DomainContacts
     */
    public function getDomainContacts()
    {
      return $this->domainContacts;
    }

    /**
     * @param DomainContacts $domainContacts
     * @return \cloudposse\wild_west_reseller_api\ValidateRegistration
     */
    public function setDomainContacts($domainContacts)
    {
      $this->domainContacts = $domainContacts;
      return $this;
    }

    /**
     * @return ArrayOfDomainData
     */
    public function getDomainDataArray()
    {
      return $this->domainDataArray;
    }

    /**
     * @param ArrayOfDomainData $domainDataArray
     * @return \cloudposse\wild_west_reseller_api\ValidateRegistration
     */
    public function setDomainDataArray($domainDataArray)
    {
      $this->domainDataArray = $domainDataArray;
      return $this;
    }

}
