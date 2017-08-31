<?php

namespace cloudposse\wild_west_reseller_api;

class GetPunycodeIDN
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
     * @var ArrayOfString $sDomainArray
     */
    protected $sDomainArray = null;

    /**
     * @param string $sCLTRID
     * @param Credential $credential
     * @param ArrayOfString $sDomainArray
     */
    public function __construct($sCLTRID, $credential, $sDomainArray)
    {
      $this->sCLTRID = $sCLTRID;
      $this->credential = $credential;
      $this->sDomainArray = $sDomainArray;
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
     * @return \cloudposse\wild_west_reseller_api\GetPunycodeIDN
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
     * @return \cloudposse\wild_west_reseller_api\GetPunycodeIDN
     */
    public function setCredential($credential)
    {
      $this->credential = $credential;
      return $this;
    }

    /**
     * @return ArrayOfString
     */
    public function getSDomainArray()
    {
      return $this->sDomainArray;
    }

    /**
     * @param ArrayOfString $sDomainArray
     * @return \cloudposse\wild_west_reseller_api\GetPunycodeIDN
     */
    public function setSDomainArray($sDomainArray)
    {
      $this->sDomainArray = $sDomainArray;
      return $this;
    }

}
