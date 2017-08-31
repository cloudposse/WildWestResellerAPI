<?php

namespace cloudposse\wild_west_reseller_api;

class SetupDomainAlertResponse
{

    /**
     * @var string $SetupDomainAlertResult
     */
    protected $SetupDomainAlertResult = null;

    /**
     * @param string $SetupDomainAlertResult
     */
    public function __construct($SetupDomainAlertResult)
    {
      $this->SetupDomainAlertResult = $SetupDomainAlertResult;
    }

    /**
     * @return string
     */
    public function getSetupDomainAlertResult()
    {
      return $this->SetupDomainAlertResult;
    }

    /**
     * @param string $SetupDomainAlertResult
     * @return \cloudposse\wild_west_reseller_api\SetupDomainAlertResponse
     */
    public function setSetupDomainAlertResult($SetupDomainAlertResult)
    {
      $this->SetupDomainAlertResult = $SetupDomainAlertResult;
      return $this;
    }

}
