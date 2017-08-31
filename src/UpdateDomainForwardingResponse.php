<?php

namespace cloudposse\wild_west_reseller_api;

class UpdateDomainForwardingResponse
{

    /**
     * @var string $UpdateDomainForwardingResult
     */
    protected $UpdateDomainForwardingResult = null;

    /**
     * @param string $UpdateDomainForwardingResult
     */
    public function __construct($UpdateDomainForwardingResult)
    {
      $this->UpdateDomainForwardingResult = $UpdateDomainForwardingResult;
    }

    /**
     * @return string
     */
    public function getUpdateDomainForwardingResult()
    {
      return $this->UpdateDomainForwardingResult;
    }

    /**
     * @param string $UpdateDomainForwardingResult
     * @return \cloudposse\wild_west_reseller_api\UpdateDomainForwardingResponse
     */
    public function setUpdateDomainForwardingResult($UpdateDomainForwardingResult)
    {
      $this->UpdateDomainForwardingResult = $UpdateDomainForwardingResult;
      return $this;
    }

}
