<?php

namespace cloudposse\wild_west_reseller_api;

class SetRIMAccountResponse
{

    /**
     * @var string $SetRIMAccountResult
     */
    protected $SetRIMAccountResult = null;

    /**
     * @param string $SetRIMAccountResult
     */
    public function __construct($SetRIMAccountResult)
    {
      $this->SetRIMAccountResult = $SetRIMAccountResult;
    }

    /**
     * @return string
     */
    public function getSetRIMAccountResult()
    {
      return $this->SetRIMAccountResult;
    }

    /**
     * @param string $SetRIMAccountResult
     * @return \cloudposse\wild_west_reseller_api\SetRIMAccountResponse
     */
    public function setSetRIMAccountResult($SetRIMAccountResult)
    {
      $this->SetRIMAccountResult = $SetRIMAccountResult;
      return $this;
    }

}
