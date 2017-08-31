<?php

namespace cloudposse\wild_west_reseller_api;

class RemoveRIMAccount
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
     * @var string $sSubscription
     */
    protected $sSubscription = null;

    /**
     * @param string $sCLTRID
     * @param Credential $credential
     * @param string $sShopper
     * @param string $sEmailAddress
     * @param string $sSubscription
     */
    public function __construct($sCLTRID, $credential, $sShopper, $sEmailAddress, $sSubscription)
    {
      $this->sCLTRID = $sCLTRID;
      $this->credential = $credential;
      $this->sShopper = $sShopper;
      $this->sEmailAddress = $sEmailAddress;
      $this->sSubscription = $sSubscription;
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
     * @return \cloudposse\wild_west_reseller_api\RemoveRIMAccount
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
     * @return \cloudposse\wild_west_reseller_api\RemoveRIMAccount
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
     * @return \cloudposse\wild_west_reseller_api\RemoveRIMAccount
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
     * @return \cloudposse\wild_west_reseller_api\RemoveRIMAccount
     */
    public function setSEmailAddress($sEmailAddress)
    {
      $this->sEmailAddress = $sEmailAddress;
      return $this;
    }

    /**
     * @return string
     */
    public function getSSubscription()
    {
      return $this->sSubscription;
    }

    /**
     * @param string $sSubscription
     * @return \cloudposse\wild_west_reseller_api\RemoveRIMAccount
     */
    public function setSSubscription($sSubscription)
    {
      $this->sSubscription = $sSubscription;
      return $this;
    }

}
