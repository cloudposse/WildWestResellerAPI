<?php

namespace cloudposse\wild_west_reseller_api;

class SetRIMAccount
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
     * @var string $sCallBack
     */
    protected $sCallBack = null;

    /**
     * @var string $sNotification
     */
    protected $sNotification = null;

    /**
     * @param string $sCLTRID
     * @param Credential $credential
     * @param string $sShopper
     * @param string $sEmailAddress
     * @param string $sCallBack
     * @param string $sNotification
     */
    public function __construct($sCLTRID, $credential, $sShopper, $sEmailAddress, $sCallBack, $sNotification)
    {
      $this->sCLTRID = $sCLTRID;
      $this->credential = $credential;
      $this->sShopper = $sShopper;
      $this->sEmailAddress = $sEmailAddress;
      $this->sCallBack = $sCallBack;
      $this->sNotification = $sNotification;
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
     * @return \cloudposse\wild_west_reseller_api\SetRIMAccount
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
     * @return \cloudposse\wild_west_reseller_api\SetRIMAccount
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
     * @return \cloudposse\wild_west_reseller_api\SetRIMAccount
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
     * @return \cloudposse\wild_west_reseller_api\SetRIMAccount
     */
    public function setSEmailAddress($sEmailAddress)
    {
      $this->sEmailAddress = $sEmailAddress;
      return $this;
    }

    /**
     * @return string
     */
    public function getSCallBack()
    {
      return $this->sCallBack;
    }

    /**
     * @param string $sCallBack
     * @return \cloudposse\wild_west_reseller_api\SetRIMAccount
     */
    public function setSCallBack($sCallBack)
    {
      $this->sCallBack = $sCallBack;
      return $this;
    }

    /**
     * @return string
     */
    public function getSNotification()
    {
      return $this->sNotification;
    }

    /**
     * @param string $sNotification
     * @return \cloudposse\wild_west_reseller_api\SetRIMAccount
     */
    public function setSNotification($sNotification)
    {
      $this->sNotification = $sNotification;
      return $this;
    }

}
