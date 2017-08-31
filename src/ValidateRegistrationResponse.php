<?php

namespace cloudposse\wild_west_reseller_api;

class ValidateRegistrationResponse
{

    /**
     * @var string $ValidateRegistrationResult
     */
    protected $ValidateRegistrationResult = null;

    /**
     * @param string $ValidateRegistrationResult
     */
    public function __construct($ValidateRegistrationResult)
    {
      $this->ValidateRegistrationResult = $ValidateRegistrationResult;
    }

    /**
     * @return string
     */
    public function getValidateRegistrationResult()
    {
      return $this->ValidateRegistrationResult;
    }

    /**
     * @param string $ValidateRegistrationResult
     * @return \cloudposse\wild_west_reseller_api\ValidateRegistrationResponse
     */
    public function setValidateRegistrationResult($ValidateRegistrationResult)
    {
      $this->ValidateRegistrationResult = $ValidateRegistrationResult;
      return $this;
    }

}
