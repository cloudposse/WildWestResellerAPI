<?php

namespace cloudposse\wild_west_reseller_api;

class InfoResponse
{

    /**
     * @var string $InfoResult
     */
    protected $InfoResult = null;

    /**
     * @param string $InfoResult
     */
    public function __construct($InfoResult)
    {
      $this->InfoResult = $InfoResult;
    }

    /**
     * @return string
     */
    public function getInfoResult()
    {
      return $this->InfoResult;
    }

    /**
     * @param string $InfoResult
     * @return \cloudposse\wild_west_reseller_api\InfoResponse
     */
    public function setInfoResult($InfoResult)
    {
      $this->InfoResult = $InfoResult;
      return $this;
    }

}
