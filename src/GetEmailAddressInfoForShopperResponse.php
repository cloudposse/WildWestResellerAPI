<?php

namespace cloudposse\wild_west_reseller_api;

class GetEmailAddressInfoForShopperResponse
{

    /**
     * @var string $GetEmailAddressInfoForShopperResult
     */
    protected $GetEmailAddressInfoForShopperResult = null;

    /**
     * @param string $GetEmailAddressInfoForShopperResult
     */
    public function __construct($GetEmailAddressInfoForShopperResult)
    {
      $this->GetEmailAddressInfoForShopperResult = $GetEmailAddressInfoForShopperResult;
    }

    /**
     * @return string
     */
    public function getGetEmailAddressInfoForShopperResult()
    {
      return $this->GetEmailAddressInfoForShopperResult;
    }

    /**
     * @param string $GetEmailAddressInfoForShopperResult
     * @return \cloudposse\wild_west_reseller_api\GetEmailAddressInfoForShopperResponse
     */
    public function setGetEmailAddressInfoForShopperResult($GetEmailAddressInfoForShopperResult)
    {
      $this->GetEmailAddressInfoForShopperResult = $GetEmailAddressInfoForShopperResult;
      return $this;
    }

}
