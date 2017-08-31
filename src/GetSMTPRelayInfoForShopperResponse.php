<?php

namespace cloudposse\wild_west_reseller_api;

class GetSMTPRelayInfoForShopperResponse
{

    /**
     * @var string $GetSMTPRelayInfoForShopperResult
     */
    protected $GetSMTPRelayInfoForShopperResult = null;

    /**
     * @param string $GetSMTPRelayInfoForShopperResult
     */
    public function __construct($GetSMTPRelayInfoForShopperResult)
    {
      $this->GetSMTPRelayInfoForShopperResult = $GetSMTPRelayInfoForShopperResult;
    }

    /**
     * @return string
     */
    public function getGetSMTPRelayInfoForShopperResult()
    {
      return $this->GetSMTPRelayInfoForShopperResult;
    }

    /**
     * @param string $GetSMTPRelayInfoForShopperResult
     * @return \cloudposse\wild_west_reseller_api\GetSMTPRelayInfoForShopperResponse
     */
    public function setGetSMTPRelayInfoForShopperResult($GetSMTPRelayInfoForShopperResult)
    {
      $this->GetSMTPRelayInfoForShopperResult = $GetSMTPRelayInfoForShopperResult;
      return $this;
    }

}
