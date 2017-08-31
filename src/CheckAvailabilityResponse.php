<?php

namespace cloudposse\wild_west_reseller_api;

class CheckAvailabilityResponse
{

    /**
     * @var string $CheckAvailabilityResult
     */
    protected $CheckAvailabilityResult = null;

    /**
     * @param string $CheckAvailabilityResult
     */
    public function __construct($CheckAvailabilityResult)
    {
      $this->CheckAvailabilityResult = $CheckAvailabilityResult;
    }

    /**
     * @return string
     */
    public function getCheckAvailabilityResult()
    {
      return $this->CheckAvailabilityResult;
    }

    /**
     * @param string $CheckAvailabilityResult
     * @return \cloudposse\wild_west_reseller_api\CheckAvailabilityResponse
     */
    public function setCheckAvailabilityResult($CheckAvailabilityResult)
    {
      $this->CheckAvailabilityResult = $CheckAvailabilityResult;
      return $this;
    }

}
