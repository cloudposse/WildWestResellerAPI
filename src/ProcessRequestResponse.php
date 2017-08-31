<?php

namespace cloudposse\wild_west_reseller_api;

class ProcessRequestResponse
{

    /**
     * @var string $ProcessRequestResult
     */
    protected $ProcessRequestResult = null;

    /**
     * @param string $ProcessRequestResult
     */
    public function __construct($ProcessRequestResult)
    {
      $this->ProcessRequestResult = $ProcessRequestResult;
    }

    /**
     * @return string
     */
    public function getProcessRequestResult()
    {
      return $this->ProcessRequestResult;
    }

    /**
     * @param string $ProcessRequestResult
     * @return \cloudposse\wild_west_reseller_api\ProcessRequestResponse
     */
    public function setProcessRequestResult($ProcessRequestResult)
    {
      $this->ProcessRequestResult = $ProcessRequestResult;
      return $this;
    }

}
