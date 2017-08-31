<?php

namespace cloudposse\wild_west_reseller_api;

class GetEmailAddressesForDomain
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
     * @var string $sDomain
     */
    protected $sDomain = null;

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
     * @param string $sDomain
     * @param int $nType
     * @param boolean $bActive
     */
    public function __construct($sCLTRID, $credential, $returnCfg, $sShopper, $sDomain, $nType, $bActive)
    {
      $this->sCLTRID = $sCLTRID;
      $this->credential = $credential;
      $this->returnCfg = $returnCfg;
      $this->sShopper = $sShopper;
      $this->sDomain = $sDomain;
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
     * @return \cloudposse\wild_west_reseller_api\GetEmailAddressesForDomain
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
     * @return \cloudposse\wild_west_reseller_api\GetEmailAddressesForDomain
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
     * @return \cloudposse\wild_west_reseller_api\GetEmailAddressesForDomain
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
     * @return \cloudposse\wild_west_reseller_api\GetEmailAddressesForDomain
     */
    public function setSShopper($sShopper)
    {
      $this->sShopper = $sShopper;
      return $this;
    }

    /**
     * @return string
     */
    public function getSDomain()
    {
      return $this->sDomain;
    }

    /**
     * @param string $sDomain
     * @return \cloudposse\wild_west_reseller_api\GetEmailAddressesForDomain
     */
    public function setSDomain($sDomain)
    {
      $this->sDomain = $sDomain;
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
     * @return \cloudposse\wild_west_reseller_api\GetEmailAddressesForDomain
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
     * @return \cloudposse\wild_west_reseller_api\GetEmailAddressesForDomain
     */
    public function setBActive($bActive)
    {
      $this->bActive = $bActive;
      return $this;
    }

}
