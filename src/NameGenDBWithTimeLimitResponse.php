<?php

namespace cloudposse\wild_west_reseller_api;

class NameGenDBWithTimeLimitResponse
{

    /**
     * @var string $NameGenDBWithTimeLimitResult
     */
    protected $NameGenDBWithTimeLimitResult = null;

    /**
     * @param string $NameGenDBWithTimeLimitResult
     */
    public function __construct($NameGenDBWithTimeLimitResult)
    {
      $this->NameGenDBWithTimeLimitResult = $NameGenDBWithTimeLimitResult;
    }

    /**
     * @return string
     */
    public function getNameGenDBWithTimeLimitResult()
    {
      return $this->NameGenDBWithTimeLimitResult;
    }

    /**
     * @param string $NameGenDBWithTimeLimitResult
     * @return \cloudposse\wild_west_reseller_api\NameGenDBWithTimeLimitResponse
     */
    public function setNameGenDBWithTimeLimitResult($NameGenDBWithTimeLimitResult)
    {
      $this->NameGenDBWithTimeLimitResult = $NameGenDBWithTimeLimitResult;
      return $this;
    }

}
