<?php

namespace cloudposse\wild_west_reseller_api;

class UpdateDomainOwnership
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
     * @var string $sLosingOwner
     */
    protected $sLosingOwner = null;

    /**
     * @var GainingOwner $gaining
     */
    protected $gaining = null;

    /**
     * @param string $sCLTRID
     * @param Credential $credential
     * @param string $sResourceID
     * @param string $sLosingOwner
     * @param GainingOwner $gaining
     */
    public function __construct($sCLTRID, $credential, $sResourceID, $sLosingOwner, $gaining)
    {
      $this->sCLTRID = $sCLTRID;
      $this->credential = $credential;
      $this->sResourceID = $sResourceID;
      $this->sLosingOwner = $sLosingOwner;
      $this->gaining = $gaining;
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
     * @return \cloudposse\wild_west_reseller_api\UpdateDomainOwnership
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
     * @return \cloudposse\wild_west_reseller_api\UpdateDomainOwnership
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
     * @return \cloudposse\wild_west_reseller_api\UpdateDomainOwnership
     */
    public function setSResourceID($sResourceID)
    {
      $this->sResourceID = $sResourceID;
      return $this;
    }

    /**
     * @return string
     */
    public function getSLosingOwner()
    {
      return $this->sLosingOwner;
    }

    /**
     * @param string $sLosingOwner
     * @return \cloudposse\wild_west_reseller_api\UpdateDomainOwnership
     */
    public function setSLosingOwner($sLosingOwner)
    {
      $this->sLosingOwner = $sLosingOwner;
      return $this;
    }

    /**
     * @return GainingOwner
     */
    public function getGaining()
    {
      return $this->gaining;
    }

    /**
     * @param GainingOwner $gaining
     * @return \cloudposse\wild_west_reseller_api\UpdateDomainOwnership
     */
    public function setGaining($gaining)
    {
      $this->gaining = $gaining;
      return $this;
    }

}
