<?php

namespace cloudposse\wild_west_reseller_api;

class GetSMTPRelayInfoForShopper
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
     * @var string $sResourceID
     */
    protected $sResourceID = null;

    /**
     * @var int $nType
     */
    protected $nType = null;

    /**
     * @param string $sCLTRID
     * @param Credential $credential
     * @param ReturnConfig $returnCfg
     * @param string $sShopper
     * @param string $sResourceID
     * @param int $nType
     */
    public function __construct($sCLTRID, $credential, $returnCfg, $sShopper, $sResourceID, $nType)
    {
      $this->sCLTRID = $sCLTRID;
      $this->credential = $credential;
      $this->returnCfg = $returnCfg;
      $this->sShopper = $sShopper;
      $this->sResourceID = $sResourceID;
      $this->nType = $nType;
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
     * @return \cloudposse\wild_west_reseller_api\GetSMTPRelayInfoForShopper
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
     * @return \cloudposse\wild_west_reseller_api\GetSMTPRelayInfoForShopper
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
     * @return \cloudposse\wild_west_reseller_api\GetSMTPRelayInfoForShopper
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
     * @return \cloudposse\wild_west_reseller_api\GetSMTPRelayInfoForShopper
     */
    public function setSShopper($sShopper)
    {
      $this->sShopper = $sShopper;
      return $this;
    }

    /**
     * @return string
     */
    public function getSResourceID()
    {
      return $this->sResourceID;
    }

    /**
     * @param string $sResourceID
     * @return \cloudposse\wild_west_reseller_api\GetSMTPRelayInfoForShopper
     */
    public function setSResourceID($sResourceID)
    {
      $this->sResourceID = $sResourceID;
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
     * @return \cloudposse\wild_west_reseller_api\GetSMTPRelayInfoForShopper
     */
    public function setNType($nType)
    {
      $this->nType = $nType;
      return $this;
    }

}
