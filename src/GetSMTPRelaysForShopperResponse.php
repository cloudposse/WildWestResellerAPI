<?php

namespace cloudposse\wild_west_reseller_api;

class GetSMTPRelaysForShopperResponse
{

    /**
     * @var string $GetSMTPRelaysForShopperResult
     */
    protected $GetSMTPRelaysForShopperResult = null;

    /**
     * @param string $GetSMTPRelaysForShopperResult
     */
    public function __construct($GetSMTPRelaysForShopperResult)
    {
      $this->GetSMTPRelaysForShopperResult = $GetSMTPRelaysForShopperResult;
    }

    /**
     * @return string
     */
    public function getGetSMTPRelaysForShopperResult()
    {
      return $this->GetSMTPRelaysForShopperResult;
    }

    /**
     * @param string $GetSMTPRelaysForShopperResult
     * @return \cloudposse\wild_west_reseller_api\GetSMTPRelaysForShopperResponse
     */
    public function setGetSMTPRelaysForShopperResult($GetSMTPRelaysForShopperResult)
    {
      $this->GetSMTPRelaysForShopperResult = $GetSMTPRelaysForShopperResult;
      return $this;
    }

}
