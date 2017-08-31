<?php

namespace cloudposse\wild_west_reseller_api;

class SetShopperInfoResponse
{

    /**
     * @var string $SetShopperInfoResult
     */
    protected $SetShopperInfoResult = null;

    /**
     * @param string $SetShopperInfoResult
     */
    public function __construct($SetShopperInfoResult)
    {
      $this->SetShopperInfoResult = $SetShopperInfoResult;
    }

    /**
     * @return string
     */
    public function getSetShopperInfoResult()
    {
      return $this->SetShopperInfoResult;
    }

    /**
     * @param string $SetShopperInfoResult
     * @return \cloudposse\wild_west_reseller_api\SetShopperInfoResponse
     */
    public function setSetShopperInfoResult($SetShopperInfoResult)
    {
      $this->SetShopperInfoResult = $SetShopperInfoResult;
      return $this;
    }

}
