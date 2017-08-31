<?php

namespace cloudposse\wild_west_reseller_api;

class GetEmailAddressesForDomainResponse
{

    /**
     * @var string $GetEmailAddressesForDomainResult
     */
    protected $GetEmailAddressesForDomainResult = null;

    /**
     * @param string $GetEmailAddressesForDomainResult
     */
    public function __construct($GetEmailAddressesForDomainResult)
    {
      $this->GetEmailAddressesForDomainResult = $GetEmailAddressesForDomainResult;
    }

    /**
     * @return string
     */
    public function getGetEmailAddressesForDomainResult()
    {
      return $this->GetEmailAddressesForDomainResult;
    }

    /**
     * @param string $GetEmailAddressesForDomainResult
     * @return \cloudposse\wild_west_reseller_api\GetEmailAddressesForDomainResponse
     */
    public function setGetEmailAddressesForDomainResult($GetEmailAddressesForDomainResult)
    {
      $this->GetEmailAddressesForDomainResult = $GetEmailAddressesForDomainResult;
      return $this;
    }

}
