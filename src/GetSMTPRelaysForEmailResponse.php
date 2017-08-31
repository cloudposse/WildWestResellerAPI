<?php

namespace cloudposse\wild_west_reseller_api;

class GetSMTPRelaysForEmailResponse
{

    /**
     * @var string $GetSMTPRelaysForEmailResult
     */
    protected $GetSMTPRelaysForEmailResult = null;

    /**
     * @param string $GetSMTPRelaysForEmailResult
     */
    public function __construct($GetSMTPRelaysForEmailResult)
    {
      $this->GetSMTPRelaysForEmailResult = $GetSMTPRelaysForEmailResult;
    }

    /**
     * @return string
     */
    public function getGetSMTPRelaysForEmailResult()
    {
      return $this->GetSMTPRelaysForEmailResult;
    }

    /**
     * @param string $GetSMTPRelaysForEmailResult
     * @return \cloudposse\wild_west_reseller_api\GetSMTPRelaysForEmailResponse
     */
    public function setGetSMTPRelaysForEmailResult($GetSMTPRelaysForEmailResult)
    {
      $this->GetSMTPRelaysForEmailResult = $GetSMTPRelaysForEmailResult;
      return $this;
    }

}
