<?php

namespace cloudposse\wild_west_reseller_api;

class TestEmailPasswordResponse
{

    /**
     * @var string $TestEmailPasswordResult
     */
    protected $TestEmailPasswordResult = null;

    /**
     * @param string $TestEmailPasswordResult
     */
    public function __construct($TestEmailPasswordResult)
    {
      $this->TestEmailPasswordResult = $TestEmailPasswordResult;
    }

    /**
     * @return string
     */
    public function getTestEmailPasswordResult()
    {
      return $this->TestEmailPasswordResult;
    }

    /**
     * @param string $TestEmailPasswordResult
     * @return \cloudposse\wild_west_reseller_api\TestEmailPasswordResponse
     */
    public function setTestEmailPasswordResult($TestEmailPasswordResult)
    {
      $this->TestEmailPasswordResult = $TestEmailPasswordResult;
      return $this;
    }

}
