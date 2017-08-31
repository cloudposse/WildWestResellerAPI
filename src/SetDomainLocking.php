<?php

namespace cloudposse\wild_west_reseller_api;

class SetDomainLocking
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
     * @var string $sLock
     */
    protected $sLock = null;

    /**
     * @param string $sCLTRID
     * @param Credential $credential
     * @param ArrayOfDomain $domainArray
     * @param string $sLock
     */
    public function __construct($sCLTRID, $credential, $domainArray, $sLock)
    {
      $this->sCLTRID = $sCLTRID;
      $this->credential = $credential;
      $this->domainArray = $domainArray;
      $this->sLock = $sLock;
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
     * @return \cloudposse\wild_west_reseller_api\SetDomainLocking
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
     * @return \cloudposse\wild_west_reseller_api\SetDomainLocking
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
     * @return \cloudposse\wild_west_reseller_api\SetDomainLocking
     */
    public function setDomainArray($domainArray)
    {
      $this->domainArray = $domainArray;
      return $this;
    }

    /**
     * @return string
     */
    public function getSLock()
    {
      return $this->sLock;
    }

    /**
     * @param string $sLock
     * @return \cloudposse\wild_west_reseller_api\SetDomainLocking
     */
    public function setSLock($sLock)
    {
      $this->sLock = $sLock;
      return $this;
    }

}
