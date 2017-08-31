<?php

namespace cloudposse\wild_west_reseller_api;

class OrderDomainRenewals
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
     * @var Shopper $shopper
     */
    protected $shopper = null;

    /**
     * @var ArrayOfDomainRenewal $items
     */
    protected $items = null;

    /**
     * @var string $sROID
     */
    protected $sROID = null;

    /**
     * @param string $sCLTRID
     * @param Credential $credential
     * @param Shopper $shopper
     * @param ArrayOfDomainRenewal $items
     * @param string $sROID
     */
    public function __construct($sCLTRID, $credential, $shopper, $items, $sROID)
    {
      $this->sCLTRID = $sCLTRID;
      $this->credential = $credential;
      $this->shopper = $shopper;
      $this->items = $items;
      $this->sROID = $sROID;
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
     * @return \cloudposse\wild_west_reseller_api\OrderDomainRenewals
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
     * @return \cloudposse\wild_west_reseller_api\OrderDomainRenewals
     */
    public function setCredential($credential)
    {
      $this->credential = $credential;
      return $this;
    }

    /**
     * @return Shopper
     */
    public function getShopper()
    {
      return $this->shopper;
    }

    /**
     * @param Shopper $shopper
     * @return \cloudposse\wild_west_reseller_api\OrderDomainRenewals
     */
    public function setShopper($shopper)
    {
      $this->shopper = $shopper;
      return $this;
    }

    /**
     * @return ArrayOfDomainRenewal
     */
    public function getItems()
    {
      return $this->items;
    }

    /**
     * @param ArrayOfDomainRenewal $items
     * @return \cloudposse\wild_west_reseller_api\OrderDomainRenewals
     */
    public function setItems($items)
    {
      $this->items = $items;
      return $this;
    }

    /**
     * @return string
     */
    public function getSROID()
    {
      return $this->sROID;
    }

    /**
     * @param string $sROID
     * @return \cloudposse\wild_west_reseller_api\OrderDomainRenewals
     */
    public function setSROID($sROID)
    {
      $this->sROID = $sROID;
      return $this;
    }

}
