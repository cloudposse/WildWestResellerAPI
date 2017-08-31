<?php

namespace cloudposse\wild_west_reseller_api;

class OrderServices
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
     * @var ArrayOfProductGroup $ProductGroupArray
     */
    protected $ProductGroupArray = null;

    /**
     * @var string $sROID
     */
    protected $sROID = null;

    /**
     * @param string $sCLTRID
     * @param Credential $credential
     * @param Shopper $shopper
     * @param ArrayOfProductGroup $ProductGroupArray
     * @param string $sROID
     */
    public function __construct($sCLTRID, $credential, $shopper, $ProductGroupArray, $sROID)
    {
      $this->sCLTRID = $sCLTRID;
      $this->credential = $credential;
      $this->shopper = $shopper;
      $this->ProductGroupArray = $ProductGroupArray;
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
     * @return \cloudposse\wild_west_reseller_api\OrderServices
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
     * @return \cloudposse\wild_west_reseller_api\OrderServices
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
     * @return \cloudposse\wild_west_reseller_api\OrderServices
     */
    public function setShopper($shopper)
    {
      $this->shopper = $shopper;
      return $this;
    }

    /**
     * @return ArrayOfProductGroup
     */
    public function getProductGroupArray()
    {
      return $this->ProductGroupArray;
    }

    /**
     * @param ArrayOfProductGroup $ProductGroupArray
     * @return \cloudposse\wild_west_reseller_api\OrderServices
     */
    public function setProductGroupArray($ProductGroupArray)
    {
      $this->ProductGroupArray = $ProductGroupArray;
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
     * @return \cloudposse\wild_west_reseller_api\OrderServices
     */
    public function setSROID($sROID)
    {
      $this->sROID = $sROID;
      return $this;
    }

}
