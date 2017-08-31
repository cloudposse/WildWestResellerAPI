<?php

namespace cloudposse\wild_west_reseller_api;

class CreateNewShopperResponse
{

    /**
     * @var string $CreateNewShopperResult
     */
    protected $CreateNewShopperResult = null;

    /**
     * @param string $CreateNewShopperResult
     */
    public function __construct($CreateNewShopperResult)
    {
      $this->CreateNewShopperResult = $CreateNewShopperResult;
    }

    /**
     * @return string
     */
    public function getCreateNewShopperResult()
    {
      return $this->CreateNewShopperResult;
    }

    /**
     * @param string $CreateNewShopperResult
     * @return \cloudposse\wild_west_reseller_api\CreateNewShopperResponse
     */
    public function setCreateNewShopperResult($CreateNewShopperResult)
    {
      $this->CreateNewShopperResult = $CreateNewShopperResult;
      return $this;
    }

}
