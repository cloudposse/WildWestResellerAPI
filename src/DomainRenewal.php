<?php

namespace cloudposse\wild_west_reseller_api;

class DomainRenewal extends Order
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

    /**
     * @var int $period
     */
    protected $period = null;

    /**
     * @param int $period
     */
    public function __construct($period)
    {
      $this->period = $period;
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
     * @return \cloudposse\wild_west_reseller_api\DomainRenewal
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
     * @return \cloudposse\wild_west_reseller_api\DomainRenewal
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
     * @return \cloudposse\wild_west_reseller_api\DomainRenewal
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
     * @return \cloudposse\wild_west_reseller_api\DomainRenewal
     */
    public function setTld($tld)
    {
      $this->tld = $tld;
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
     * @return \cloudposse\wild_west_reseller_api\DomainRenewal
     */
    public function setPeriod($period)
    {
      $this->period = $period;
      return $this;
    }

}
