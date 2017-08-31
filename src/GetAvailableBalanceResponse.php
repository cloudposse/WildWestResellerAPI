<?php

namespace cloudposse\wild_west_reseller_api;

class GetAvailableBalanceResponse
{

    /**
     * @var string $GetAvailableBalanceResult
     */
    protected $GetAvailableBalanceResult = null;

    /**
     * @param string $GetAvailableBalanceResult
     */
    public function __construct($GetAvailableBalanceResult)
    {
      $this->GetAvailableBalanceResult = $GetAvailableBalanceResult;
    }

    /**
     * @return string
     */
    public function getGetAvailableBalanceResult()
    {
      return $this->GetAvailableBalanceResult;
    }

    /**
     * @param string $GetAvailableBalanceResult
     * @return \cloudposse\wild_west_reseller_api\GetAvailableBalanceResponse
     */
    public function setGetAvailableBalanceResult($GetAvailableBalanceResult)
    {
      $this->GetAvailableBalanceResult = $GetAvailableBalanceResult;
      return $this;
    }

}
