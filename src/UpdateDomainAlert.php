<?php

namespace cloudposse\wild_west_reseller_api;

class UpdateDomainAlert
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
     * @var string $sDomainMonitorID
     */
    protected $sDomainMonitorID = null;

    /**
     * @var ContactInfo $registrant
     */
    protected $registrant = null;

    /**
     * @param string $sCLTRID
     * @param Credential $credential
     * @param DomainAlert $domainAlert
     * @param string $sDomainMonitorID
     * @param ContactInfo $registrant
     */
    public function __construct($sCLTRID, $credential, $domainAlert, $sDomainMonitorID, $registrant)
    {
      $this->sCLTRID = $sCLTRID;
      $this->credential = $credential;
      $this->domainAlert = $domainAlert;
      $this->sDomainMonitorID = $sDomainMonitorID;
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
     * @return \cloudposse\wild_west_reseller_api\UpdateDomainAlert
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
     * @return \cloudposse\wild_west_reseller_api\UpdateDomainAlert
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
     * @return \cloudposse\wild_west_reseller_api\UpdateDomainAlert
     */
    public function setDomainAlert($domainAlert)
    {
      $this->domainAlert = $domainAlert;
      return $this;
    }

    /**
     * @return string
     */
    public function getSDomainMonitorID()
    {
      return $this->sDomainMonitorID;
    }

    /**
     * @param string $sDomainMonitorID
     * @return \cloudposse\wild_west_reseller_api\UpdateDomainAlert
     */
    public function setSDomainMonitorID($sDomainMonitorID)
    {
      $this->sDomainMonitorID = $sDomainMonitorID;
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
     * @return \cloudposse\wild_west_reseller_api\UpdateDomainAlert
     */
    public function setRegistrant($registrant)
    {
      $this->registrant = $registrant;
      return $this;
    }

}
