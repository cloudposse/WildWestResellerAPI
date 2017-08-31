<?php

namespace cloudposse\wild_west_reseller_api;

class GetEmailPlansForShopperResponse
{

    /**
     * @var string $GetEmailPlansForShopperResult
     */
    protected $GetEmailPlansForShopperResult = null;

    /**
     * @param string $GetEmailPlansForShopperResult
     */
    public function __construct($GetEmailPlansForShopperResult)
    {
      $this->GetEmailPlansForShopperResult = $GetEmailPlansForShopperResult;
    }

    /**
     * @return string
     */
    public function getGetEmailPlansForShopperResult()
    {
      return $this->GetEmailPlansForShopperResult;
    }

    /**
     * @param string $GetEmailPlansForShopperResult
     * @return \cloudposse\wild_west_reseller_api\GetEmailPlansForShopperResponse
     */
    public function setGetEmailPlansForShopperResult($GetEmailPlansForShopperResult)
    {
      $this->GetEmailPlansForShopperResult = $GetEmailPlansForShopperResult;
      return $this;
    }

}
