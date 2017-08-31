<?php

namespace cloudposse\wild_west_reseller_api;

class OrderServiceRenewalsResponse
{

    /**
     * @var string $OrderServiceRenewalsResult
     */
    protected $OrderServiceRenewalsResult = null;

    /**
     * @param string $OrderServiceRenewalsResult
     */
    public function __construct($OrderServiceRenewalsResult)
    {
      $this->OrderServiceRenewalsResult = $OrderServiceRenewalsResult;
    }

    /**
     * @return string
     */
    public function getOrderServiceRenewalsResult()
    {
      return $this->OrderServiceRenewalsResult;
    }

    /**
     * @param string $OrderServiceRenewalsResult
     * @return \cloudposse\wild_west_reseller_api\OrderServiceRenewalsResponse
     */
    public function setOrderServiceRenewalsResult($OrderServiceRenewalsResult)
    {
      $this->OrderServiceRenewalsResult = $OrderServiceRenewalsResult;
      return $this;
    }

}
