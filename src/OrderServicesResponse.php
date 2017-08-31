<?php

namespace cloudposse\wild_west_reseller_api;

class OrderServicesResponse
{

    /**
     * @var string $OrderServicesResult
     */
    protected $OrderServicesResult = null;

    /**
     * @param string $OrderServicesResult
     */
    public function __construct($OrderServicesResult)
    {
      $this->OrderServicesResult = $OrderServicesResult;
    }

    /**
     * @return string
     */
    public function getOrderServicesResult()
    {
      return $this->OrderServicesResult;
    }

    /**
     * @param string $OrderServicesResult
     * @return \cloudposse\wild_west_reseller_api\OrderServicesResponse
     */
    public function setOrderServicesResult($OrderServicesResult)
    {
      $this->OrderServicesResult = $OrderServicesResult;
      return $this;
    }

}
