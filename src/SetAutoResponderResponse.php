<?php

namespace cloudposse\wild_west_reseller_api;

class SetAutoResponderResponse
{

    /**
     * @var string $SetAutoResponderResult
     */
    protected $SetAutoResponderResult = null;

    /**
     * @param string $SetAutoResponderResult
     */
    public function __construct($SetAutoResponderResult)
    {
      $this->SetAutoResponderResult = $SetAutoResponderResult;
    }

    /**
     * @return string
     */
    public function getSetAutoResponderResult()
    {
      return $this->SetAutoResponderResult;
    }

    /**
     * @param string $SetAutoResponderResult
     * @return \cloudposse\wild_west_reseller_api\SetAutoResponderResponse
     */
    public function setSetAutoResponderResult($SetAutoResponderResult)
    {
      $this->SetAutoResponderResult = $SetAutoResponderResult;
      return $this;
    }

}
