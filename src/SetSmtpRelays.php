<?php

namespace cloudposse\wild_west_reseller_api;

class SetSmtpRelays
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
     * @var int $nSMTPRelays
     */
    protected $nSMTPRelays = null;

    /**
     * @param string $sCLTRID
     * @param Credential $credential
     * @param string $sShopper
     * @param string $sEmailAddress
     * @param int $nSMTPRelays
     */
    public function __construct($sCLTRID, $credential, $sShopper, $sEmailAddress, $nSMTPRelays)
    {
      $this->sCLTRID = $sCLTRID;
      $this->credential = $credential;
      $this->sShopper = $sShopper;
      $this->sEmailAddress = $sEmailAddress;
      $this->nSMTPRelays = $nSMTPRelays;
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
     * @return \cloudposse\wild_west_reseller_api\SetSmtpRelays
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
     * @return \cloudposse\wild_west_reseller_api\SetSmtpRelays
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
     * @return \cloudposse\wild_west_reseller_api\SetSmtpRelays
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
     * @return \cloudposse\wild_west_reseller_api\SetSmtpRelays
     */
    public function setSEmailAddress($sEmailAddress)
    {
      $this->sEmailAddress = $sEmailAddress;
      return $this;
    }

    /**
     * @return int
     */
    public function getNSMTPRelays()
    {
      return $this->nSMTPRelays;
    }

    /**
     * @param int $nSMTPRelays
     * @return \cloudposse\wild_west_reseller_api\SetSmtpRelays
     */
    public function setNSMTPRelays($nSMTPRelays)
    {
      $this->nSMTPRelays = $nSMTPRelays;
      return $this;
    }

}
