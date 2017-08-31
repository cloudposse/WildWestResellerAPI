<?php

namespace cloudposse\wild_west_reseller_api;

class GetLegalAgreementUrlResponse
{

    /**
     * @var string $GetLegalAgreementUrlResult
     */
    protected $GetLegalAgreementUrlResult = null;

    /**
     * @param string $GetLegalAgreementUrlResult
     */
    public function __construct($GetLegalAgreementUrlResult)
    {
      $this->GetLegalAgreementUrlResult = $GetLegalAgreementUrlResult;
    }

    /**
     * @return string
     */
    public function getGetLegalAgreementUrlResult()
    {
      return $this->GetLegalAgreementUrlResult;
    }

    /**
     * @param string $GetLegalAgreementUrlResult
     * @return \cloudposse\wild_west_reseller_api\GetLegalAgreementUrlResponse
     */
    public function setGetLegalAgreementUrlResult($GetLegalAgreementUrlResult)
    {
      $this->GetLegalAgreementUrlResult = $GetLegalAgreementUrlResult;
      return $this;
    }

}
