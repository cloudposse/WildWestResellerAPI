<?php

namespace cloudposse\wild_west_reseller_api;

class PollResponse
{

    /**
     * @var string $PollResult
     */
    protected $PollResult = null;

    /**
     * @param string $PollResult
     */
    public function __construct($PollResult)
    {
      $this->PollResult = $PollResult;
    }

    /**
     * @return string
     */
    public function getPollResult()
    {
      return $this->PollResult;
    }

    /**
     * @param string $PollResult
     * @return \cloudposse\wild_west_reseller_api\PollResponse
     */
    public function setPollResult($PollResult)
    {
      $this->PollResult = $PollResult;
      return $this;
    }

}
