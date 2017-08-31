<?php

namespace cloudposse\wild_west_reseller_api;

class RemoveRIMAccountResponse
{

    /**
     * @var string $RemoveRIMAccountResult
     */
    protected $RemoveRIMAccountResult = null;

    /**
     * @param string $RemoveRIMAccountResult
     */
    public function __construct($RemoveRIMAccountResult)
    {
      $this->RemoveRIMAccountResult = $RemoveRIMAccountResult;
    }

    /**
     * @return string
     */
    public function getRemoveRIMAccountResult()
    {
      return $this->RemoveRIMAccountResult;
    }

    /**
     * @param string $RemoveRIMAccountResult
     * @return \cloudposse\wild_west_reseller_api\RemoveRIMAccountResponse
     */
    public function setRemoveRIMAccountResult($RemoveRIMAccountResult)
    {
      $this->RemoveRIMAccountResult = $RemoveRIMAccountResult;
      return $this;
    }

}
