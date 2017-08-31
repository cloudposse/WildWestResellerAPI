<?php

namespace cloudposse\wild_west_reseller_api;

class GetStatusForEmailResponse
{

    /**
     * @var string $GetStatusForEmailResult
     */
    protected $GetStatusForEmailResult = null;

    /**
     * @param string $GetStatusForEmailResult
     */
    public function __construct($GetStatusForEmailResult)
    {
      $this->GetStatusForEmailResult = $GetStatusForEmailResult;
    }

    /**
     * @return string
     */
    public function getGetStatusForEmailResult()
    {
      return $this->GetStatusForEmailResult;
    }

    /**
     * @param string $GetStatusForEmailResult
     * @return \cloudposse\wild_west_reseller_api\GetStatusForEmailResponse
     */
    public function setGetStatusForEmailResult($GetStatusForEmailResult)
    {
      $this->GetStatusForEmailResult = $GetStatusForEmailResult;
      return $this;
    }

}
