<?php

namespace cloudposse\wild_west_reseller_api;

class CheckDomainsResponse
{

    /**
     * @var string $CheckDomainsResult
     */
    protected $CheckDomainsResult = null;

    /**
     * @param string $CheckDomainsResult
     */
    public function __construct($CheckDomainsResult)
    {
      $this->CheckDomainsResult = $CheckDomainsResult;
    }

    /**
     * @return string
     */
    public function getCheckDomainsResult()
    {
      return $this->CheckDomainsResult;
    }

    /**
     * @param string $CheckDomainsResult
     * @return \cloudposse\wild_west_reseller_api\CheckDomainsResponse
     */
    public function setCheckDomainsResult($CheckDomainsResult)
    {
      $this->CheckDomainsResult = $CheckDomainsResult;
      return $this;
    }

}
