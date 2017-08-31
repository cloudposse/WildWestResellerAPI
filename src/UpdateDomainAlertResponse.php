<?php

namespace cloudposse\wild_west_reseller_api;

class UpdateDomainAlertResponse
{

    /**
     * @var string $UpdateDomainAlertResult
     */
    protected $UpdateDomainAlertResult = null;

    /**
     * @param string $UpdateDomainAlertResult
     */
    public function __construct($UpdateDomainAlertResult)
    {
      $this->UpdateDomainAlertResult = $UpdateDomainAlertResult;
    }

    /**
     * @return string
     */
    public function getUpdateDomainAlertResult()
    {
      return $this->UpdateDomainAlertResult;
    }

    /**
     * @param string $UpdateDomainAlertResult
     * @return \cloudposse\wild_west_reseller_api\UpdateDomainAlertResponse
     */
    public function setUpdateDomainAlertResult($UpdateDomainAlertResult)
    {
      $this->UpdateDomainAlertResult = $UpdateDomainAlertResult;
      return $this;
    }

}
