<?php

namespace cloudposse\wild_west_reseller_api;

class CancelResponse
{

    /**
     * @var string $CancelResult
     */
    protected $CancelResult = null;

    /**
     * @param string $CancelResult
     */
    public function __construct($CancelResult)
    {
      $this->CancelResult = $CancelResult;
    }

    /**
     * @return string
     */
    public function getCancelResult()
    {
      return $this->CancelResult;
    }

    /**
     * @param string $CancelResult
     * @return \cloudposse\wild_west_reseller_api\CancelResponse
     */
    public function setCancelResult($CancelResult)
    {
      $this->CancelResult = $CancelResult;
      return $this;
    }

}
