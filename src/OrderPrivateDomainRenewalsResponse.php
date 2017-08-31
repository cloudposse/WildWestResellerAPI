<?php

namespace cloudposse\wild_west_reseller_api;

class OrderPrivateDomainRenewalsResponse
{

    /**
     * @var string $OrderPrivateDomainRenewalsResult
     */
    protected $OrderPrivateDomainRenewalsResult = null;

    /**
     * @param string $OrderPrivateDomainRenewalsResult
     */
    public function __construct($OrderPrivateDomainRenewalsResult)
    {
      $this->OrderPrivateDomainRenewalsResult = $OrderPrivateDomainRenewalsResult;
    }

    /**
     * @return string
     */
    public function getOrderPrivateDomainRenewalsResult()
    {
      return $this->OrderPrivateDomainRenewalsResult;
    }

    /**
     * @param string $OrderPrivateDomainRenewalsResult
     * @return \cloudposse\wild_west_reseller_api\OrderPrivateDomainRenewalsResponse
     */
    public function setOrderPrivateDomainRenewalsResult($OrderPrivateDomainRenewalsResult)
    {
      $this->OrderPrivateDomainRenewalsResult = $OrderPrivateDomainRenewalsResult;
      return $this;
    }

}
