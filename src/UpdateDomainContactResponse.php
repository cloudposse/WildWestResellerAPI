<?php

namespace cloudposse\wild_west_reseller_api;

class UpdateDomainContactResponse
{

    /**
     * @var string $UpdateDomainContactResult
     */
    protected $UpdateDomainContactResult = null;

    /**
     * @param string $UpdateDomainContactResult
     */
    public function __construct($UpdateDomainContactResult)
    {
      $this->UpdateDomainContactResult = $UpdateDomainContactResult;
    }

    /**
     * @return string
     */
    public function getUpdateDomainContactResult()
    {
      return $this->UpdateDomainContactResult;
    }

    /**
     * @param string $UpdateDomainContactResult
     * @return \cloudposse\wild_west_reseller_api\UpdateDomainContactResponse
     */
    public function setUpdateDomainContactResult($UpdateDomainContactResult)
    {
      $this->UpdateDomainContactResult = $UpdateDomainContactResult;
      return $this;
    }

}
