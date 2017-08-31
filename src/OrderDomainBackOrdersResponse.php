<?php

namespace cloudposse\wild_west_reseller_api;

class OrderDomainBackOrdersResponse
{

    /**
     * @var string $OrderDomainBackOrdersResult
     */
    protected $OrderDomainBackOrdersResult = null;

    /**
     * @param string $OrderDomainBackOrdersResult
     */
    public function __construct($OrderDomainBackOrdersResult)
    {
      $this->OrderDomainBackOrdersResult = $OrderDomainBackOrdersResult;
    }

    /**
     * @return string
     */
    public function getOrderDomainBackOrdersResult()
    {
      return $this->OrderDomainBackOrdersResult;
    }

    /**
     * @param string $OrderDomainBackOrdersResult
     * @return \cloudposse\wild_west_reseller_api\OrderDomainBackOrdersResponse
     */
    public function setOrderDomainBackOrdersResult($OrderDomainBackOrdersResult)
    {
      $this->OrderDomainBackOrdersResult = $OrderDomainBackOrdersResult;
      return $this;
    }

}
