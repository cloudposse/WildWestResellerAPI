<?php

namespace cloudposse\wild_west_reseller_api;

class DomainByProxy extends Order
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
     * @var string $resourceid
     */
    protected $resourceid = null;

    
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
     * @return \cloudposse\wild_west_reseller_api\DomainByProxy
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
     * @return \cloudposse\wild_west_reseller_api\DomainByProxy
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
     * @return \cloudposse\wild_west_reseller_api\DomainByProxy
     */
    public function setTld($tld)
    {
      $this->tld = $tld;
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
     * @return \cloudposse\wild_west_reseller_api\DomainByProxy
     */
    public function setResourceid($resourceid)
    {
      $this->resourceid = $resourceid;
      return $this;
    }

}
