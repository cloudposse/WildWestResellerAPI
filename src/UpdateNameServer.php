<?php

namespace cloudposse\wild_west_reseller_api;

class UpdateNameServer
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
     * @var ArrayOfNS $nsArray
     */
    protected $nsArray = null;

    /**
     * @param string $sCLTRID
     * @param Credential $credential
     * @param ArrayOfDomain $domainArray
     * @param ArrayOfNS $nsArray
     */
    public function __construct($sCLTRID, $credential, $domainArray, $nsArray)
    {
      $this->sCLTRID = $sCLTRID;
      $this->credential = $credential;
      $this->domainArray = $domainArray;
      $this->nsArray = $nsArray;
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
     * @return \cloudposse\wild_west_reseller_api\UpdateNameServer
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
     * @return \cloudposse\wild_west_reseller_api\UpdateNameServer
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
     * @return \cloudposse\wild_west_reseller_api\UpdateNameServer
     */
    public function setDomainArray($domainArray)
    {
      $this->domainArray = $domainArray;
      return $this;
    }

    /**
     * @return ArrayOfNS
     */
    public function getNsArray()
    {
      return $this->nsArray;
    }

    /**
     * @param ArrayOfNS $nsArray
     * @return \cloudposse\wild_west_reseller_api\UpdateNameServer
     */
    public function setNsArray($nsArray)
    {
      $this->nsArray = $nsArray;
      return $this;
    }

}
