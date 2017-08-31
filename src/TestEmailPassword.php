<?php

namespace cloudposse\wild_west_reseller_api;

class TestEmailPassword
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
     * @var string $sShopper
     */
    protected $sShopper = null;

    /**
     * @var string $sEmailAddress
     */
    protected $sEmailAddress = null;

    /**
     * @var string $sPassword
     */
    protected $sPassword = null;

    /**
     * @var boolean $bEncrypted
     */
    protected $bEncrypted = null;

    /**
     * @param string $sCLTRID
     * @param Credential $credential
     * @param string $sShopper
     * @param string $sEmailAddress
     * @param string $sPassword
     * @param boolean $bEncrypted
     */
    public function __construct($sCLTRID, $credential, $sShopper, $sEmailAddress, $sPassword, $bEncrypted)
    {
      $this->sCLTRID = $sCLTRID;
      $this->credential = $credential;
      $this->sShopper = $sShopper;
      $this->sEmailAddress = $sEmailAddress;
      $this->sPassword = $sPassword;
      $this->bEncrypted = $bEncrypted;
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
     * @return \cloudposse\wild_west_reseller_api\TestEmailPassword
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
     * @return \cloudposse\wild_west_reseller_api\TestEmailPassword
     */
    public function setCredential($credential)
    {
      $this->credential = $credential;
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
     * @return \cloudposse\wild_west_reseller_api\TestEmailPassword
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
     * @return \cloudposse\wild_west_reseller_api\TestEmailPassword
     */
    public function setSEmailAddress($sEmailAddress)
    {
      $this->sEmailAddress = $sEmailAddress;
      return $this;
    }

    /**
     * @return string
     */
    public function getSPassword()
    {
      return $this->sPassword;
    }

    /**
     * @param string $sPassword
     * @return \cloudposse\wild_west_reseller_api\TestEmailPassword
     */
    public function setSPassword($sPassword)
    {
      $this->sPassword = $sPassword;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getBEncrypted()
    {
      return $this->bEncrypted;
    }

    /**
     * @param boolean $bEncrypted
     * @return \cloudposse\wild_west_reseller_api\TestEmailPassword
     */
    public function setBEncrypted($bEncrypted)
    {
      $this->bEncrypted = $bEncrypted;
      return $this;
    }

}
