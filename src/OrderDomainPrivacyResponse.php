<?php

namespace cloudposse\wild_west_reseller_api;

class OrderDomainPrivacyResponse
{

    /**
     * @var string $OrderDomainPrivacyResult
     */
    protected $OrderDomainPrivacyResult = null;

    /**
     * @param string $OrderDomainPrivacyResult
     */
    public function __construct($OrderDomainPrivacyResult)
    {
      $this->OrderDomainPrivacyResult = $OrderDomainPrivacyResult;
    }

    /**
     * @return string
     */
    public function getOrderDomainPrivacyResult()
    {
      return $this->OrderDomainPrivacyResult;
    }

    /**
     * @param string $OrderDomainPrivacyResult
     * @return \cloudposse\wild_west_reseller_api\OrderDomainPrivacyResponse
     */
    public function setOrderDomainPrivacyResult($OrderDomainPrivacyResult)
    {
      $this->OrderDomainPrivacyResult = $OrderDomainPrivacyResult;
      return $this;
    }

}
