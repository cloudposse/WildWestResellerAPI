<?php

namespace cloudposse\wild_west_reseller_api;

class GetSMTPRelayPlansForDomainResponse
{

    /**
     * @var string $GetSMTPRelayPlansForDomainResult
     */
    protected $GetSMTPRelayPlansForDomainResult = null;

    /**
     * @param string $GetSMTPRelayPlansForDomainResult
     */
    public function __construct($GetSMTPRelayPlansForDomainResult)
    {
      $this->GetSMTPRelayPlansForDomainResult = $GetSMTPRelayPlansForDomainResult;
    }

    /**
     * @return string
     */
    public function getGetSMTPRelayPlansForDomainResult()
    {
      return $this->GetSMTPRelayPlansForDomainResult;
    }

    /**
     * @param string $GetSMTPRelayPlansForDomainResult
     * @return \cloudposse\wild_west_reseller_api\GetSMTPRelayPlansForDomainResponse
     */
    public function setGetSMTPRelayPlansForDomainResult($GetSMTPRelayPlansForDomainResult)
    {
      $this->GetSMTPRelayPlansForDomainResult = $GetSMTPRelayPlansForDomainResult;
      return $this;
    }

}
