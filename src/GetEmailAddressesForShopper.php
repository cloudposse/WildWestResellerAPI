<?php

namespace cloudposse\wild_west_reseller_api;

class GetEmailAddressesForShopper
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
     * @param int $nType
     * @param boolean $bActive
     */
    public function __construct($sCLTRID, $credential, $returnCfg, $sShopper, $nType, $bActive)
    {
      $this->sCLTRID = $sCLTRID;
      $this->credential = $credential;
      $this->returnCfg = $returnCfg;
      $this->sShopper = $sShopper;
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
     * @return \cloudposse\wild_west_reseller_api\GetEmailAddressesForShopper
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
     * @return \cloudposse\wild_west_reseller_api\GetEmailAddressesForShopper
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
     * @return \cloudposse\wild_west_reseller_api\GetEmailAddressesForShopper
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
     * @return \cloudposse\wild_west_reseller_api\GetEmailAddressesForShopper
     */
    public function setSShopper($sShopper)
    {
      $this->sShopper = $sShopper;
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
     * @return \cloudposse\wild_west_reseller_api\GetEmailAddressesForShopper
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
     * @return \cloudposse\wild_west_reseller_api\GetEmailAddressesForShopper
     */
    public function setBActive($bActive)
    {
      $this->bActive = $bActive;
      return $this;
    }

}
