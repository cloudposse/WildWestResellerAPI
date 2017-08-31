<?php

namespace cloudposse\wild_west_reseller_api;

class GetCatchallStatusForEmailResponse
{

    /**
     * @var string $GetCatchallStatusForEmailResult
     */
    protected $GetCatchallStatusForEmailResult = null;

    /**
     * @param string $GetCatchallStatusForEmailResult
     */
    public function __construct($GetCatchallStatusForEmailResult)
    {
      $this->GetCatchallStatusForEmailResult = $GetCatchallStatusForEmailResult;
    }

    /**
     * @return string
     */
    public function getGetCatchallStatusForEmailResult()
    {
      return $this->GetCatchallStatusForEmailResult;
    }

    /**
     * @param string $GetCatchallStatusForEmailResult
     * @return \cloudposse\wild_west_reseller_api\GetCatchallStatusForEmailResponse
     */
    public function setGetCatchallStatusForEmailResult($GetCatchallStatusForEmailResult)
    {
      $this->GetCatchallStatusForEmailResult = $GetCatchallStatusForEmailResult;
      return $this;
    }

}
