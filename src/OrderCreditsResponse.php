<?php

namespace cloudposse\wild_west_reseller_api;

class OrderCreditsResponse
{

    /**
     * @var string $OrderCreditsResult
     */
    protected $OrderCreditsResult = null;

    /**
     * @param string $OrderCreditsResult
     */
    public function __construct($OrderCreditsResult)
    {
      $this->OrderCreditsResult = $OrderCreditsResult;
    }

    /**
     * @return string
     */
    public function getOrderCreditsResult()
    {
      return $this->OrderCreditsResult;
    }

    /**
     * @param string $OrderCreditsResult
     * @return \cloudposse\wild_west_reseller_api\OrderCreditsResponse
     */
    public function setOrderCreditsResult($OrderCreditsResult)
    {
      $this->OrderCreditsResult = $OrderCreditsResult;
      return $this;
    }

}
