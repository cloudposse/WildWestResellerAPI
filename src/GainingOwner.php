<?php

namespace cloudposse\wild_west_reseller_api;

class GainingOwner
{

    /**
     * @var ShopperNoDBP $shopperNoDBP
     */
    protected $shopperNoDBP = null;

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

    
    public function __construct()
    {
    
    }

    /**
     * @return ShopperNoDBP
     */
    public function getShopperNoDBP()
    {
      return $this->shopperNoDBP;
    }

    /**
     * @param ShopperNoDBP $shopperNoDBP
     * @return \cloudposse\wild_west_reseller_api\GainingOwner
     */
    public function setShopperNoDBP($shopperNoDBP)
    {
      $this->shopperNoDBP = $shopperNoDBP;
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
     * @return \cloudposse\wild_west_reseller_api\GainingOwner
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
     * @return \cloudposse\wild_west_reseller_api\GainingOwner
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
     * @return \cloudposse\wild_west_reseller_api\GainingOwner
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
     * @return \cloudposse\wild_west_reseller_api\GainingOwner
     */
    public function setTech($tech)
    {
      $this->tech = $tech;
      return $this;
    }

}
