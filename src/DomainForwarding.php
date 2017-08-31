<?php

namespace cloudposse\wild_west_reseller_api;

class DomainForwarding
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
     * @var string $sUser
     */
    protected $sUser = null;

    /**
     * @var int $nDomainID
     */
    protected $nDomainID = null;

    /**
     * @var string $sForwardingURL
     */
    protected $sForwardingURL = null;

    /**
     * @var string $sMngTRID
     */
    protected $sMngTRID = null;

    /**
     * @param string $sCLTRID
     * @param Credential $credential
     * @param string $sUser
     * @param int $nDomainID
     * @param string $sForwardingURL
     * @param string $sMngTRID
     */
    public function __construct($sCLTRID, $credential, $sUser, $nDomainID, $sForwardingURL, $sMngTRID)
    {
      $this->sCLTRID = $sCLTRID;
      $this->credential = $credential;
      $this->sUser = $sUser;
      $this->nDomainID = $nDomainID;
      $this->sForwardingURL = $sForwardingURL;
      $this->sMngTRID = $sMngTRID;
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
     * @return \cloudposse\wild_west_reseller_api\DomainForwarding
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
     * @return \cloudposse\wild_west_reseller_api\DomainForwarding
     */
    public function setCredential($credential)
    {
      $this->credential = $credential;
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
     * @return \cloudposse\wild_west_reseller_api\DomainForwarding
     */
    public function setSUser($sUser)
    {
      $this->sUser = $sUser;
      return $this;
    }

    /**
     * @return int
     */
    public function getNDomainID()
    {
      return $this->nDomainID;
    }

    /**
     * @param int $nDomainID
     * @return \cloudposse\wild_west_reseller_api\DomainForwarding
     */
    public function setNDomainID($nDomainID)
    {
      $this->nDomainID = $nDomainID;
      return $this;
    }

    /**
     * @return string
     */
    public function getSForwardingURL()
    {
      return $this->sForwardingURL;
    }

    /**
     * @param string $sForwardingURL
     * @return \cloudposse\wild_west_reseller_api\DomainForwarding
     */
    public function setSForwardingURL($sForwardingURL)
    {
      $this->sForwardingURL = $sForwardingURL;
      return $this;
    }

    /**
     * @return string
     */
    public function getSMngTRID()
    {
      return $this->sMngTRID;
    }

    /**
     * @param string $sMngTRID
     * @return \cloudposse\wild_west_reseller_api\DomainForwarding
     */
    public function setSMngTRID($sMngTRID)
    {
      $this->sMngTRID = $sMngTRID;
      return $this;
    }

}
