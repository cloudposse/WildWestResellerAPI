<?php

namespace cloudposse\wild_west_reseller_api;

class SetDomainLockingResponse
{

    /**
     * @var string $SetDomainLockingResult
     */
    protected $SetDomainLockingResult = null;

    /**
     * @param string $SetDomainLockingResult
     */
    public function __construct($SetDomainLockingResult)
    {
      $this->SetDomainLockingResult = $SetDomainLockingResult;
    }

    /**
     * @return string
     */
    public function getSetDomainLockingResult()
    {
      return $this->SetDomainLockingResult;
    }

    /**
     * @param string $SetDomainLockingResult
     * @return \cloudposse\wild_west_reseller_api\SetDomainLockingResponse
     */
    public function setSetDomainLockingResult($SetDomainLockingResult)
    {
      $this->SetDomainLockingResult = $SetDomainLockingResult;
      return $this;
    }

}
