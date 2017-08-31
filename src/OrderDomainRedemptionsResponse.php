<?php

namespace cloudposse\wild_west_reseller_api;

class OrderDomainRedemptionsResponse
{

    /**
     * @var string $OrderDomainRedemptionsResult
     */
    protected $OrderDomainRedemptionsResult = null;

    /**
     * @param string $OrderDomainRedemptionsResult
     */
    public function __construct($OrderDomainRedemptionsResult)
    {
      $this->OrderDomainRedemptionsResult = $OrderDomainRedemptionsResult;
    }

    /**
     * @return string
     */
    public function getOrderDomainRedemptionsResult()
    {
      return $this->OrderDomainRedemptionsResult;
    }

    /**
     * @param string $OrderDomainRedemptionsResult
     * @return \cloudposse\wild_west_reseller_api\OrderDomainRedemptionsResponse
     */
    public function setOrderDomainRedemptionsResult($OrderDomainRedemptionsResult)
    {
      $this->OrderDomainRedemptionsResult = $OrderDomainRedemptionsResult;
      return $this;
    }

}
