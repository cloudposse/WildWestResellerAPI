<?php

namespace cloudposse\wild_west_reseller_api;

class UpdateDomainContact
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
     * @var ArrayOfDomain $domainArray
     */
    protected $domainArray = null;

    /**
     * @var ContactInfo $registrant
     */
    protected $registrant = null;

    /**
     * @var ContactInfo $admin
     */
    protected $admin = null;

    /**
     * @var ContactInfo $billing
     */
    protected $billing = null;

    /**
     * @var ContactInfo $tech
     */
    protected $tech = null;

    /**
     * @param string $sCLTRID
     * @param Credential $credential
     * @param ArrayOfDomain $domainArray
     * @param ContactInfo $registrant
     * @param ContactInfo $admin
     * @param ContactInfo $billing
     * @param ContactInfo $tech
     */
    public function __construct($sCLTRID, $credential, $domainArray, $registrant, $admin, $billing, $tech)
    {
      $this->sCLTRID = $sCLTRID;
      $this->credential = $credential;
      $this->domainArray = $domainArray;
      $this->registrant = $registrant;
      $this->admin = $admin;
      $this->billing = $billing;
      $this->tech = $tech;
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
     * @return \cloudposse\wild_west_reseller_api\UpdateDomainContact
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
     * @return \cloudposse\wild_west_reseller_api\UpdateDomainContact
     */
    public function setCredential($credential)
    {
      $this->credential = $credential;
      return $this;
    }

    /**
     * @return ArrayOfDomain
     */
    public function getDomainArray()
    {
      return $this->domainArray;
    }

    /**
     * @param ArrayOfDomain $domainArray
     * @return \cloudposse\wild_west_reseller_api\UpdateDomainContact
     */
    public function setDomainArray($domainArray)
    {
      $this->domainArray = $domainArray;
      return $this;
    }

    /**
     * @return ContactInfo
     */
    public function getRegistrant()
    {
      return $this->registrant;
    }

    /**
     * @param ContactInfo $registrant
     * @return \cloudposse\wild_west_reseller_api\UpdateDomainContact
     */
    public function setRegistrant($registrant)
    {
      $this->registrant = $registrant;
      return $this;
    }

    /**
     * @return ContactInfo
     */
    public function getAdmin()
    {
      return $this->admin;
    }

    /**
     * @param ContactInfo $admin
     * @return \cloudposse\wild_west_reseller_api\UpdateDomainContact
     */
    public function setAdmin($admin)
    {
      $this->admin = $admin;
      return $this;
    }

    /**
     * @return ContactInfo
     */
    public function getBilling()
    {
      return $this->billing;
    }

    /**
     * @param ContactInfo $billing
     * @return \cloudposse\wild_west_reseller_api\UpdateDomainContact
     */
    public function setBilling($billing)
    {
      $this->billing = $billing;
      return $this;
    }

    /**
     * @return ContactInfo
     */
    public function getTech()
    {
      return $this->tech;
    }

    /**
     * @param ContactInfo $tech
     * @return \cloudposse\wild_west_reseller_api\UpdateDomainContact
     */
    public function setTech($tech)
    {
      $this->tech = $tech;
      return $this;
    }

}
