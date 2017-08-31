<?php

namespace cloudposse\wild_west_reseller_api;

class GetExpiringNameListResponse
{

    /**
     * @var string $GetExpiringNameListResult
     */
    protected $GetExpiringNameListResult = null;

    /**
     * @param string $GetExpiringNameListResult
     */
    public function __construct($GetExpiringNameListResult)
    {
      $this->GetExpiringNameListResult = $GetExpiringNameListResult;
    }

    /**
     * @return string
     */
    public function getGetExpiringNameListResult()
    {
      return $this->GetExpiringNameListResult;
    }

    /**
     * @param string $GetExpiringNameListResult
     * @return \cloudposse\wild_west_reseller_api\GetExpiringNameListResponse
     */
    public function setGetExpiringNameListResult($GetExpiringNameListResult)
    {
      $this->GetExpiringNameListResult = $GetExpiringNameListResult;
      return $this;
    }

}
