<?php

namespace cloudposse\wild_west_reseller_api;

class DomainRedemption extends Order
{

    /**
     * @var OrderItem $order
     */
    protected $order = null;

    /**
     * @var string $resourceid
     */
    protected $resourceid = null;

    /**
     * @var string $sld
     */
    protected $sld = null;

    /**
     * @var string $tld
     */
    protected $tld = null;

    
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
     * @return \cloudposse\wild_west_reseller_api\DomainRedemption
     */
    public function setOrder($order)
    {
      $this->order = $order;
      return $this;
    }

    /**
     * @return string
     */
    public function getResourceid()
    {
      return $this->resourceid;
    }

    /**
     * @param string $resourceid
     * @return \cloudposse\wild_west_reseller_api\DomainRedemption
     */
    public function setResourceid($resourceid)
    {
      $this->resourceid = $resourceid;
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
     * @return \cloudposse\wild_west_reseller_api\DomainRedemption
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
     * @return \cloudposse\wild_west_reseller_api\DomainRedemption
     */
    public function setTld($tld)
    {
      $this->tld = $tld;
      return $this;
    }

}
