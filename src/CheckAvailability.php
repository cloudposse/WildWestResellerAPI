<?php

namespace cloudposse\wild_west_reseller_api;

class CheckAvailability
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
     * @var ArrayOfString $sHostArray
     */
    protected $sHostArray = null;

    /**
     * @var ArrayOfString $sNSArray
     */
    protected $sNSArray = null;

    /**
     * @param string $sCLTRID
     * @param Credential $credential
     * @param ArrayOfString $sDomainArray
     * @param ArrayOfString $sHostArray
     * @param ArrayOfString $sNSArray
     */
    public function __construct($sCLTRID, $credential, $sDomainArray, $sHostArray, $sNSArray)
    {
      $this->sCLTRID = $sCLTRID;
      $this->credential = $credential;
      $this->sDomainArray = $sDomainArray;
      $this->sHostArray = $sHostArray;
      $this->sNSArray = $sNSArray;
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
     * @return \cloudposse\wild_west_reseller_api\CheckAvailability
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
     * @return \cloudposse\wild_west_reseller_api\CheckAvailability
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
     * @return \cloudposse\wild_west_reseller_api\CheckAvailability
     */
    public function setSDomainArray($sDomainArray)
    {
      $this->sDomainArray = $sDomainArray;
      return $this;
    }

    /**
     * @return ArrayOfString
     */
    public function getSHostArray()
    {
      return $this->sHostArray;
    }

    /**
     * @param ArrayOfString $sHostArray
     * @return \cloudposse\wild_west_reseller_api\CheckAvailability
     */
    public function setSHostArray($sHostArray)
    {
      $this->sHostArray = $sHostArray;
      return $this;
    }

    /**
     * @return ArrayOfString
     */
    public function getSNSArray()
    {
      return $this->sNSArray;
    }

    /**
     * @param ArrayOfString $sNSArray
     * @return \cloudposse\wild_west_reseller_api\CheckAvailability
     */
    public function setSNSArray($sNSArray)
    {
      $this->sNSArray = $sNSArray;
      return $this;
    }

}
