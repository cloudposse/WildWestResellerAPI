<?php

namespace cloudposse\wild_west_reseller_api;

class RemoveDomainAlertResponse
{

    /**
     * @var string $RemoveDomainAlertResult
     */
    protected $RemoveDomainAlertResult = null;

    /**
     * @param string $RemoveDomainAlertResult
     */
    public function __construct($RemoveDomainAlertResult)
    {
      $this->RemoveDomainAlertResult = $RemoveDomainAlertResult;
    }

    /**
     * @return string
     */
    public function getRemoveDomainAlertResult()
    {
      return $this->RemoveDomainAlertResult;
    }

    /**
     * @param string $RemoveDomainAlertResult
     * @return \cloudposse\wild_west_reseller_api\RemoveDomainAlertResponse
     */
    public function setRemoveDomainAlertResult($RemoveDomainAlertResult)
    {
      $this->RemoveDomainAlertResult = $RemoveDomainAlertResult;
      return $this;
    }

}
