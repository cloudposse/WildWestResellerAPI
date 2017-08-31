<?php

namespace cloudposse\wild_west_reseller_api;

class OrderDomainTransfersResponse
{

    /**
     * @var string $OrderDomainTransfersResult
     */
    protected $OrderDomainTransfersResult = null;

    /**
     * @param string $OrderDomainTransfersResult
     */
    public function __construct($OrderDomainTransfersResult)
    {
      $this->OrderDomainTransfersResult = $OrderDomainTransfersResult;
    }

    /**
     * @return string
     */
    public function getOrderDomainTransfersResult()
    {
      return $this->OrderDomainTransfersResult;
    }

    /**
     * @param string $OrderDomainTransfersResult
     * @return \cloudposse\wild_west_reseller_api\OrderDomainTransfersResponse
     */
    public function setOrderDomainTransfersResult($OrderDomainTransfersResult)
    {
      $this->OrderDomainTransfersResult = $OrderDomainTransfersResult;
      return $this;
    }

}
