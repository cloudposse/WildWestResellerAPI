<?php

namespace cloudposse\wild_west_reseller_api;

class GetEmailAddressInfoForShopper
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
     * @var ReturnConfig $returnCfg
     */
    protected $returnCfg = null;

    /**
     * @var string $sShopper
     */
    protected $sShopper = null;

    /**
     * @var string $sEmailAddress
     */
    protected $sEmailAddress = null;

    /**
     * @var int $nDynamicData
     */
    protected $nDynamicData = null;

    /**
     * @var int $nType
     */
    protected $nType = null;

    /**
     * @var boolean $bActive
     */
    protected $bActive = null;

    /**
     * @param string $sCLTRID
     * @param Credential $credential
     * @param ReturnConfig $returnCfg
     * @param string $sShopper
     * @param string $sEmailAddress
     * @param int $nDynamicData
     * @param int $nType
     * @param boolean $bActive
     */
    public function __construct($sCLTRID, $credential, $returnCfg, $sShopper, $sEmailAddress, $nDynamicData, $nType, $bActive)
    {
      $this->sCLTRID = $sCLTRID;
      $this->credential = $credential;
      $this->returnCfg = $returnCfg;
      $this->sShopper = $sShopper;
      $this->sEmailAddress = $sEmailAddress;
      $this->nDynamicData = $nDynamicData;
      $this->nType = $nType;
      $this->bActive = $bActive;
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
     * @return \cloudposse\wild_west_reseller_api\GetEmailAddressInfoForShopper
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
     * @return \cloudposse\wild_west_reseller_api\GetEmailAddressInfoForShopper
     */
    public function setCredential($credential)
    {
      $this->credential = $credential;
      return $this;
    }

    /**
     * @return ReturnConfig
     */
    public function getReturnCfg()
    {
      return $this->returnCfg;
    }

    /**
     * @param ReturnConfig $returnCfg
     * @return \cloudposse\wild_west_reseller_api\GetEmailAddressInfoForShopper
     */
    public function setReturnCfg($returnCfg)
    {
      $this->returnCfg = $returnCfg;
      return $this;
    }

    /**
     * @return string
     */
    public function getSShopper()
    {
      return $this->sShopper;
    }

    /**
     * @param string $sShopper
     * @return \cloudposse\wild_west_reseller_api\GetEmailAddressInfoForShopper
     */
    public function setSShopper($sShopper)
    {
      $this->sShopper = $sShopper;
      return $this;
    }

    /**
     * @return string
     */
    public function getSEmailAddress()
    {
      return $this->sEmailAddress;
    }

    /**
     * @param string $sEmailAddress
     * @return \cloudposse\wild_west_reseller_api\GetEmailAddressInfoForShopper
     */
    public function setSEmailAddress($sEmailAddress)
    {
      $this->sEmailAddress = $sEmailAddress;
      return $this;
    }

    /**
     * @return int
     */
    public function getNDynamicData()
    {
      return $this->nDynamicData;
    }

    /**
     * @param int $nDynamicData
     * @return \cloudposse\wild_west_reseller_api\GetEmailAddressInfoForShopper
     */
    public function setNDynamicData($nDynamicData)
    {
      $this->nDynamicData = $nDynamicData;
      return $this;
    }

    /**
     * @return int
     */
    public function getNType()
    {
      return $this->nType;
    }

    /**
     * @param int $nType
     * @return \cloudposse\wild_west_reseller_api\GetEmailAddressInfoForShopper
     */
    public function setNType($nType)
    {
      $this->nType = $nType;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getBActive()
    {
      return $this->bActive;
    }

    /**
     * @param boolean $bActive
     * @return \cloudposse\wild_west_reseller_api\GetEmailAddressInfoForShopper
     */
    public function setBActive($bActive)
    {
      $this->bActive = $bActive;
      return $this;
    }

}
