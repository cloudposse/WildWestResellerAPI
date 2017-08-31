<?php

namespace cloudposse\wild_west_reseller_api;

class GetAutoResponderForEmailResponse
{

    /**
     * @var string $GetAutoResponderForEmailResult
     */
    protected $GetAutoResponderForEmailResult = null;

    /**
     * @param string $GetAutoResponderForEmailResult
     */
    public function __construct($GetAutoResponderForEmailResult)
    {
      $this->GetAutoResponderForEmailResult = $GetAutoResponderForEmailResult;
    }

    /**
     * @return string
     */
    public function getGetAutoResponderForEmailResult()
    {
      return $this->GetAutoResponderForEmailResult;
    }

    /**
     * @param string $GetAutoResponderForEmailResult
     * @return \cloudposse\wild_west_reseller_api\GetAutoResponderForEmailResponse
     */
    public function setGetAutoResponderForEmailResult($GetAutoResponderForEmailResult)
    {
      $this->GetAutoResponderForEmailResult = $GetAutoResponderForEmailResult;
      return $this;
    }

}
