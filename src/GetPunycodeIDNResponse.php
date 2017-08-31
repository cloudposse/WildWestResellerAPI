<?php

namespace cloudposse\wild_west_reseller_api;

class GetPunycodeIDNResponse
{

    /**
     * @var string $GetPunycodeIDNResult
     */
    protected $GetPunycodeIDNResult = null;

    /**
     * @param string $GetPunycodeIDNResult
     */
    public function __construct($GetPunycodeIDNResult)
    {
      $this->GetPunycodeIDNResult = $GetPunycodeIDNResult;
    }

    /**
     * @return string
     */
    public function getGetPunycodeIDNResult()
    {
      return $this->GetPunycodeIDNResult;
    }

    /**
     * @param string $GetPunycodeIDNResult
     * @return \cloudposse\wild_west_reseller_api\GetPunycodeIDNResponse
     */
    public function setGetPunycodeIDNResult($GetPunycodeIDNResult)
    {
      $this->GetPunycodeIDNResult = $GetPunycodeIDNResult;
      return $this;
    }

}
