<?php

namespace cloudposse\wild_west_reseller_api;

class GetEmailAddressesForPlanResponse
{

    /**
     * @var string $GetEmailAddressesForPlanResult
     */
    protected $GetEmailAddressesForPlanResult = null;

    /**
     * @param string $GetEmailAddressesForPlanResult
     */
    public function __construct($GetEmailAddressesForPlanResult)
    {
      $this->GetEmailAddressesForPlanResult = $GetEmailAddressesForPlanResult;
    }

    /**
     * @return string
     */
    public function getGetEmailAddressesForPlanResult()
    {
      return $this->GetEmailAddressesForPlanResult;
    }

    /**
     * @param string $GetEmailAddressesForPlanResult
     * @return \cloudposse\wild_west_reseller_api\GetEmailAddressesForPlanResponse
     */
    public function setGetEmailAddressesForPlanResult($GetEmailAddressesForPlanResult)
    {
      $this->GetEmailAddressesForPlanResult = $GetEmailAddressesForPlanResult;
      return $this;
    }

}
