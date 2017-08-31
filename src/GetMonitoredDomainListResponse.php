<?php

namespace cloudposse\wild_west_reseller_api;

class GetMonitoredDomainListResponse
{

    /**
     * @var string $GetMonitoredDomainListResult
     */
    protected $GetMonitoredDomainListResult = null;

    /**
     * @param string $GetMonitoredDomainListResult
     */
    public function __construct($GetMonitoredDomainListResult)
    {
      $this->GetMonitoredDomainListResult = $GetMonitoredDomainListResult;
    }

    /**
     * @return string
     */
    public function getGetMonitoredDomainListResult()
    {
      return $this->GetMonitoredDomainListResult;
    }

    /**
     * @param string $GetMonitoredDomainListResult
     * @return \cloudposse\wild_west_reseller_api\GetMonitoredDomainListResponse
     */
    public function setGetMonitoredDomainListResult($GetMonitoredDomainListResult)
    {
      $this->GetMonitoredDomainListResult = $GetMonitoredDomainListResult;
      return $this;
    }

}
