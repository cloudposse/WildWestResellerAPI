<?php

namespace cloudposse\wild_west_reseller_api;

class GetEmailAddressesForShopperResponse
{

    /**
     * @var string $GetEmailAddressesForShopperResult
     */
    protected $GetEmailAddressesForShopperResult = null;

    /**
     * @param string $GetEmailAddressesForShopperResult
     */
    public function __construct($GetEmailAddressesForShopperResult)
    {
      $this->GetEmailAddressesForShopperResult = $GetEmailAddressesForShopperResult;
    }

    /**
     * @return string
     */
    public function getGetEmailAddressesForShopperResult()
    {
      return $this->GetEmailAddressesForShopperResult;
    }

    /**
     * @param string $GetEmailAddressesForShopperResult
     * @return \cloudposse\wild_west_reseller_api\GetEmailAddressesForShopperResponse
     */
    public function setGetEmailAddressesForShopperResult($GetEmailAddressesForShopperResult)
    {
      $this->GetEmailAddressesForShopperResult = $GetEmailAddressesForShopperResult;
      return $this;
    }

}
