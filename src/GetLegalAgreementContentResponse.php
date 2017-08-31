<?php

namespace cloudposse\wild_west_reseller_api;

class GetLegalAgreementContentResponse
{

    /**
     * @var string $GetLegalAgreementContentResult
     */
    protected $GetLegalAgreementContentResult = null;

    /**
     * @param string $GetLegalAgreementContentResult
     */
    public function __construct($GetLegalAgreementContentResult)
    {
      $this->GetLegalAgreementContentResult = $GetLegalAgreementContentResult;
    }

    /**
     * @return string
     */
    public function getGetLegalAgreementContentResult()
    {
      return $this->GetLegalAgreementContentResult;
    }

    /**
     * @param string $GetLegalAgreementContentResult
     * @return \cloudposse\wild_west_reseller_api\GetLegalAgreementContentResponse
     */
    public function setGetLegalAgreementContentResult($GetLegalAgreementContentResult)
    {
      $this->GetLegalAgreementContentResult = $GetLegalAgreementContentResult;
      return $this;
    }

}
