<?php

namespace cloudposse\wild_west_reseller_api;

class ServiceRenewal extends Order
{

    /**
     * @var OrderItem $order
     */
    protected $order = null;

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
     * @return \cloudposse\wild_west_reseller_api\ServiceRenewal
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
     * @return \cloudposse\wild_west_reseller_api\ServiceRenewal
     */
    public function setResourceid($resourceid)
    {
      $this->resourceid = $resourceid;
      return $this;
    }

}
