<?php

namespace cloudposse\wild_west_reseller_api;

class ResetPasswordResponse
{

    /**
     * @var string $ResetPasswordResult
     */
    protected $ResetPasswordResult = null;

    /**
     * @param string $ResetPasswordResult
     */
    public function __construct($ResetPasswordResult)
    {
      $this->ResetPasswordResult = $ResetPasswordResult;
    }

    /**
     * @return string
     */
    public function getResetPasswordResult()
    {
      return $this->ResetPasswordResult;
    }

    /**
     * @param string $ResetPasswordResult
     * @return \cloudposse\wild_west_reseller_api\ResetPasswordResponse
     */
    public function setResetPasswordResult($ResetPasswordResult)
    {
      $this->ResetPasswordResult = $ResetPasswordResult;
      return $this;
    }

}
