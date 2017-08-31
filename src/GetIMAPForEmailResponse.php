<?php

namespace cloudposse\wild_west_reseller_api;

class GetIMAPForEmailResponse
{

    /**
     * @var string $GetIMAPForEmailResult
     */
    protected $GetIMAPForEmailResult = null;

    /**
     * @param string $GetIMAPForEmailResult
     */
    public function __construct($GetIMAPForEmailResult)
    {
      $this->GetIMAPForEmailResult = $GetIMAPForEmailResult;
    }

    /**
     * @return string
     */
    public function getGetIMAPForEmailResult()
    {
      return $this->GetIMAPForEmailResult;
    }

    /**
     * @param string $GetIMAPForEmailResult
     * @return \cloudposse\wild_west_reseller_api\GetIMAPForEmailResponse
     */
    public function setGetIMAPForEmailResult($GetIMAPForEmailResult)
    {
      $this->GetIMAPForEmailResult = $GetIMAPForEmailResult;
      return $this;
    }

}
