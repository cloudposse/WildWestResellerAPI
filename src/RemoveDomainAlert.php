<?php

namespace cloudposse\wild_west_reseller_api;

class RemoveDomainAlert
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
     * @var string $sDomainMonitorID
     */
    protected $sDomainMonitorID = null;

    /**
     * @var string $sUser
     */
    protected $sUser = null;

    /**
     * @param string $sCLTRID
     * @param Credential $credential
     * @param string $sDomainMonitorID
     * @param string $sUser
     */
    public function __construct($sCLTRID, $credential, $sDomainMonitorID, $sUser)
    {
      $this->sCLTRID = $sCLTRID;
      $this->credential = $credential;
      $this->sDomainMonitorID = $sDomainMonitorID;
      $this->sUser = $sUser;
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
     * @return \cloudposse\wild_west_reseller_api\RemoveDomainAlert
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
     * @return \cloudposse\wild_west_reseller_api\RemoveDomainAlert
     */
    public function setCredential($credential)
    {
      $this->credential = $credential;
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
     * @return \cloudposse\wild_west_reseller_api\RemoveDomainAlert
     */
    public function setSDomainMonitorID($sDomainMonitorID)
    {
      $this->sDomainMonitorID = $sDomainMonitorID;
      return $this;
    }

    /**
     * @return string
     */
    public function getSUser()
    {
      return $this->sUser;
    }

    /**
     * @param string $sUser
     * @return \cloudposse\wild_west_reseller_api\RemoveDomainAlert
     */
    public function setSUser($sUser)
    {
      $this->sUser = $sUser;
      return $this;
    }

}
