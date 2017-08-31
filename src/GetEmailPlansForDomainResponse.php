<?php

namespace cloudposse\wild_west_reseller_api;

class GetEmailPlansForDomainResponse
{

    /**
     * @var string $GetEmailPlansForDomainResult
     */
    protected $GetEmailPlansForDomainResult = null;

    /**
     * @param string $GetEmailPlansForDomainResult
     */
    public function __construct($GetEmailPlansForDomainResult)
    {
      $this->GetEmailPlansForDomainResult = $GetEmailPlansForDomainResult;
    }

    /**
     * @return string
     */
    public function getGetEmailPlansForDomainResult()
    {
      return $this->GetEmailPlansForDomainResult;
    }

    /**
     * @param string $GetEmailPlansForDomainResult
     * @return \cloudposse\wild_west_reseller_api\GetEmailPlansForDomainResponse
     */
    public function setGetEmailPlansForDomainResult($GetEmailPlansForDomainResult)
    {
      $this->GetEmailPlansForDomainResult = $GetEmailPlansForDomainResult;
      return $this;
    }

}
