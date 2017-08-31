<?php

namespace cloudposse\wild_west_reseller_api;

class GetEmailPlanInfoForShopperResponse
{

    /**
     * @var string $GetEmailPlanInfoForShopperResult
     */
    protected $GetEmailPlanInfoForShopperResult = null;

    /**
     * @param string $GetEmailPlanInfoForShopperResult
     */
    public function __construct($GetEmailPlanInfoForShopperResult)
    {
      $this->GetEmailPlanInfoForShopperResult = $GetEmailPlanInfoForShopperResult;
    }

    /**
     * @return string
     */
    public function getGetEmailPlanInfoForShopperResult()
    {
      return $this->GetEmailPlanInfoForShopperResult;
    }

    /**
     * @param string $GetEmailPlanInfoForShopperResult
     * @return \cloudposse\wild_west_reseller_api\GetEmailPlanInfoForShopperResponse
     */
    public function setGetEmailPlanInfoForShopperResult($GetEmailPlanInfoForShopperResult)
    {
      $this->GetEmailPlanInfoForShopperResult = $GetEmailPlanInfoForShopperResult;
      return $this;
    }

}
