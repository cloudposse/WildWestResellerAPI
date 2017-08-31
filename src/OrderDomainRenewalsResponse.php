<?php

namespace cloudposse\wild_west_reseller_api;

class OrderDomainRenewalsResponse
{

    /**
     * @var string $OrderDomainRenewalsResult
     */
    protected $OrderDomainRenewalsResult = null;

    /**
     * @param string $OrderDomainRenewalsResult
     */
    public function __construct($OrderDomainRenewalsResult)
    {
      $this->OrderDomainRenewalsResult = $OrderDomainRenewalsResult;
    }

    /**
     * @return string
     */
    public function getOrderDomainRenewalsResult()
    {
      return $this->OrderDomainRenewalsResult;
    }

    /**
     * @param string $OrderDomainRenewalsResult
     * @return \cloudposse\wild_west_reseller_api\OrderDomainRenewalsResponse
     */
    public function setOrderDomainRenewalsResult($OrderDomainRenewalsResult)
    {
      $this->OrderDomainRenewalsResult = $OrderDomainRenewalsResult;
      return $this;
    }

}
