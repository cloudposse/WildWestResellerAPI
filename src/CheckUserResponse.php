<?php

namespace cloudposse\wild_west_reseller_api;

class CheckUserResponse
{

    /**
     * @var string $CheckUserResult
     */
    protected $CheckUserResult = null;

    /**
     * @param string $CheckUserResult
     */
    public function __construct($CheckUserResult)
    {
      $this->CheckUserResult = $CheckUserResult;
    }

    /**
     * @return string
     */
    public function getCheckUserResult()
    {
      return $this->CheckUserResult;
    }

    /**
     * @param string $CheckUserResult
     * @return \cloudposse\wild_west_reseller_api\CheckUserResponse
     */
    public function setCheckUserResult($CheckUserResult)
    {
      $this->CheckUserResult = $CheckUserResult;
      return $this;
    }

}
