<?php

namespace cloudposse\wild_west_reseller_api;

class SetServiceAddOnQty
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
     * @var string $sResourceID
     */
    protected $sResourceID = null;

    /**
     * @var int $nProductID
     */
    protected $nProductID = null;

    /**
     * @var int $nQuantity
     */
    protected $nQuantity = null;

    /**
     * @param string $sCLTRID
     * @param Credential $credential
     * @param string $sResourceID
     * @param int $nProductID
     * @param int $nQuantity
     */
    public function __construct($sCLTRID, $credential, $sResourceID, $nProductID, $nQuantity)
    {
      $this->sCLTRID = $sCLTRID;
      $this->credential = $credential;
      $this->sResourceID = $sResourceID;
      $this->nProductID = $nProductID;
      $this->nQuantity = $nQuantity;
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
     * @return \cloudposse\wild_west_reseller_api\SetServiceAddOnQty
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
     * @return \cloudposse\wild_west_reseller_api\SetServiceAddOnQty
     */
    public function setCredential($credential)
    {
      $this->credential = $credential;
      return $this;
    }

    /**
     * @return string
     */
    public function getSResourceID()
    {
      return $this->sResourceID;
    }

    /**
     * @param string $sResourceID
     * @return \cloudposse\wild_west_reseller_api\SetServiceAddOnQty
     */
    public function setSResourceID($sResourceID)
    {
      $this->sResourceID = $sResourceID;
      return $this;
    }

    /**
     * @return int
     */
    public function getNProductID()
    {
      return $this->nProductID;
    }

    /**
     * @param int $nProductID
     * @return \cloudposse\wild_west_reseller_api\SetServiceAddOnQty
     */
    public function setNProductID($nProductID)
    {
      $this->nProductID = $nProductID;
      return $this;
    }

    /**
     * @return int
     */
    public function getNQuantity()
    {
      return $this->nQuantity;
    }

    /**
     * @param int $nQuantity
     * @return \cloudposse\wild_west_reseller_api\SetServiceAddOnQty
     */
    public function setNQuantity($nQuantity)
    {
      $this->nQuantity = $nQuantity;
      return $this;
    }

}
