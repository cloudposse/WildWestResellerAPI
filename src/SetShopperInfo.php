<?php

namespace cloudposse\wild_west_reseller_api;

class SetShopperInfo
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
     * @var string $sUser
     */
    protected $sUser = null;

    /**
     * @var string $sEmail
     */
    protected $sEmail = null;

    /**
     * @var string $sFirstName
     */
    protected $sFirstName = null;

    /**
     * @var string $sLastName
     */
    protected $sLastName = null;

    /**
     * @var string $sPhone
     */
    protected $sPhone = null;

    /**
     * @var string $sFax
     */
    protected $sFax = null;

    /**
     * @var string $sCompany
     */
    protected $sCompany = null;

    /**
     * @var string $sAddress
     */
    protected $sAddress = null;

    /**
     * @var string $sCity
     */
    protected $sCity = null;

    /**
     * @var string $sState
     */
    protected $sState = null;

    /**
     * @var string $sZip
     */
    protected $sZip = null;

    /**
     * @var string $sCountry
     */
    protected $sCountry = null;

    /**
     * @var string $sShopperPin
     */
    protected $sShopperPin = null;

    /**
     * @param string $sCLTRID
     * @param Credential $credential
     * @param string $sUser
     * @param string $sEmail
     * @param string $sFirstName
     * @param string $sLastName
     * @param string $sPhone
     * @param string $sFax
     * @param string $sCompany
     * @param string $sAddress
     * @param string $sCity
     * @param string $sState
     * @param string $sZip
     * @param string $sCountry
     * @param string $sShopperPin
     */
    public function __construct($sCLTRID, $credential, $sUser, $sEmail, $sFirstName, $sLastName, $sPhone, $sFax, $sCompany, $sAddress, $sCity, $sState, $sZip, $sCountry, $sShopperPin)
    {
      $this->sCLTRID = $sCLTRID;
      $this->credential = $credential;
      $this->sUser = $sUser;
      $this->sEmail = $sEmail;
      $this->sFirstName = $sFirstName;
      $this->sLastName = $sLastName;
      $this->sPhone = $sPhone;
      $this->sFax = $sFax;
      $this->sCompany = $sCompany;
      $this->sAddress = $sAddress;
      $this->sCity = $sCity;
      $this->sState = $sState;
      $this->sZip = $sZip;
      $this->sCountry = $sCountry;
      $this->sShopperPin = $sShopperPin;
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
     * @return \cloudposse\wild_west_reseller_api\SetShopperInfo
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
     * @return \cloudposse\wild_west_reseller_api\SetShopperInfo
     */
    public function setCredential($credential)
    {
      $this->credential = $credential;
      return $this;
    }

    /**
     * @return string
     */
    public function getSUser()
    {
      return $this->sUser;
    }

    /**
     * @param string $sUser
     * @return \cloudposse\wild_west_reseller_api\SetShopperInfo
     */
    public function setSUser($sUser)
    {
      $this->sUser = $sUser;
      return $this;
    }

    /**
     * @return string
     */
    public function getSEmail()
    {
      return $this->sEmail;
    }

    /**
     * @param string $sEmail
     * @return \cloudposse\wild_west_reseller_api\SetShopperInfo
     */
    public function setSEmail($sEmail)
    {
      $this->sEmail = $sEmail;
      return $this;
    }

    /**
     * @return string
     */
    public function getSFirstName()
    {
      return $this->sFirstName;
    }

    /**
     * @param string $sFirstName
     * @return \cloudposse\wild_west_reseller_api\SetShopperInfo
     */
    public function setSFirstName($sFirstName)
    {
      $this->sFirstName = $sFirstName;
      return $this;
    }

    /**
     * @return string
     */
    public function getSLastName()
    {
      return $this->sLastName;
    }

    /**
     * @param string $sLastName
     * @return \cloudposse\wild_west_reseller_api\SetShopperInfo
     */
    public function setSLastName($sLastName)
    {
      $this->sLastName = $sLastName;
      return $this;
    }

    /**
     * @return string
     */
    public function getSPhone()
    {
      return $this->sPhone;
    }

    /**
     * @param string $sPhone
     * @return \cloudposse\wild_west_reseller_api\SetShopperInfo
     */
    public function setSPhone($sPhone)
    {
      $this->sPhone = $sPhone;
      return $this;
    }

    /**
     * @return string
     */
    public function getSFax()
    {
      return $this->sFax;
    }

    /**
     * @param string $sFax
     * @return \cloudposse\wild_west_reseller_api\SetShopperInfo
     */
    public function setSFax($sFax)
    {
      $this->sFax = $sFax;
      return $this;
    }

    /**
     * @return string
     */
    public function getSCompany()
    {
      return $this->sCompany;
    }

    /**
     * @param string $sCompany
     * @return \cloudposse\wild_west_reseller_api\SetShopperInfo
     */
    public function setSCompany($sCompany)
    {
      $this->sCompany = $sCompany;
      return $this;
    }

    /**
     * @return string
     */
    public function getSAddress()
    {
      return $this->sAddress;
    }

    /**
     * @param string $sAddress
     * @return \cloudposse\wild_west_reseller_api\SetShopperInfo
     */
    public function setSAddress($sAddress)
    {
      $this->sAddress = $sAddress;
      return $this;
    }

    /**
     * @return string
     */
    public function getSCity()
    {
      return $this->sCity;
    }

    /**
     * @param string $sCity
     * @return \cloudposse\wild_west_reseller_api\SetShopperInfo
     */
    public function setSCity($sCity)
    {
      $this->sCity = $sCity;
      return $this;
    }

    /**
     * @return string
     */
    public function getSState()
    {
      return $this->sState;
    }

    /**
     * @param string $sState
     * @return \cloudposse\wild_west_reseller_api\SetShopperInfo
     */
    public function setSState($sState)
    {
      $this->sState = $sState;
      return $this;
    }

    /**
     * @return string
     */
    public function getSZip()
    {
      return $this->sZip;
    }

    /**
     * @param string $sZip
     * @return \cloudposse\wild_west_reseller_api\SetShopperInfo
     */
    public function setSZip($sZip)
    {
      $this->sZip = $sZip;
      return $this;
    }

    /**
     * @return string
     */
    public function getSCountry()
    {
      return $this->sCountry;
    }

    /**
     * @param string $sCountry
     * @return \cloudposse\wild_west_reseller_api\SetShopperInfo
     */
    public function setSCountry($sCountry)
    {
      $this->sCountry = $sCountry;
      return $this;
    }

    /**
     * @return string
     */
    public function getSShopperPin()
    {
      return $this->sShopperPin;
    }

    /**
     * @param string $sShopperPin
     * @return \cloudposse\wild_west_reseller_api\SetShopperInfo
     */
    public function setSShopperPin($sShopperPin)
    {
      $this->sShopperPin = $sShopperPin;
      return $this;
    }

}
