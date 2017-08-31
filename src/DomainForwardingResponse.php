<?php

namespace cloudposse\wild_west_reseller_api;

class DomainForwardingResponse
{

    /**
     * @var string $DomainForwardingResult
     */
    protected $DomainForwardingResult = null;

    /**
     * @param string $DomainForwardingResult
     */
    public function __construct($DomainForwardingResult)
    {
      $this->DomainForwardingResult = $DomainForwardingResult;
    }

    /**
     * @return string
     */
    public function getDomainForwardingResult()
    {
      return $this->DomainForwardingResult;
    }

    /**
     * @param string $DomainForwardingResult
     * @return \cloudposse\wild_west_reseller_api\DomainForwardingResponse
     */
    public function setDomainForwardingResult($DomainForwardingResult)
    {
      $this->DomainForwardingResult = $DomainForwardingResult;
      return $this;
    }

}
