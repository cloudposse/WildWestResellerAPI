<?php

namespace cloudposse\wild_west_reseller_api;

class UpdateDomainForwarding
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
     * @var ArrayOfDomain $domainArray
     */
    protected $domainArray = null;

    /**
     * @var string $sAction
     */
    protected $sAction = null;

    /**
     * @var string $sForwardingURL
     */
    protected $sForwardingURL = null;

    /**
     * @param string $sCLTRID
     * @param Credential $credential
     * @param ArrayOfDomain $domainArray
     * @param string $sAction
     * @param string $sForwardingURL
     */
    public function __construct($sCLTRID, $credential, $domainArray, $sAction, $sForwardingURL)
    {
      $this->sCLTRID = $sCLTRID;
      $this->credential = $credential;
      $this->domainArray = $domainArray;
      $this->sAction = $sAction;
      $this->sForwardingURL = $sForwardingURL;
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
     * @return \cloudposse\wild_west_reseller_api\UpdateDomainForwarding
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
     * @return \cloudposse\wild_west_reseller_api\UpdateDomainForwarding
     */
    public function setCredential($credential)
    {
      $this->credential = $credential;
      return $this;
    }

    /**
     * @return ArrayOfDomain
     */
    public function getDomainArray()
    {
      return $this->domainArray;
    }

    /**
     * @param ArrayOfDomain $domainArray
     * @return \cloudposse\wild_west_reseller_api\UpdateDomainForwarding
     */
    public function setDomainArray($domainArray)
    {
      $this->domainArray = $domainArray;
      return $this;
    }

    /**
     * @return string
     */
    public function getSAction()
    {
      return $this->sAction;
    }

    /**
     * @param string $sAction
     * @return \cloudposse\wild_west_reseller_api\UpdateDomainForwarding
     */
    public function setSAction($sAction)
    {
      $this->sAction = $sAction;
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
     * @return \cloudposse\wild_west_reseller_api\UpdateDomainForwarding
     */
    public function setSForwardingURL($sForwardingURL)
    {
      $this->sForwardingURL = $sForwardingURL;
      return $this;
    }

}
