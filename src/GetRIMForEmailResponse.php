<?php

namespace cloudposse\wild_west_reseller_api;

class GetRIMForEmailResponse
{

    /**
     * @var string $GetRIMForEmailResult
     */
    protected $GetRIMForEmailResult = null;

    /**
     * @param string $GetRIMForEmailResult
     */
    public function __construct($GetRIMForEmailResult)
    {
      $this->GetRIMForEmailResult = $GetRIMForEmailResult;
    }

    /**
     * @return string
     */
    public function getGetRIMForEmailResult()
    {
      return $this->GetRIMForEmailResult;
    }

    /**
     * @param string $GetRIMForEmailResult
     * @return \cloudposse\wild_west_reseller_api\GetRIMForEmailResponse
     */
    public function setGetRIMForEmailResult($GetRIMForEmailResult)
    {
      $this->GetRIMForEmailResult = $GetRIMForEmailResult;
      return $this;
    }

}
