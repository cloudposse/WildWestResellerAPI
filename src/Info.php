<?php

namespace cloudposse\wild_west_reseller_api;

class Info
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
     * @var string $sResourceID
     */
    protected $sResourceID = null;

    /**
     * @var string $sType
     */
    protected $sType = null;

    /**
     * @var string $sDomain
     */
    protected $sDomain = null;

    /**
     * @var string $sOrderID
     */
    protected $sOrderID = null;

    /**
     * @param string $sCLTRID
     * @param Credential $credential
     * @param string $sResourceID
     * @param string $sType
     * @param string $sDomain
     * @param string $sOrderID
     */
    public function __construct($sCLTRID, $credential, $sResourceID, $sType, $sDomain, $sOrderID)
    {
      $this->sCLTRID = $sCLTRID;
      $this->credential = $credential;
      $this->sResourceID = $sResourceID;
      $this->sType = $sType;
      $this->sDomain = $sDomain;
      $this->sOrderID = $sOrderID;
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
     * @return \cloudposse\wild_west_reseller_api\Info
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
     * @return \cloudposse\wild_west_reseller_api\Info
     */
    public function setCredential($credential)
    {
      $this->credential = $credential;
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
     * @return \cloudposse\wild_west_reseller_api\Info
     */
    public function setSResourceID($sResourceID)
    {
      $this->sResourceID = $sResourceID;
      return $this;
    }

    /**
     * @return string
     */
    public function getSType()
    {
      return $this->sType;
    }

    /**
     * @param string $sType
     * @return \cloudposse\wild_west_reseller_api\Info
     */
    public function setSType($sType)
    {
      $this->sType = $sType;
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
     * @return \cloudposse\wild_west_reseller_api\Info
     */
    public function setSDomain($sDomain)
    {
      $this->sDomain = $sDomain;
      return $this;
    }

    /**
     * @return string
     */
    public function getSOrderID()
    {
      return $this->sOrderID;
    }

    /**
     * @param string $sOrderID
     * @return \cloudposse\wild_west_reseller_api\Info
     */
    public function setSOrderID($sOrderID)
    {
      $this->sOrderID = $sOrderID;
      return $this;
    }

}
