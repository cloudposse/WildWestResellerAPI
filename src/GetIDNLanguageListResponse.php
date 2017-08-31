<?php

namespace cloudposse\wild_west_reseller_api;

class GetIDNLanguageListResponse
{

    /**
     * @var string $GetIDNLanguageListResult
     */
    protected $GetIDNLanguageListResult = null;

    /**
     * @param string $GetIDNLanguageListResult
     */
    public function __construct($GetIDNLanguageListResult)
    {
      $this->GetIDNLanguageListResult = $GetIDNLanguageListResult;
    }

    /**
     * @return string
     */
    public function getGetIDNLanguageListResult()
    {
      return $this->GetIDNLanguageListResult;
    }

    /**
     * @param string $GetIDNLanguageListResult
     * @return \cloudposse\wild_west_reseller_api\GetIDNLanguageListResponse
     */
    public function setGetIDNLanguageListResult($GetIDNLanguageListResult)
    {
      $this->GetIDNLanguageListResult = $GetIDNLanguageListResult;
      return $this;
    }

}
