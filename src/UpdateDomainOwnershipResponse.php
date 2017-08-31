<?php

namespace cloudposse\wild_west_reseller_api;

class UpdateDomainOwnershipResponse
{

    /**
     * @var string $UpdateDomainOwnershipResult
     */
    protected $UpdateDomainOwnershipResult = null;

    /**
     * @param string $UpdateDomainOwnershipResult
     */
    public function __construct($UpdateDomainOwnershipResult)
    {
      $this->UpdateDomainOwnershipResult = $UpdateDomainOwnershipResult;
    }

    /**
     * @return string
     */
    public function getUpdateDomainOwnershipResult()
    {
      return $this->UpdateDomainOwnershipResult;
    }

    /**
     * @param string $UpdateDomainOwnershipResult
     * @return \cloudposse\wild_west_reseller_api\UpdateDomainOwnershipResponse
     */
    public function setUpdateDomainOwnershipResult($UpdateDomainOwnershipResult)
    {
      $this->UpdateDomainOwnershipResult = $UpdateDomainOwnershipResult;
      return $this;
    }

}
