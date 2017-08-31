<?php

namespace cloudposse\wild_west_reseller_api;

class DomainTransfer extends Order
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
     * @var string $authInfo
     */
    protected $authInfo = null;

    /**
     * @var string $idnScript
     */
    protected $idnScript = null;

    
    public function __construct()
    {
    
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
     * @return \cloudposse\wild_west_reseller_api\DomainTransfer
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
     * @return \cloudposse\wild_west_reseller_api\DomainTransfer
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
     * @return \cloudposse\wild_west_reseller_api\DomainTransfer
     */
    public function setTld($tld)
    {
      $this->tld = $tld;
      return $this;
    }

    /**
     * @return string
     */
    public function getAuthInfo()
    {
      return $this->authInfo;
    }

    /**
     * @param string $authInfo
     * @return \cloudposse\wild_west_reseller_api\DomainTransfer
     */
    public function setAuthInfo($authInfo)
    {
      $this->authInfo = $authInfo;
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
     * @return \cloudposse\wild_west_reseller_api\DomainTransfer
     */
    public function setIdnScript($idnScript)
    {
      $this->idnScript = $idnScript;
      return $this;
    }

}
