<?php

namespace cloudposse\wild_west_reseller_api;

class DomainBackOrder extends Order
{

    /**
     * @var OrderItem $order
     */
    protected $order = null;

    /**
     * @var boolean $privateBackOrder
     */
    protected $privateBackOrder = null;

    /**
     * @var string $sld
     */
    protected $sld = null;

    /**
     * @var string $tld
     */
    protected $tld = null;

    /**
     * @var ContactInfo $registrant
     */
    protected $registrant = null;

    /**
     * @var Nexus $nexus
     */
    protected $nexus = null;

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
     * @param boolean $privateBackOrder
     */
    public function __construct($privateBackOrder)
    {
      $this->privateBackOrder = $privateBackOrder;
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
     * @return \cloudposse\wild_west_reseller_api\DomainBackOrder
     */
    public function setOrder($order)
    {
      $this->order = $order;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getPrivateBackOrder()
    {
      return $this->privateBackOrder;
    }

    /**
     * @param boolean $privateBackOrder
     * @return \cloudposse\wild_west_reseller_api\DomainBackOrder
     */
    public function setPrivateBackOrder($privateBackOrder)
    {
      $this->privateBackOrder = $privateBackOrder;
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
     * @return \cloudposse\wild_west_reseller_api\DomainBackOrder
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
     * @return \cloudposse\wild_west_reseller_api\DomainBackOrder
     */
    public function setTld($tld)
    {
      $this->tld = $tld;
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
     * @return \cloudposse\wild_west_reseller_api\DomainBackOrder
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
     * @return \cloudposse\wild_west_reseller_api\DomainBackOrder
     */
    public function setNexus($nexus)
    {
      $this->nexus = $nexus;
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
     * @return \cloudposse\wild_west_reseller_api\DomainBackOrder
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
     * @return \cloudposse\wild_west_reseller_api\DomainBackOrder
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
     * @return \cloudposse\wild_west_reseller_api\DomainBackOrder
     */
    public function setTech($tech)
    {
      $this->tech = $tech;
      return $this;
    }

}
