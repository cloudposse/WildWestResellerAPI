<?php

namespace cloudposse\wild_west_reseller_api;

class OrderDomainsResponse
{

    /**
     * @var string $OrderDomainsResult
     */
    protected $OrderDomainsResult = null;

    /**
     * @param string $OrderDomainsResult
     */
    public function __construct($OrderDomainsResult)
    {
      $this->OrderDomainsResult = $OrderDomainsResult;
    }

    /**
     * @return string
     */
    public function getOrderDomainsResult()
    {
      return $this->OrderDomainsResult;
    }

    /**
     * @param string $OrderDomainsResult
     * @return \cloudposse\wild_west_reseller_api\OrderDomainsResponse
     */
    public function setOrderDomainsResult($OrderDomainsResult)
    {
      $this->OrderDomainsResult = $OrderDomainsResult;
      return $this;
    }

}
