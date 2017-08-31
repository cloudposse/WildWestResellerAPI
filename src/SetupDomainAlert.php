<?php

namespace cloudposse\wild_west_reseller_api;

class SetupDomainAlert
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
     * @var DomainAlert $domainAlert
     */
    protected $domainAlert = null;

    /**
     * @var ContactInfo $registrant
     */
    protected $registrant = null;

    /**
     * @param string $sCLTRID
     * @param Credential $credential
     * @param DomainAlert $domainAlert
     * @param ContactInfo $registrant
     */
    public function __construct($sCLTRID, $credential, $domainAlert, $registrant)
    {
      $this->sCLTRID = $sCLTRID;
      $this->credential = $credential;
      $this->domainAlert = $domainAlert;
      $this->registrant = $registrant;
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
     * @return \cloudposse\wild_west_reseller_api\SetupDomainAlert
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
     * @return \cloudposse\wild_west_reseller_api\SetupDomainAlert
     */
    public function setCredential($credential)
    {
      $this->credential = $credential;
      return $this;
    }

    /**
     * @return DomainAlert
     */
    public function getDomainAlert()
    {
      return $this->domainAlert;
    }

    /**
     * @param DomainAlert $domainAlert
     * @return \cloudposse\wild_west_reseller_api\SetupDomainAlert
     */
    public function setDomainAlert($domainAlert)
    {
      $this->domainAlert = $domainAlert;
      return $this;
    }

    /**
     * @return ContactInfo
     */
    public function getRegistrant()
    {
      return $this->registrant;
    }

    /**
     * @param ContactInfo $registrant
     * @return \cloudposse\wild_west_reseller_api\SetupDomainAlert
     */
    public function setRegistrant($registrant)
    {
      $this->registrant = $registrant;
      return $this;
    }

}
