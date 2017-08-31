<?php

namespace cloudposse\wild_west_reseller_api;

class UpdateNameServerResponse
{

    /**
     * @var string $UpdateNameServerResult
     */
    protected $UpdateNameServerResult = null;

    /**
     * @param string $UpdateNameServerResult
     */
    public function __construct($UpdateNameServerResult)
    {
      $this->UpdateNameServerResult = $UpdateNameServerResult;
    }

    /**
     * @return string
     */
    public function getUpdateNameServerResult()
    {
      return $this->UpdateNameServerResult;
    }

    /**
     * @param string $UpdateNameServerResult
     * @return \cloudposse\wild_west_reseller_api\UpdateNameServerResponse
     */
    public function setUpdateNameServerResult($UpdateNameServerResult)
    {
      $this->UpdateNameServerResult = $UpdateNameServerResult;
      return $this;
    }

}
