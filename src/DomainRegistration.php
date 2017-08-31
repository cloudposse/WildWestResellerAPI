<?php

namespace cloudposse\wild_west_reseller_api;

class DomainRegistration extends Order
{

    /**
     * @var OrderItem $order
     */
    protected $order = null;

    /**
     * @var string $sld
     */
    protected $sld = null;

    /**
     * @var string $tld
     */
    protected $tld = null;

    /**
     * @var string $idnScript
     */
    protected $idnScript = null;

    /**
     * @var int $period
     */
    protected $period = null;

    /**
     * @var ContactInfo $registrant
     */
    protected $registrant = null;

    /**
     * @var Nexus $nexus
     */
    protected $nexus = null;

    /**
     * @var ArrayOfNS $nsArray
     */
    protected $nsArray = null;

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
     * @var int $autorenewflag
     */
    protected $autorenewflag = null;

    /**
     * @var string $customDataXML
     */
    protected $customDataXML = null;

    /**
     * @param int $period
     * @param int $autorenewflag
     */
    public function __construct($period, $autorenewflag)
    {
      $this->period = $period;
      $this->autorenewflag = $autorenewflag;
    }

    /**
     * @return OrderItem
     */
    public function getOrder()
    {
      return $this->order;
    }

    /**
     * @param OrderItem $order
     * @return \cloudposse\wild_west_reseller_api\DomainRegistration
     */
    public function setOrder($order)
    {
      $this->order = $order;
      return $this;
    }

    /**
     * @return string
     */
    public function getSld()
    {
      return $this->sld;
    }

    /**
     * @param string $sld
     * @return \cloudposse\wild_west_reseller_api\DomainRegistration
     */
    public function setSld($sld)
    {
      $this->sld = $sld;
      return $this;
    }

    /**
     * @return string
     */
    public function getTld()
    {
      return $this->tld;
    }

    /**
     * @param string $tld
     * @return \cloudposse\wild_west_reseller_api\DomainRegistration
     */
    public function setTld($tld)
    {
      $this->tld = $tld;
      return $this;
    }

    /**
     * @return string
     */
    public function getIdnScript()
    {
      return $this->idnScript;
    }

    /**
     * @param string $idnScript
     * @return \cloudposse\wild_west_reseller_api\DomainRegistration
     */
    public function setIdnScript($idnScript)
    {
      $this->idnScript = $idnScript;
      return $this;
    }

    /**
     * @return int
     */
    public function getPeriod()
    {
      return $this->period;
    }

    /**
     * @param int $period
     * @return \cloudposse\wild_west_reseller_api\DomainRegistration
     */
    public function setPeriod($period)
    {
      $this->period = $period;
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
     * @return \cloudposse\wild_west_reseller_api\DomainRegistration
     */
    public function setRegistrant($registrant)
    {
      $this->registrant = $registrant;
      return $this;
    }

    /**
     * @return Nexus
     */
    public function getNexus()
    {
      return $this->nexus;
    }

    /**
     * @param Nexus $nexus
     * @return \cloudposse\wild_west_reseller_api\DomainRegistration
     */
    public function setNexus($nexus)
    {
      $this->nexus = $nexus;
      return $this;
    }

    /**
     * @return ArrayOfNS
     */
    public function getNsArray()
    {
      return $this->nsArray;
    }

    /**
     * @param ArrayOfNS $nsArray
     * @return \cloudposse\wild_west_reseller_api\DomainRegistration
     */
    public function setNsArray($nsArray)
    {
      $this->nsArray = $nsArray;
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
     * @return \cloudposse\wild_west_reseller_api\DomainRegistration
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
     * @return \cloudposse\wild_west_reseller_api\DomainRegistration
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
     * @return \cloudposse\wild_west_reseller_api\DomainRegistration
     */
    public function setTech($tech)
    {
      $this->tech = $tech;
      return $this;
    }

    /**
     * @return int
     */
    public function getAutorenewflag()
    {
      return $this->autorenewflag;
    }

    /**
     * @param int $autorenewflag
     * @return \cloudposse\wild_west_reseller_api\DomainRegistration
     */
    public function setAutorenewflag($autorenewflag)
    {
      $this->autorenewflag = $autorenewflag;
      return $this;
    }

    /**
     * @return string
     */
    public function getCustomDataXML()
    {
      return $this->customDataXML;
    }

    /**
     * @param string $customDataXML
     * @return \cloudposse\wild_west_reseller_api\DomainRegistration
     */
    public function setCustomDataXML($customDataXML)
    {
      $this->customDataXML = $customDataXML;
      return $this;
    }

}
