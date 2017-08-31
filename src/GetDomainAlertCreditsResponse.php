<?php

namespace cloudposse\wild_west_reseller_api;

class GetDomainAlertCreditsResponse
{

    /**
     * @var string $GetDomainAlertCreditsResult
     */
    protected $GetDomainAlertCreditsResult = null;

    /**
     * @param string $GetDomainAlertCreditsResult
     */
    public function __construct($GetDomainAlertCreditsResult)
    {
      $this->GetDomainAlertCreditsResult = $GetDomainAlertCreditsResult;
    }

    /**
     * @return string
     */
    public function getGetDomainAlertCreditsResult()
    {
      return $this->GetDomainAlertCreditsResult;
    }

    /**
     * @param string $GetDomainAlertCreditsResult
     * @return \cloudposse\wild_west_reseller_api\GetDomainAlertCreditsResponse
     */
    public function setGetDomainAlertCreditsResult($GetDomainAlertCreditsResult)
    {
      $this->GetDomainAlertCreditsResult = $GetDomainAlertCreditsResult;
      return $this;
    }

}
