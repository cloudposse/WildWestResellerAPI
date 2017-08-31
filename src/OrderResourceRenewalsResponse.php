<?php

namespace cloudposse\wild_west_reseller_api;

class OrderResourceRenewalsResponse
{

    /**
     * @var string $OrderResourceRenewalsResult
     */
    protected $OrderResourceRenewalsResult = null;

    /**
     * @param string $OrderResourceRenewalsResult
     */
    public function __construct($OrderResourceRenewalsResult)
    {
      $this->OrderResourceRenewalsResult = $OrderResourceRenewalsResult;
    }

    /**
     * @return string
     */
    public function getOrderResourceRenewalsResult()
    {
      return $this->OrderResourceRenewalsResult;
    }

    /**
     * @param string $OrderResourceRenewalsResult
     * @return \cloudposse\wild_west_reseller_api\OrderResourceRenewalsResponse
     */
    public function setOrderResourceRenewalsResult($OrderResourceRenewalsResult)
    {
      $this->OrderResourceRenewalsResult = $OrderResourceRenewalsResult;
      return $this;
    }

}
