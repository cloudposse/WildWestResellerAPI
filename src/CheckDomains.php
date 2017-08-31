<?php

namespace cloudposse\wild_west_reseller_api;

class CheckDomains
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
     * @var ArrayOfCheckDomain $domainArray
     */
    protected $domainArray = null;

    /**
     * @param string $sCLTRID
     * @param Credential $credential
     * @param ArrayOfCheckDomain $domainArray
     */
    public function __construct($sCLTRID, $credential, $domainArray)
    {
      $this->sCLTRID = $sCLTRID;
      $this->credential = $credential;
      $this->domainArray = $domainArray;
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
     * @return \cloudposse\wild_west_reseller_api\CheckDomains
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
     * @return \cloudposse\wild_west_reseller_api\CheckDomains
     */
    public function setCredential($credential)
    {
      $this->credential = $credential;
      return $this;
    }

    /**
     * @return ArrayOfCheckDomain
     */
    public function getDomainArray()
    {
      return $this->domainArray;
    }

    /**
     * @param ArrayOfCheckDomain $domainArray
     * @return \cloudposse\wild_west_reseller_api\CheckDomains
     */
    public function setDomainArray($domainArray)
    {
      $this->domainArray = $domainArray;
      return $this;
    }

}
