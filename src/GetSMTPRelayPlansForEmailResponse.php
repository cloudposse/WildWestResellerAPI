<?php

namespace cloudposse\wild_west_reseller_api;

class GetSMTPRelayPlansForEmailResponse
{

    /**
     * @var string $GetSMTPRelayPlansForEmailResult
     */
    protected $GetSMTPRelayPlansForEmailResult = null;

    /**
     * @param string $GetSMTPRelayPlansForEmailResult
     */
    public function __construct($GetSMTPRelayPlansForEmailResult)
    {
      $this->GetSMTPRelayPlansForEmailResult = $GetSMTPRelayPlansForEmailResult;
    }

    /**
     * @return string
     */
    public function getGetSMTPRelayPlansForEmailResult()
    {
      return $this->GetSMTPRelayPlansForEmailResult;
    }

    /**
     * @param string $GetSMTPRelayPlansForEmailResult
     * @return \cloudposse\wild_west_reseller_api\GetSMTPRelayPlansForEmailResponse
     */
    public function setGetSMTPRelayPlansForEmailResult($GetSMTPRelayPlansForEmailResult)
    {
      $this->GetSMTPRelayPlansForEmailResult = $GetSMTPRelayPlansForEmailResult;
      return $this;
    }

}
