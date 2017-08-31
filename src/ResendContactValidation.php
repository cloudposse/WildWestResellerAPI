<?php

namespace cloudposse\wild_west_reseller_api;

class ResendContactValidation
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
     * @var string $sShopperID
     */
    protected $sShopperID = null;

    /**
     * @var string $sDomain
     */
    protected $sDomain = null;

    /**
     * @param string $sCLTRID
     * @param Credential $credential
     * @param string $sShopperID
     * @param string $sDomain
     */
    public function __construct($sCLTRID, $credential, $sShopperID, $sDomain)
    {
      $this->sCLTRID = $sCLTRID;
      $this->credential = $credential;
      $this->sShopperID = $sShopperID;
      $this->sDomain = $sDomain;
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
     * @return \cloudposse\wild_west_reseller_api\ResendContactValidation
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
     * @return \cloudposse\wild_west_reseller_api\ResendContactValidation
     */
    public function setCredential($credential)
    {
      $this->credential = $credential;
      return $this;
    }

    /**
     * @return string
     */
    public function getSShopperID()
    {
      return $this->sShopperID;
    }

    /**
     * @param string $sShopperID
     * @return \cloudposse\wild_west_reseller_api\ResendContactValidation
     */
    public function setSShopperID($sShopperID)
    {
      $this->sShopperID = $sShopperID;
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
     * @return \cloudposse\wild_west_reseller_api\ResendContactValidation
     */
    public function setSDomain($sDomain)
    {
      $this->sDomain = $sDomain;
      return $this;
    }

}
