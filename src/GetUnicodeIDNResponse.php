<?php

namespace cloudposse\wild_west_reseller_api;

class GetUnicodeIDNResponse
{

    /**
     * @var string $GetUnicodeIDNResult
     */
    protected $GetUnicodeIDNResult = null;

    /**
     * @param string $GetUnicodeIDNResult
     */
    public function __construct($GetUnicodeIDNResult)
    {
      $this->GetUnicodeIDNResult = $GetUnicodeIDNResult;
    }

    /**
     * @return string
     */
    public function getGetUnicodeIDNResult()
    {
      return $this->GetUnicodeIDNResult;
    }

    /**
     * @param string $GetUnicodeIDNResult
     * @return \cloudposse\wild_west_reseller_api\GetUnicodeIDNResponse
     */
    public function setGetUnicodeIDNResult($GetUnicodeIDNResult)
    {
      $this->GetUnicodeIDNResult = $GetUnicodeIDNResult;
      return $this;
    }

}
