<?php

namespace cloudposse\wild_west_reseller_api;

class ResendContactValidationResponse
{

    /**
     * @var string $ResendContactValidationResult
     */
    protected $ResendContactValidationResult = null;

    /**
     * @param string $ResendContactValidationResult
     */
    public function __construct($ResendContactValidationResult)
    {
      $this->ResendContactValidationResult = $ResendContactValidationResult;
    }

    /**
     * @return string
     */
    public function getResendContactValidationResult()
    {
      return $this->ResendContactValidationResult;
    }

    /**
     * @param string $ResendContactValidationResult
     * @return \cloudposse\wild_west_reseller_api\ResendContactValidationResponse
     */
    public function setResendContactValidationResult($ResendContactValidationResult)
    {
      $this->ResendContactValidationResult = $ResendContactValidationResult;
      return $this;
    }

}
