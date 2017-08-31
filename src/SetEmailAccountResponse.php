<?php

namespace cloudposse\wild_west_reseller_api;

class SetEmailAccountResponse
{

    /**
     * @var string $SetEmailAccountResult
     */
    protected $SetEmailAccountResult = null;

    /**
     * @param string $SetEmailAccountResult
     */
    public function __construct($SetEmailAccountResult)
    {
      $this->SetEmailAccountResult = $SetEmailAccountResult;
    }

    /**
     * @return string
     */
    public function getSetEmailAccountResult()
    {
      return $this->SetEmailAccountResult;
    }

    /**
     * @param string $SetEmailAccountResult
     * @return \cloudposse\wild_west_reseller_api\SetEmailAccountResponse
     */
    public function setSetEmailAccountResult($SetEmailAccountResult)
    {
      $this->SetEmailAccountResult = $SetEmailAccountResult;
      return $this;
    }

}
