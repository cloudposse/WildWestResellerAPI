<?php

namespace cloudposse\wild_west_reseller_api;

class NameGenResponse
{

    /**
     * @var string $NameGenResult
     */
    protected $NameGenResult = null;

    /**
     * @param string $NameGenResult
     */
    public function __construct($NameGenResult)
    {
      $this->NameGenResult = $NameGenResult;
    }

    /**
     * @return string
     */
    public function getNameGenResult()
    {
      return $this->NameGenResult;
    }

    /**
     * @param string $NameGenResult
     * @return \cloudposse\wild_west_reseller_api\NameGenResponse
     */
    public function setNameGenResult($NameGenResult)
    {
      $this->NameGenResult = $NameGenResult;
      return $this;
    }

}
