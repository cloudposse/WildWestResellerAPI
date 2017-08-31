<?php

namespace cloudposse\wild_west_reseller_api;

class NameGenDBResponse
{

    /**
     * @var string $NameGenDBResult
     */
    protected $NameGenDBResult = null;

    /**
     * @param string $NameGenDBResult
     */
    public function __construct($NameGenDBResult)
    {
      $this->NameGenDBResult = $NameGenDBResult;
    }

    /**
     * @return string
     */
    public function getNameGenDBResult()
    {
      return $this->NameGenDBResult;
    }

    /**
     * @param string $NameGenDBResult
     * @return \cloudposse\wild_west_reseller_api\NameGenDBResponse
     */
    public function setNameGenDBResult($NameGenDBResult)
    {
      $this->NameGenDBResult = $NameGenDBResult;
      return $this;
    }

}
